<?php 
    /*if (is_logged_in()) {
        require_once(__DIR__ . "/partials/nav.php");
    }//*/
?>

<html>
    <body>
        <div class="container">
            <div class="heading">
                <h2 class = "header">Shopping Cart</h2>
                <h4 class="remove">Remove all items</h4>
            </div>
        </div>
    </body>
    



</html>

<style>
    body {
        background-color: lightcyan;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .heading {
        display: flex;
        justify-content: space-between;
        align-items: center;

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

    .container {
        width: 70%;
        height: 70%;
        background-color: #ffffff;
        padding: px;
        box-shadow: 0px 10px 15px #08A4A7;
        font-family: cursive;

    }
</style>