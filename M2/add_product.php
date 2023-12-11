<?php
//note we need to go up 1 more directory
require(__DIR__ . "/partials/nav.php");
//require_once(__DIR__ . "/partials/flash.php");

/*if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    echo ("You don't have permission to view this page");
    //die(header("Location: " . get_url("home.php")));
}
else { ?>

<?php*/
    if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"]) && isset($_POST["stock"]) &&isset($_POST["unit_price"])) {
        $name = se($_POST, "name", "", false);
        $desc = se($_POST, "description", "", false);
        $categ = se($_POST, "category", "", false);
        $stock = se($_POST, "stock", "", false);
        $price = se($_POST, "price", "", false);
        if (empty($name)) {
            //flash("Name is required", "warning");
        } 
        else {
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO Products (name, description, category, stock, unit_price, visibiliy) VALUES(:name, :desc, :categ, :stock, :price, 1)");
            try {
                $stmt->execute([":name" => $name, ":desc" => $desc, "category" => $categ, "stock" => $stock, "unit_price" => $price]);
                //flash("Successfully created role $name!", "success");
            } catch (PDOException $e) {
                if ($e->errorInfo[1] === 1062) {
                    //flash("A role with this name already exists, please try another", "warning");
                } else {
                    //flash(var_export($e->errorInfo, true), "danger");
                }
            }
        }
    }
//}
?>


<h1>Add Products</h1>
<form method="POST">
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" required />
    </div>
    <div>
        <label for="category">Category</label>
        <input id="category" name="category" required />
    </div>
    <div>
        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock" required />
    </div>
    <div>
        <label for="unit_price">Unit Price</label>
        <input type = "number" step="0.01" id="unit_price" name="unit_price" required />
    </div>
    <div class=description>
        <label for="d">Description</label>
        <textarea name="description" id="d"></textarea>
    </div>
    
    <input class=button type="submit" value="Add Product" />
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

    

