<?php
try {
    if(($_GET['status']) == "loggedout"){
        echo '<div>You have been logged out!</div>';
    }
    if (($_GET['status']) == "wantsCart") {
        echo '<div>You must be logged in in order to start a cart!</div>';
    }
} catch(Exception $e) {}

require(__DIR__ . "/partials/nav.php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email"/>
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <input class=button type="submit" value="Login" />

    <style>
        body {
            background-color: lightcyan;
        }
        label {
            font-family: cursive;
            padding-right: 5px;
        }
        div {
            padding: 5px;
        }
        .button {
            margin-top: 10px;
            font-family: cursive;
        }
    </style>
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        return true;
    }
</script>
<?php
//TODO 2: add PHP Code
if ((isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"]))) {
    $email = se($_POST, "email", "", false);
    $username = se($_POST, "username", "", false);
    $password = se($_POST, "password", "", false);

    $hasError = false;
    if (empty($username) && empty($email)) {
        echo "Username or email must not be empty";
        $hasError = true;
    }
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!empty($email) && !is_valid_email($email)) {
        echo "Invalid email address. Account with this email does not exist.";
        $hasError = true;
    }
    if (empty($password)) {
        echo "Password must not be empty";
        $hasError = true;
    }
    if (strlen($password) < 8) {
        echo "Password too short";
        $hasError = true;
    }
    
    if (!$hasError) {
        //TODO 4
        $db = getDB();
        if (!empty($email) && is_valid_email($email)) {
            $stmt = $db->prepare("SELECT id, email, password from Users where email = :email");
            try {
                $r = $stmt->execute([":email" => $email]);
                if ($r) {
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($user) {
                        $hash = $user["password"];
                        unset($user["password"]);
                        if (password_verify($password, $hash)) {
                            echo "Weclome $email";
                            $_SESSION["user"] = $user;
                            try {
                                //lookup potential roles
                                $stmt = $db->prepare("SELECT Roles.name FROM Roles 
                            JOIN UserRoles on Roles.id = UserRoles.role_id 
                            where UserRoles.user_id = :user_id and Roles.is_active = 1 and UserRoles.is_active = 1");
                                $stmt->execute([":user_id" => $user["id"]]);
                                $roles = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch all since we'll want multiple
                            } catch (Exception $e) {
                                error_log(var_export($e, true));
                            }
                            //save roles or empty array
                            if (isset($roles)) {
                                $_SESSION["user"]["roles"] = $roles; //at least 1 role
                            } else {
                                $_SESSION["user"]["roles"] = []; //no roles
                            }
                            die(header("Location: home.php"));
                        } else {
                            echo "Invalid password";
                        }
                    } else {
                        echo "Email not found. Account with this email does not exist.";
                    }
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e, true) . "</pre>";
            }
        }
        else {
            $stmt = $db->prepare("SELECT id, username, password from Users where username = :username");
            try {
                $r = $stmt->execute([":username" => $username]);
                if ($r) {
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($user) {
                        $hash = $user["password"];
                        unset($user["password"]);
                        if (password_verify($password, $hash)) {
                            echo "Weclome $username";
                            $_SESSION["user"] = $user;
                            try {
                                //lookup potential roles
                                $stmt = $db->prepare("SELECT Roles.name FROM Roles 
                            JOIN UserRoles on Roles.id = UserRoles.role_id 
                            where UserRoles.user_id = :user_id and Roles.is_active = 1 and UserRoles.is_active = 1");
                                $stmt->execute([":user_id" => $user["id"]]);
                                $roles = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch all since we'll want multiple
                            } catch (Exception $e) {
                                error_log(var_export($e, true));
                            }
                            //save roles or empty array
                            if (isset($roles)) {
                                $_SESSION["user"]["roles"] = $roles; //at least 1 role
                            } else {
                                $_SESSION["user"]["roles"] = []; //no roles
                            }
                            die(header("Location: home.php"));
                        } else {
                            echo "Invalid password";
                        }
                    } else {
                        echo "Username not found";
                    }
                    
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e, true) . "</pre>";        
            }
        }
        
        
    }

}

?>