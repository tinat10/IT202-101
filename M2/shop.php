<?php 
    require_once(__DIR__ . "/partials/nav.php");

    $db = getDB();
    try {

        $sql = 'SELECT * FROM Products';
        $stmt = $db -> prepare($sql);
        $stmt -> execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($stmt -> rowCount()>0) {
            echo "<h1>Products<h1><br><br>";
            foreach ($products as $item) {
                if ($item['visibility'] == 1) {
                    echo "<li>";
                    echo "Product ID: " . $item['id'] . "<br>"; 
                    echo 'Name: <a href="item.php?product_id=' . $item['id'] . '">' . $item['name'] . '</a><br>';
                    //echo "Name: " . $item['name'] . "<br>";
                    echo "Description: " . $item['description'] . "<br>";
                    echo "Category: " . $item['category'] . "<br>";
                    echo "Stock: $" . $item['stock'] . "<br>";
                    echo "Unit Price: $" . $item['unit_price'] . "<br>";
                    echo "Visibility: TRUE <br>";                
                }

 
            }
        }
    } catch (Exception $e) {}

?>

<html>
    <div class = "navBar">
        <h1>Shop</h1>
        <form action="../cart.php">
            <input type="image" href="../cart.php" class="cart_image" src="../pics/cart.png" alt="Cart">
        </form>
    </div>
    <body>

    </body>

    <style>
    h1 {
        margin-top: 3px;
        font-family: cursive;
        float: left;
    }

    body {
        background-color: lightcyan;
    }

    .cart_image {
        width: 50px;
        height: 50px;
        float: right;
    }

    .navBar {
        background-color: #FFE5B4;
        padding: 5px;
        height: 50px;
        align-items: center;
    }

    .navBar a {
        color: #0000FF;
        text-align: center;
        padding-right: 20px;

    }

    .navBar a:hover {
        color: red;
        text-decoration: underline;
    }

</style>

</html>

