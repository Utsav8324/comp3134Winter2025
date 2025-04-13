<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Protected Form</title>
</head>
<body>
    <h1>CSRF Protected Login</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $posted_token = $_POST['confirmation'];
        $session_token = $_SESSION['confirmation'];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($posted_token === $session_token && $username == "host" && $password == "pass") {
            echo "<div>Login success!</div>";
        } else {
            echo "<div>Login failed or CSRF detected!</div>";
        }
    }
    ?>

    <a href="csfr_form.php">Go back to form</a>
</body>
</html>

