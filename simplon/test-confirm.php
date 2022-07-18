<?php

$nom = $_POST["nom"];
$message = $_POST["message"];
$entreprise = filter_input(INPUT_POST, "entreprise", FILTER_VALIDATE_BOOLEAN);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_BOOLEAN);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOLEAN);

if (! $terms){
    die("rgpd doivent etre accepté");
}

#var_dump($nom, $message, $entreprise, $type, $terms);

$host = "localhost";
$dbname = "chalandiz";
$username = "chalandizz";
$password = "t55S4ScL6d";

$conn =  mysqli_connect( $host, $username,  $password, $dbname);

if(mysqli_connect_errno()){
    die("Connection error: ". mysqli_connect_error());

} 

$sql = "INSERT INTO message (nom, body,typee, terms)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii", $nom, $message, $entreprise, $type);


mysqli_stmt_execute($stmt);

echo "record saved.";