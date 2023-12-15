<?php
//Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = true; //some people have issues with localhost for the cookie params
//if you're one of those people make this false

//this is an extra condition added to "resolve" the localhost issue for the session cookie
/*if (($localWorks && $domain == "localhost") || $domain != "localhost") {
    session_set_cookie_params([
        "lifetime" => 60 * 60,
        "path" => "/Project",
        //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
        "domain" => $domain,
        "secure" => true,
        "httponly" => true,
        "samesite" => "lax"
    ]);
}*/
require_once(__DIR__ . "/../lib/functions.php");

?>
<nav>
    <ul>
        <?php if (is_logged_in()) : ?>
            <html>
                <div class = "navBar">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <!--<li><a href="create_role.php">Create Role</a></li>-->
                </div>
                <style>
                    li {
                        display: inline-block;
                    }

                    .navBar {
                        background-color: #FFE5B4;
                        padding: 5px
                    }

                    .navBar a {
                        color: #0000FF;
                        text-align: center;
                        text-align: center;
                        padding-right: 20px
                    }

                    .navBar a:hover {
                        color: red;
                        text-decoration: underline;

                    }

                </style>
            </html>
            <?php endif; ?>
        <?php if (!is_logged_in()) : ?>
            <html>
                <div class = "navBar">
                    <li><a class="loginLink" href="login.php">Login</a></li>
                    <li><a class="registerLink" href="register.php">Register</a></li>
                    <li><a href="shop.php">Shop</a></li>
                </div>
                <style>
                    li {
                        display: inline-block;
                    }

                    .navBar {
                        background-color: #FFE5B4;
                        padding: 5px
                    }

                    .navBar a {
                        color: #0000FF;
                        text-align: center;
                        text-align: center;
                        padding-right: 20px

                    }

                    .navBar a:hover {
                        color: red;
                        text-decoration: underline;

                    }

                </style>
            </html>
        <?php endif; ?>
        <?php if (has_role('Admin')) : ?>
            <html>
                <div class = "navBar">
                    <li><a href="list_roles.php">Roles List</a></li>
                    <li><a href="create_role.php">Create Role</a></li>
                    <li><a href="add_product.php">Add Products</a></li>
                </div>
                <style>
                    li {
                        display: inline-block;
                    }

                    .navBar {
                        background-color: #FFE5B4;
                        padding: 5px

                    }

                    .navBar a {
                        color: #0000FF;
                        text-align: center;
                        text-align: center;
                        padding-right: 20px

                    }

                    .navBar a:hover {
                        color: red;
                        text-decoration: underline;
                    }

                </style>
            </html>
        <?php endif; ?>
        <?php if (is_logged_in()) : ?>
            <html>
                <div class = "navBar">
                    <li><a href="logout.php">Logout</a></li>
                </div>
                <style>
                    li {
                        display: inline-block;
                    }

                    .navBar {
                        background-color: #FFE5B4;
                        padding: 5px
                    }

                    .navBar a {
                        color: #0000FF;
                        text-align: center;
                        text-align: center;
                        padding-right: 20px

                    }

                    .navBar a:hover {
                        color: red;
                        text-decoration: underline;

                    }

                </style>
            </html>
        <?php endif; ?>
    </ul>
</nav>
