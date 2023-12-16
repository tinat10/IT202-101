<?php
//note we need to go up 1 more directory
require(__DIR__ . "/partials/nav.php");
try {
    if(!empty($_GET['product_id'])){
        $itemNum = $_GET['product_id'];
    }
} catch(Exception $e) {}
//require_once(__DIR__ . "/partials/flash.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    echo ("You don't have permission to view this page");
    //die(header("Location: " . get_url("home.php")));
}
else { 

    $db = getDB();

    $sql = 'SELECT * FROM Products';
    $stmt = $db -> prepare($sql);
    $stmt -> execute();

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($stmt -> rowCount()>0) {
        $item = ($products[$itemNum-1]);
    }

    $product_id = $item['id'];

    if (isset($_POST["toggle_visibility"])) {
        // "reached";
        //$product_id = se($_POST, "product_id", "", false);
        if (!empty($product_id)) {

            $newVisibility = $item['visibility'] == 1 ? 0 : 1;
            $stmt = $db->prepare("UPDATE Products SET visibility = :newVisibility WHERE id = :rid");

            try {
                $stmt->execute([":newVisibility" => $newVisibility, ":rid" => $product_id]);
                echo "success!";
                //flash("Updated Role", "success");
            } catch (PDOException $e) {
                echo "boo you suck";
                //flash(var_export($e->errorInfo, true), "danger");
            }
        }
    }

    $sql = 'SELECT * FROM Products';
    $stmt = $db -> prepare($sql);
    $stmt -> execute();


    if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"]) && isset($_POST["stock"]) && isset($_POST["unit_price"])) {
        $name = se($_POST, "name", "", false);
        $desc = se($_POST, "description", "", false);
        $categ = se($_POST, "category", "", false);
        $stock = se($_POST, "stock", "", false);
        $price = se($_POST, "unit_price", "", false);

        $stmt = $db->prepare("UPDATE Products SET name = :name, description = :desc, category = :categ, stock = :stock, unit_price = :price WHERE id = :product_id");
        try {
            $stmt->execute([":name" => $name, ":desc" => $desc, ":categ" => $categ, ":stock" => (int)$stock, ":price" => (float)$price, ":product_id" => $product_id]);
            //flash("Successfully created role $name!", "success");
            echo "success";
        } catch (PDOException $e) {
            echo "haha suck it. it didn't work.";
            echo $e;
            if ($e->errorInfo[1] === 1062) {
                //flash("A role with this name already exists, please try another", "warning");
            } else {
                //flash(var_export($e->errorInfo, true), "danger");
            }
        }
    }
    
}
?>


<h1>Edit Product</h1>

<form method="POST" class="visibilityForm" name="toggleVisibility">
    Visibility:
    <input type="hidden" name="product_id" value="<?php echo se($product_id); ?>" />
    <button type="submit" name="toggle_visibility">Toggle</button>
</form>

<form method="POST">
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" required />
    </div>
    <div>
        <label for="category">Category</label>
        <input id="category" name="category"  required />
    </div>
    <div>
        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock"  required/>
    </div>
    <div>
        <label for="unit_price">Unit Price</label>
        <input type = "number" step="0.01" id="unit_price" name="unit_price" required />
    </div>
    <div class=description>
        <label for="d">Description</label>
        <textarea name="description" id="d"></textarea>
    </div>
    
    <input class=button type="submit" value="Save Product Info" />
</form>

    <style>

        .visibilityForm {
            font-family: cursive;
            padding: 5px;

        }

        h1 {
            font-family: cursive;
        }

        .description {
            margin-top: 5px;
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

    

