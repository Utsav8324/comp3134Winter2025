<?php
session_start();
$_SESSION['confirmation'] = bin2hex(random_bytes(16));
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Protected Form</title>
</head>
<body>
    <h1>Secure Login Form</h1>
    <form method="POST" action="csfr_action.php">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
        <input type="submit" value="Login">
    </form>
</body>
</html>

