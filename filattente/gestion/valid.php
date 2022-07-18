<?php
session_start();

//afficher les erreus php_check_syntax
ini_set ('display_errors', '1');

include("../classe/db_connect.php");
include("../classe/Gestion.php");

//$_GET
//$_POST

$myC = new Connect_pdo;

try {
    $myC->getConnectDB();

    //print_r($myC->getConnectDB());
    $db = $myC->getConnectDB();

    # instancier mes classes
    $admin = new Gestion ($db);
    
    
} catch(Exception $e){
    echo $e->getMessage(), "\n";
}


//$validation = $_POST;



if( isset($_POST) ){
    $validation = $_POST["btc"];
}else {
    $validation = $_GET;
}

//print_r($validation);

switch ($validation) {
    case 'btc':
        #
        
        break;
    case 'btp':
        $admin ->demander_npasse($_POST["email"]);
        break;

    case 'btt':
        $admin ->demander_npasse($_POST["code"]);
        break;
    
    default:
        # code...
        break;
}