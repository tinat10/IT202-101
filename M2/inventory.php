<?php 
    require_once(__DIR__ . "/partials/nav.php"); ?>
<html>

    <style>
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


<?php

    if (has_role("Admin") || has_role("Shop Owner")) {

        $db = getDB();
        try {

            $sql = 'SELECT * FROM Products';
            $stmt = $db -> prepare($sql);
            $stmt -> execute();

            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $count = 0;
            if ($stmt -> rowCount()>0) {
                echo "<h1>Products<h1><br><br>";
                foreach ($products as $item) {

                    echo "<div><li>";
                    echo "Product ID: " . $item['id'] . "<br>"; 
                    echo 'Name: <a href="item.php?product_id=' . $item['id'] . '">' . $item['name'] . '</a><br>';
                    echo "Description: " . $item['description'] . "<br>";
                    echo "Category: " . $item['category'] . "<br>";
                    echo "Stock: " . $item['stock'] . "<br>";
                    echo "Unit Price: $" . $item['unit_price'] . "<br>";
                    if ($item['visibility'] == 1) {
                        echo "Visibility: TRUE <br></div><br>";    
                    }
                    else {
                        echo "Visibility: FALSE <br></div><br>";    
                    }
                    
                    $count++;
                    
                }
            }
        } catch (Exception $e) {}
    }
    else {
        echo ("You don't have permission to view this page");
    }//*/

?>


