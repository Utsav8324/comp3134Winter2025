<!DOCTYPE html>
<html>
<head>
    <title>Stored XSS Demo</title>
</head>
<body>
    <h1>Stored XSS</h1>
    <?php
        echo file_get_contents("/var/www/html/storedxss.txt");
    ?>
</body>
</html>
