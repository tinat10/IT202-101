<?php
//note we need to go up 1 more directory
require(__DIR__ . "/partials/nav.php");
//require_once(__DIR__ . "/partials/flash.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    //die(header("Location: " . get_url("home.php")));
}

if (isset($_POST["name"]) && isset($_POST["description"])) {
    $name = se($_POST, "name", "", false);
    $desc = se($_POST, "description", "", false);
    if (empty($name)) {
        //flash("Name is required", "warning");
    } else {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Roles (name, description, is_active) VALUES(:name, :desc, 1)");
        try {
            $stmt->execute([":name" => $name, ":desc" => $desc]);
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
?>
<h1>Create Role</h1>
<form method="POST">
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" required />
    </div>
    <div class=description>
        <label for="d">Description</label>
        <textarea name="description" id="d"></textarea>
    </div>
    <input class=button type="submit" value="Create Role" />
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

        label {
            font-family: cursive;
            padding-right: 5px;
        }
        .button {
            margin-top: 10px;
            font-family: cursive;
        }
    </style>
<?php
//note we need to go up 1 more directory
?>