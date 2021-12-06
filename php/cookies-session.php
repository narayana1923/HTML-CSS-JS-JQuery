<?php
    $cookie_username = "username";
    $cookie_uservalue = "narayana";
    $cookie_password = "password";
    $cookie_passwordValue = "tiger";
    setcookie($cookie_username, $cookie_uservalue, time() + (86400 * 30), "/");
    setcookie($cookie_password, $cookie_passwordValue, time() + (86400 * 30), "/");
    session_start();
    $_SESSION["msg"] = "successfully logged in";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookies</title>
        <style>
            body {
                background-color: lightgray;
                color: darkorange;
            }

            h1 {
                margin-left: 430px;
                font-size: 300%;
                font-family: sans-serif;
                text-shadow: 2px 2px black;
            }

            form {
                margin-top: 10%;
                margin-right: 1450px;
                margin-left: 500px;
            }

            fieldset {
                height: 200px;
                width: 250px;
                border: 2px dotted black;
            }

            button {
                width: 100px;
            }
        </style>
    </head>

    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" placeholder="Username" name="uname" id="username"><br><br>
            <input type="password" placeholder="Password" name="pswd" id="password"><br><br>
            <button id="signin">Sign-in</button><br>
        </form>
    </body>
    <?php
        function showAlert($message)
        {
            echo "<script>alert('$message');</script>";
        }
        function checkInput($uname, $pswd)
        {
            if ($_COOKIE["username"] == $uname && $_COOKIE["password"] == $pswd) {
                showAlert("Welcome $uname");
                showAlert($_SESSION["msg"]);
            } else {
                showAlert("Incorrect username/password");
            }
        }
        $username = $password = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["uname"];
            $password = $_POST["pswd"];
            checkInput($username, $password);
        }
    ?>

</html>