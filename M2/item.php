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
        echo "Stock: $" . $item['stock'] . "<br>";
        echo "Unit Price: $" . $item['unit_price'] . "<br>";
        if ($item['visibility'] == 1)
            echo "Visibility: TRUE <br>";
        else
            echo "Visibility: FALSE <br>";

    }
} catch (Exception $e) {}


?>

<html>
    <div class="go-back">
        <a href="../shop.php">Go Back to Product List</a>
    </div>
    <style> 

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
