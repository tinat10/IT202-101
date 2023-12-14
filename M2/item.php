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
    <div class="product-details">
            <img src="product-image.jpg" alt="Product Image">
            <h2>Product Name</h2>
            <p>Description of the product goes here. It can be a detailed overview of the features and benefits of the product.</p>
            <p class="product-details-price">Price: $0.00</p>
        </div>

        <div class="go-back">
            <a href="#">Go Back to Product List</a>
        </div>
    <style> 
        body {
            font-family: 'monospace';
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-details {
            border: 1px solid #ddd;
            padding: 20px;
            overflow: hidden;
        }

        .product-details img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .product-details h2 {
            font-size: 1.5em;
            color: #333;
        }

        .product-details p {
            color: #666;
            line-height: 1.6;
        }

        .product-details-price {
            color: #c00;
            font-weight: bold;
        }

        .go-back {
            margin-top: 20px;
            text-align: center;
        }

        .go-back a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            background-color: #ddd;
            border-radius: 4px;
        }

        .go-back a:hover {
            background-color: #ccc;
        }
    </style>

</html>
