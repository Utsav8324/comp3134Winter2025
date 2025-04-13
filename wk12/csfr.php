<!DOCTYPE html>
<html>
<head>
    <title>CSRF Demo</title>
</head>
<body>
    <h1>Login Form</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "host" && $password == "pass") {
            echo "<div id='splash'>Login success!</div>";
        } else {
            echo "<div id='splash'>Login failed!</div>";
        }
    }
    ?>
    <form method="POST" action="csfr.php">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
