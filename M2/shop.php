<?php 
    require_once(__DIR__ . "/partials/nav.php"); ?>
<html>
    <div class = "navBar2">
        <h1>Shop</h1>
        <form action="../cart.php">
            <input type="image" href="../cart.php" class="cart_image" src="../pics/cart.png" alt="Cart">
        </form>
    </div> <br>
    <body>

        <form action="shop.php" method="post">
            <label id="categFilter" for="categFilter">Category Filter:</label>
            <input type="text" id="categFilter" name="categoryFilter">
            <label id="nameFilter" for="nameFilter">Name Filter:</label>
            <input type="text" id="nameFilter" name="nameFilter">
            <br>

            <label id = "sortOptionLabel" for="sortOption">Sort by:</label>
            <select id="sortOption" name="sortOption">
                <option value="none">None</option>
                <option value="priceAsc">Price (Low to High)</option>
                <option value="priceDesc">Price (High to Low)</option>
            </select>

                    <button type="submit">Apply Filters</button>

        </form>

    </body>

    <style>

    #nameFilter, #categFilter, #sortOptionLabel {
        font-family: monospace;
    }  

    #sortOption {
        font-family: monospace;
        margin-top: 10px;
        margin-right: 5px;

    }   

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

    .navBar2 {
        background-color: #FFE5B4;
        padding: 5px;
        height: 50px;
        align-items: center;
    }

    .navBar2 a {
        color: #0000FF;
        text-align: center;
        padding-right: 20px;

    }

    .navBar2 a:hover {
        color: red;
        text-decoration: underline;
    }

</style>

</html>


<?php

    $db = getDB();

    $categoryFilter = $_POST['categoryFilter'] ?? '';
    $nameFilter = $_POST['nameFilter'] ?? '';
    $sortOption = $_POST['sortOption'] ?? '';

    //echo $categoryFilter . $nameFilter . $sortOption;
    // UCID: tkt November 15, 2023

    $sql = "SELECT id, name, stock, category, unit_price, visibility FROM Products WHERE 1 ";
    if ($categoryFilter !== '') {
        $sql .= "AND category = '$categoryFilter' ";
    }
    
    if ($nameFilter !== '') {
        $sql .= "AND name = '$nameFilter' ";
    }

    if ($sortOption === 'priceAsc') {
        $sql .= "ORDER BY unit_price ASC";
    } elseif ($sortOption === 'priceDesc') {
        $sql .= "ORDER BY unit_price DESC";
    } // else { $sql .= "" } nothing is added to the SQL statement

    try {
        if ($sql === "SELECT id, name, stock, category, unit_price, visibility FROM Products WHERE 1 ")
            $sql = 'SELECT * FROM Products';

        //print($sql);
        $stmt = $db -> prepare($sql);
        $stmt -> execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $count = 0;
        if ($stmt -> rowCount()>0) {
            echo "<br><h1>Products<h1><br><br>";
            foreach ($products as $item) {
                if ($item['visibility'] == 1 && $count < 10) {
                    echo "<div><li>";
                    echo "Product ID: " . $item['id'] . "<br>"; 
                    echo 'Name: <a href="item.php?product_id=' . $item['id'] . '">' . $item['name'] . '</a><br>';
                    //echo "Description: " . $item['description'] . "<br>";
                    //echo "Category: " . $item['category'] . "<br>";
                    echo "Stock: " . $item['stock'] . "<br>";
                    echo "Unit Price: $" . $item['unit_price'] . "<br>";
                    echo "Visibility: TRUE <br></div>";    
                    
                    if (has_role("Admin") | has_role("Shop Owner")) {
                        echo 'Edit Item: <a href="edit_item.php?product_id=' . $item['id'] . '">' . $item['name'] . '</a><br>';
                    }

                    echo "<br>";    

                    
                    $count++;
                }

 
            }
        }
    } catch (Exception $e) {

        echo 'exception => ' . $e;
    }



?>


