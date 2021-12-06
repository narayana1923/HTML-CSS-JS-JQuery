<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <input type="email" name="email" placeholder="Email"><br><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <input type="submit">
        </fieldset>
    </form>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <input type="text" name="uname" placeholder="Username"><br><br>
            <input type="text" name="fname" placeholder="First Name"><br><br>
            <input type="text" name="lname" placeholder="Last Name"><br><br>
            <input type="submit">
        </fieldset>
    </form>
    <?php
    function showAlert($message)
    {
        echo "<script>alert('$message');</script>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $pass = $_POST["password"];
        showAlert("Logged in successfully");
    }
    else if($_SERVER["REQUEST_METHOD"] == "GET"){
        $uname = $_GET["uname"];
        $fname = $_GET["fname"];
        $lname = $_GET["lname"];
        showAlert("Welcome ".$fname." ".$lname);
    }
    ?>
</body>

</html>