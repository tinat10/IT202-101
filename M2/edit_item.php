<?php
//note we need to go up 1 more directory
require(__DIR__ . "/partials/nav.php");
try {
    if(!empty($_GET['product_id'])){
        $itemNum = $_GET['product_id'];
    }
} catch(Exception $e) {}
//require_once(__DIR__ . "/partials/flash.php");

/*if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    echo ("You don't have permission to view this page");
    //die(header("Location: " . get_url("home.php")));
}
else { ?>

<?php*/
    $db = getDB();
    $sql = 'SELECT * FROM Products';
    $stmt = $db -> prepare($sql);
    $stmt -> execute();

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($stmt -> rowCount()>0) {
        $item = ($products[$itemNum-1]);
    }


    if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"]) && isset($_POST["stock"]) && isset($_POST["unit_price"])) {
        $name = se($_POST, "name", "", false);
        $desc = se($_POST, "description", "", false);
        $categ = se($_POST, "category", "", false);
        $stock = se($_POST, "stock", "", false);
        $price = se($_POST, "unit_price", "", false);
        $product_id =  $item['id'];    

        $stmt = $db->prepare("UPDATE Products SET name = :name, description = :desc, category = :categ, stock = :stock, unit_price = :price WHERE id = :product_id");
        try {
            $stmt->execute([":name" => $name, ":desc" => $desc, ":categ" => $categ, ":stock" => (int)$stock, ":price" => (float)$price, ":product_id" => $product_id]);
            //flash("Successfully created role $name!", "success");
            echo "success";
        } catch (PDOException $e) {
            echo "haha suck ass. it didn't work.";
            echo $e;
            if ($e->errorInfo[1] === 1062) {
                //flash("A role with this name already exists, please try another", "warning");
            } else {
                //flash(var_export($e->errorInfo, true), "danger");
            }
        }
    }
    
//}
?>


<h1>Edit Product</h1>
<form method="POST">
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" required />
    </div>
    <div>
        <label for="category">Category</label>
        <input id="category" name="category"  />
    </div>
    <div>
        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock"  />
    </div>
    <div>
        <label for="unit_price">Unit Price</label>
        <input type = "number" step="0.01" id="unit_price" name="unit_price"  />
    </div>
    <div class=description>
        <label for="d">Description</label>
        <textarea name="description" id="d"></textarea>
    </div>
    
    <input class=button type="submit" value="Save Product Info" />
</form>

    <style>
        h1 {
            font-family: cursive;
        }

        .description {
            margin-top: 10px;
        }

        body {
            background-color: lightcyan;
        }
        div {
            padding: 5px;
        }

        label {
            font-family: cursive;
            padding-right: 5px;
        }
        .button {
            margin-top: 10px;
            font-family: cursive;
        }
    </style>

    

