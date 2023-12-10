<?php
require(__DIR__ . "/partials/nav.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in()) {
    echo "Welcome, " . get_username();
    echo "<pre>" . var_export($_SESSION, true) . "</pre>";
    echo has_role('Admin');


    if (has_role('Admin')) { ?>

        <html>
            <h1>Product Inventory</h1>

        </html>
        
    <?php }
    else { ?>
        <style>
        h1 {
            font-family: cursive;
        }
    
        body {
            background-color: lightcyan;
        }
        </style>
    <?php }
} else {
    echo "You're not logged in";
} //shows session info

$db = getDB();
        $stmt = $db->prepare("SELECT * from M1_Roles where id = 1");
        try {
        $r = $stmt->execute([":email" => $email]);
        if ($r) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            var_export($user,true);
        }
    } catch (Exception $e) {
        echo "<pre>" . var_export($e, true) . "</pre>";
    }


?>