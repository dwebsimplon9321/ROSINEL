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
            <input type="text" name="nom">
            <input type="text" name="prenom">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="submit" value="ajouter" name="action">
    </form>
    </div>
</body>
</html>