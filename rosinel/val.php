<?php

session_start();

// afficher les erreurs php

ini_set('display_errors','1');

include("classe/db_connect.php");
include("classe/Adherant.php");

$myC = new Connect_pdo;

try {
    $myC->getConnectDB();

    //print_r($myC->getConnectDB());
    $db = $myC->getConnectDB();

    // instancier mes classes
    $adherant = new Adherant();  #modifier

} catch(Exception $e){
    echo $e->getMessage(), "\n";
}

 #modifier


if( isset($_POST) ){
     $validation = $_POST["valider"];
 } else {
     $validation = $_GET;
 }

switch ($validation) {
     case 'val':
        
        $adherant->adhesion($_POST, $_FILES);

         break;

     case 'connecter':

         break;

    default:
        # code...
         break;
         
 }