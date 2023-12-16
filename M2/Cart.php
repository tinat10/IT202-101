<?php 
    require_once(__DIR__ . "/partials/nav.php");
    if (is_logged_in()) {
        $db = getDB();


        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['remove_all_items'])) {
            try {
                $id = get_user_id();
                $stmt = $db->prepare("DELETE FROM Cart WHERE user_id = :id");
                $stmt->execute([':id' => $id]);

            } catch (Exception $e) {
                echo "Exception: " . $e;
            }
        }
        else if ($_SERVER["REQUEST_METHOD"] === "POST") {
            try {
                foreach ($_POST['quantity'] as $productId => $newQuantity) {
                    if ($newQuantity > 0) {
                        $stmt = $db->prepare("UPDATE Cart SET desired_quantity = :quantity WHERE id = :id");
                        $stmt->execute([':quantity' => $newQuantity, ':id' => $productId]);
                    }
                    else {
                        $stmt = $db->prepare("DELETE FROM Cart where id = :id");
                        $stmt-> execute([':id' => $productId]);
                    }
                }
            } catch (Exception $e) {
                echo "exception: " . $e;
            }
            
        }


        try {
            $id = get_user_id();
            $sql = "SELECT id, product_id, desired_quantity, unit_price FROM Cart WHERE user_id = $id";
            $stmt = $db -> prepare($sql);
            $stmt -> execute();

            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($stmt -> rowCount()>0) {
                $count = 0; ?>

            <html>
                <body>
                    <div class="container">
                        <div class="heading">
                            <h2 class = "header">Shopping Cart</h2>
                            <?php 
                            echo '<form method="POST" name="remove_all_items">';
                                echo '<button class="removeAll" name="remove_all_items" type="submit">Remove All Items</button>';
                            echo '</form>';
                            //<h4 class="remove">Remove all items</h4>
                            ?>
                            
                        </div>
            <?php
                $total = 0;
                $numItems = 0;
                foreach ($products as $item) { 

                    $item_id = $item['product_id'];
                    $sql2 = "SELECT name, description FROM Products WHERE id=$item_id";
                    $stmt2 = $db -> prepare($sql2);
                    $stmt2 -> execute();
                    $products2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                    

                    echo '<div class="items">';
                    echo '<h1 class="name"><a href="item.php?product_id=' . $item_id . '">' . $products2[0]['name'] . '</a></h1>';
                    echo '<h3 class="description">' . $products2[0]['description'] . '</h3>';
                    echo '<div class="quant">';

                    echo '<form method="POST" name="quant">';
                        echo '<div class="quantButtons">';
                            echo '<input type="hidden" name="quantity[' . $item['id'] . ']" value="' . $item['desired_quantity'] . '">';
                            echo '<button class="quantButton" type="submit" name="quantity[' . $item['id'] . ']" value="' . ($item['desired_quantity'] - 1) . '">-</button>';
                            echo '<h3 class="quantity">' . $item['desired_quantity'] . '</h3>';
                            echo '<button class="quantButton" type="submit" name="quantity[' . $item['id'] . ']" value="' . ($item['desired_quantity'] + 1) . '">+</button>';
                        echo '</div>';
                    echo '</form>';

                    echo '</div>';
                    echo '<h3 class="unit_price">$' . number_format((float)($item['unit_price']*$item['desired_quantity']), 2) . '</h3>';
                    
                    echo '<form method="POST" name="removals">';
                        echo '<input type="hidden" name="quantity[' . $item['id'] . ']" value="' . $item['desired_quantity'] . '">';
                        echo '<button class="remove_item" type="submit" name="quantity[' . $item['id'] . ']" value="' . 0 . '">Remove</button>';
                    echo '</form>';

                    //echo '<h3 class="removeItem" onclick="removeItem(' . $item['id'] . ')">Remove</h3>';

                    echo '</div>';//*/

                    $total+= (float)($item['unit_price']*$item['desired_quantity']);
                    $numItems+=$item['desired_quantity'];
                    $count++;
                } ?>

                <div></div>

                <hr> 
                <div class="checkout">
                    <div class="above">
                        <div>
                            <div class="total_text">Sub-Total</div>
                            <div class="numItems" >Num of Items: <?php echo $numItems; ?></div>
                        </div>
                        <div class="total">$<?php echo number_format($total, 2); ?></div>
                    </div>
                    <button class="checkoutButton">Checkout</button>
                </div>

                </div>
                </body>


                </html>

        <?php
            }
            else { ?>
                    <body>
                    <div class="container">
                        <div class="heading">
                            <h2 class = "header">Shopping Cart</h2>
                            <?php 
                            echo '<form method="POST" name="remove_all_items">';
                                echo '<button class="removeAll" name="remove_all_items" type="submit">Remove All Items</button>';
                            echo '</form>';
                            //<h4 class="remove">Remove all items</h4>
                            ?>
                            
                        </div>
                        <div></div>

                <hr> 
                <div class="checkout">
                    <div class="above">
                        <div>
                            <div class="total_text">Sub-Total</div>
                            <div class="numItems" >Num of Items: <?php echo 0; ?></div>
                        </div>
                        <div class="total">$<?php echo number_format(0, 2); ?></div>
                    </div>
                    <button class="checkoutButton">Checkout</button>
                </div>

                </div>
                </body>
            <?php
            }
    
        } catch (Exception $e) {
            echo $e;
            
        }
    } else {
        echo "User must be logged in to view cart";
    }

