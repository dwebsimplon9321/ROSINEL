<?php
include("includes/autoloader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="valider.php" method="POST">
            <input type="text" name="email">
            <input type="text" name="password">
            <input type="submit" value="login" name="action">
        </form>
    </div>
</body>
</html>