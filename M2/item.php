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
                echo "did not reach";
            }
            else {
                $product_id = $item['id'];
                $user_id = get_user_id();
                $desired_quantity = 1;
                $unit_price = $item['unit_price'];

                echo "here". $product_id . $user_id . $desired_quantity . $unit_price;

                $stmt2 = $db->prepare("INSERT INTO Cart  (product_id, user_id, desired_quantity, unit_price) VALUES(:product_id, :user_id, :desired_quantity, :unit_price)");
                $stmt2->execute([":product_id" => $product_id, ":user_id" => $user_id, ":desired_quantity" => $desired_quantity, ":unit_price" => $unit_price]);
                
            }
        }


    }
} catch (Exception $e) {
    echo "haha suck ass. it didn't work.";
    echo "Error: " . $e->getMessage();

}


?>

<html>

    <form id='form' method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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

    <script>
        function addToCart() {
            var formData = new FormData(document.querySelector('form'));

            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Log the response from the server
                // You can add additional logic here based on the response
            })
            .catch(error => console.error('Error:', error));
        }
    </script>

</html>