?>

<style>

    .removeAll {
        font-family: monospace;
        padding: 10px;
        margin-right: 10px;
        margin-top: 15px;
        font-weight: bold;
    }

    .removeAll:hover , .remove_item:hover {
        color: red;
    }

    .quantButtons {
        display: flex;
    }

    .remove_item {
        font-family: monospace;
    }

    .checkoutButton {
        margin-top: 10px;
        width: 100%;
        height: 40px;
        border: none;
        background: #ADD8E6;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        font-family: monospace;
        font-weight: 600;
        color: #08A4A7;
    }

    .above {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-right: 5px;
    }

    .checkout {
        float: right;
        margin-right: 10px;
        font-size: x-small;
        font-family: monospace;
    }

    .total_text {
        font-size: 17px;
        font-weight: 500;
    }

    .total {
        margin-left: 5px;
        display: flex;
        font-size: 25px;
    }

    .numItems {
        font-size: 12px;
        font-family: monospace;
        line-height: 10px;
        color:grey
    }

    .items {
        font-family: 'Courier New', Courier, monospace;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        margin-left: 5px;
        margin-right: 5px;
        font-size:x-small;
    }

    body {
        background-color: lightcyan;
        display: block;
        justify-content: center;
        align-items: center;

    }

    .heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #08A4A7;
    }

    .header {
        font-size: xx-large;
        font-family: cursive;
        font-weight: 700;
        margin: 10px;
    }

    .remove {
        font-size: large;
        font-family: cursive;
        font-weight: 600;
        margin: 10px;
        cursor: pointer;
    }

    .remove:hover {
        text-decoration: underline;
        color: red;
    }

    .removeItem {
        font-family: monospace;
        margin-top: 1px;
        cursor: pointer;
        margin-right: 5px;
    }
    
    .removeItem:hover {
        text-decoration: underline;
        color: red;
    }

    .quant {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .quantButton {
        width: 20px;
        height: 20px;
        border-radius: 70%;
        background-color: #d9d9d9;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 10px;
        font-weight: bold;
        margin: 5px;
        cursor: pointer;
    }

    .container {

        width: 70%;
        height: 70%;
        background-color: #ffffff;
        padding: px;
        box-shadow: 0px 10px 15px #08A4A7;
        font-family: cursive;

    }
</style>