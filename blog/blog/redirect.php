<?php
session_start();
if (isset($_SESSION['email'])) {

    var_dump($_SESSION['email']);

} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="submit" name="deco" action="deco">
    
</body>

</html>