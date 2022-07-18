<?php
session_start();

//afficher les erreus php_check_syntax
ini_set ('display_errors', '1');

include("classe/db_connect.php");
include("classe/Personne.php");

//$_GET
//$_POST

$myC = new Connect_pdo;

try {
    $myC->getConnectDB();

    //print_r($myC->getConnectDB());
    $db = $myC->getConnectDB();

    # instancier mes classes
    $utilisateur = new Personne($db);
    
} catch(Exception $e){
    echo $e->getMessage(), "\n";
}


//$validation = $_POST;



if( isset($_POST) ){
    $validation = $_POST["frmC"];
}else {
    $validation = $_GET;
}

//print_r($validation);

switch ($validation) {
    case 'creer':
        #
        $_SESSION["pi"];
        $utilisateur->inscription($_POST);
        break;
    case 'connecter':
        $utilisateur->connect($_POST);
        break;
    
    default:
        # code...
        break;
}