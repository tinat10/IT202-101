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

            <div class="items">
                <h1 class="name">Item Name</h1>
                <h3 class="description">description here</h3>
                <div class = "quant">
                    <div class="quantButton">-</div>
                    <h3 class="quantity">0</h3>
                    <div class="quantButton">+</div>
                </div>
                <h3 class="price">$0.00</h3>
                <h3 class="removeItem">Remove</h3>

            </div>

            <div class="items">
                <h1 class="name">Item Name</h1>
                <h3 class="description">description here</h3>
                <div class = "quant">
                    <div class="quantButton">-</div>
                    <h3 class="quantity">0</h3>
                    <div class="quantButton">+</div>
                </div>
                <h3 class="price">$0.00</h3>
                <h3 class="removeItem">Remove</h3>

            </div>

            <div>

            </div>

            <hr> 
            <div class="checkout">
                <div class="above">
                    <div>
                        <div class="total_text">Sub-Total</div>
                        <div class="numItems"># of items</div>
                    </div>
                    <div class="total">$0.00</div>
                </div>
                <button class="checkoutButton">Checkout</button>
            </div>
            
        </div>
    </body>
    

</html>

<style>

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
        display: flex;
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