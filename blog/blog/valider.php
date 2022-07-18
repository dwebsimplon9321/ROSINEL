
<title>Valider</title>
<?php 

session_start();

#ajouter les fichiers classes php

include("classe/db_connect.php"); #fichier BDD
include("classe/Register.php"); #maj au début du nom du fichier = Classe php
include("classe/Login.php");

#instancier les classes php

$myC = new Connect_pdo;
$db = $myC->getConnectDB();
$register = new Register($db);
$connexion = new Login($db);

#print_r($db);

$action = $_POST["action"]; #recuperer la valeur du bouton
if ($action == "ajouter")
{
    #print_r($_POST);
    $register ->ajouter($_POST, $db); #"->" pointeur

} else if($action == "login"){ #switch case

    $connexion ->login($_POST, $db); #"->" pointeur

} else if($action == "supprimer"){

} else {

}