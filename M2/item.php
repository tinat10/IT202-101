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

        if (has_role("Admin") || has_role("Shop Owner")) { ?>
            <html>
                <div class="edit_item">
                    <a href="../edit_item.php">Edit Item</a>
                </div>

                <style> 

                    .edit_item {
                        margin-top: 40px;
                        text-align: center;
                    }

                    .edit_item a {
                        text-decoration: none;
                        color: #333;
                        padding: 5px 10px;
                        background-color: #ddd;
                        border-radius: 4px;
                    }

                    .edit_item a:hover {
                        background-color: #ccc;
                    }

                </style>


            </html>

        <?php 
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) { 

            if (!is_logged_in()) {
                header('Location: login.php');
            }
            else {
                $stmt2 = $db->prepare("INSERT INTO Cart  (product_id, user_id, desired_quantity, unit_price) VALUES(:product_id, :user_id, 1, :user_price)");
                $stmt2->execute([":product_id" => $item['id'], ":user+id" => get_user_id(), "desired_quantity" => 1, ":unit_price" => $item['unit_price']]);
            }
        
            $name = se($_POST, "name", "", false);
            $desc = se($_POST, "description", "", false);
            $categ = se($_POST, "category", "", false);
            $stock = se($_POST, "stock", "", false);
            $price = se($_POST, "price", "", false);
        
            if ($conn->query($sql2) === TRUE) {
                echo "Item added to cart successfully.";
            } else {
                echo "Error: " . $sql2 . "<br>" . $conn->error;
            }
        }


    }
} catch (Exception $e) {}


?>

<html>

    <div class="add_to_cart">
        <a href="../cart.php" onclick="addToCart()">Add to Cart</a>
    </div>

    <div class="go-back">
        <a href="../shop.php">Go Back to Product List</a>
    </div>
    
    <style> 

        .add_to_cart {
            margin-top: 40px;
            text-align: center;
        }

        .add_to_cart div {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            background-color: #ddd;
            border-radius: 4px;
        }

        .add_to_cart:hover {
            background-color: #ccc;
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

    <script>
        function addToCart() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process.php", true);
        }
    </script>

</html>
