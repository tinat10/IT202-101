<?php
require(__DIR__ . "/partials/nav.php");
?>
<form id=registration onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input id=email type="email" name="email" required />
    </div>
    <div>
        <label for="username">Username</label>
        <input id=username type="text" name="username" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input class=button type="submit" value="Register" />
</form>

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

<script>

    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        document.getElementById("username").innerHTML = $username;
        document.getElementById("email").innerHTML = $email;    
        if ($hasError)
            return false;
        return true;

        /*console.log("$hasError = ", $hasError);*/
    }

    function printStuff() {
        document.getElementById("username").innerHTML = $username;
        document.getElementById("email").innerHTML = $email; 
    }

</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $username = se($_POST, "username", "", false);
    //echo $username;
    $confirm = se(
        $_POST,
        "confirm",
        "",
        false
    );
    //TODO 3
    $hasError = false;
    if (empty($email)) {
        echo "Email must not be empty";
        $hasError = true;
    }
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        echo "Invalid email address";
        $hasError = true;
    }
    if (empty($password)) {
        echo "password must not be empty";
        $hasError = true;
    }
    if (empty($confirm)) {
        echo "Confirm password must not be empty";
        $hasError = true;
    }
    if (strlen($password) < 8) {
        echo "Password too short";
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        echo "Passwords must match";
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            
            echo "Welcome, $email,.  Successfully registered!";
        } catch (Exception $e) {

            /*
            $sql_username = "SELECT username FROM Users WHERE username = '$username'";
            $sql_email = "SELECT email FROM Users WHERE email = '$email'";

            $userSQL = mysqli_query($db, $sql_username);
            $emailSQL  = mysqli_query($db, $sql_email);

            $rowNums  = $userSQL->num_rows;
            if ($rowNums > 0) {
                echo "Sorry, that username is already taken.";
            }

            $rowNums  = $emailSQL->num_rows;
            if ($rowNums> 0) {
                echo "Sorry, that email is already taken";
            }*/


            echo "There was a problem registering.  Your username/email is already taken. ";
            echo '<script type="text/javascript">',
            'printStuff();',
            '</script>';
            "<pre>" . var_export($e, true) . "</pre>";
        }
    }
}
?>

<script type="text/javascript">
    printStuff();
</script>
