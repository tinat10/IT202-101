<?php 
    /*if (is_logged_in()) {
        require_once(__DIR__ . "/partials/nav.php");
    }//*/
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



</html>

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