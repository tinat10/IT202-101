<?php
require(__DIR__ . "/partials/nav.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in()) {
    echo "Welcome, " . get_username();
    echo "<pre>" . var_export($_SESSION, true) . "</pre>";
    echo has_role('Admin');
} else {
    echo "You're not logged in";
}
//shows session info

?>

<style>
    h1 {
        font-family: cursive;
    }

    body {
        background-color: lightcyan;
    }
</style>