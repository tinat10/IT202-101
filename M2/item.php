<?php 

require_once(__DIR__ . "/partials/nav.php");
try {
    if(!empty($_GET['product_id'])){
        $itemNum = $_GET['product_id'];
    }
} catch(Exception $e) {}

$db = getDB();
try {

    $sql = 'SELECT * FROM Products';
    $stmt = $db -> prepare($sql);
    $stmt -> execute();

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($stmt -> rowCount()>0) {
        echo "<h1>Products<h1><br><br>";
        $item = ($products[$itemNum-1]);

        echo "<li>";
        echo "Product ID: " . $item['id'] . "<br>";
        echo "Name: " . $item['name'] . "<br>";
        echo "Description: " . $item['description'] . "<br>";
        echo "Category: " . $item['category'] . "<br>";
        echo "Stock: " . $item['stock'] . "<br>";
        echo "Unit Price: $" . $item['unit_price'] . "<br>";
        if ($item['visibility'] == 1)
            echo "Visibility: TRUE <br>";
        else
            echo "Visibility: FALSE <br>";

        if (has_role("Admin") || has_role("Shop Owner")) { 
            echo 'Edit Item: <a href="edit_item.php?product_id=' . $item['id'] . '">' . $item['name'] . '</a><br>';
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) { 

            if (!is_logged_in()) {
                header('Location: login.php?status=wantsCart');
                echo "Must log in first to have a cart";
                exit;
            }
            else {
                $product_id = $item['id'];
                $user_id = get_user_id();
                $desired_quantity = 1;
                $unit_price = $item['unit_price'];

               // echo "here". $product_id . $user_id . $desired_quantity . $unit_price;

                $stmt2 = $db->prepare("INSERT INTO Cart (product_id, user_id, desired_quantity, unit_price) VALUES(:product_id, :user_id, :desired_quantity, :unit_price)");
                $stmt2->execute([":product_id" => $product_id, ":user_id" => $user_id, ":desired_quantity" => $desired_quantity, ":unit_price" => $unit_price]);
                
                echo "Successfully added item to cart!";
                //header('Location: cart.php');
                //exit;
            }
        }

    }
} catch (Exception $e) {
    echo "haha suck butt. it didn't work.";
    echo "Error: " . $e->getMessage();

}


?>

<html>

    <form id='form' method="POST">
        <div class="add_to_cart">
            <input type="submit" name="add_to_cart" value="Add to Cart">
        </div>
    </form>

    <div class="go-back">
        <a href="../shop.php">Go Back to Product List</a>
    </div>
    
    <style> 

        .add_to_cart {
            margin-top: 40px;
            font-size: 50px;
            text-align: center;
        }

        .add_to_cart div {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            background-color: #ddd;
            border-radius: 4px;
        }

        .go-back {
            margin-top: 40px;
            text-align: center;
        }

        .go-back a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            background-color: #ddd;
            border-radius: 4px;
        }

        .go-back a:hover {
            background-color: #ccc;
        }
    </style>

</html>
