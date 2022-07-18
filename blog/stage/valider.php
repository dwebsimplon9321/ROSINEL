<?php 

session_start();

#ajouter les fichiers classes php

include("classe/db_connect.php"); #fichier BDD
include("classe/Register.php"); #maj au début du nom du fichier = Classe php
#include("classe/Login.php");

#instancier les classes php

$myC = new Connect_pdo;
$db = $myC->getConnectDB();
$register = new Register($db);
#$connexion = new Login($db);
#print_r($db);

$action = $_POST["action"]; #recuperer la valeur du bouton
if ($action == "reguser")
{
    #print_r($_POST);
    $register ->reguser($_POST, $db); #"->" pointeur

    echo "login";
    

} else if($action == ""){ #switch case

    $register ->login($_POST, $db);

    echo "echo ne requiert pas de parenthèses";

   # $connexion ->login($_POST, $db); #"->" pointeur

} else if($action == "supprimer"){

} else {

}