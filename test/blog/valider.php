
<title>Valider</title>
<?php 

#ajouter les fichiers classes php

include("classe/db_connect.php"); #fichier BDD
include("classe/Blog.php"); #maj au début du nom du fichier = Classe php

#instancier les classes php

$myC = new Connect_pdo;
$db = $myC->getConnectDB();
$blog = new Blog($db);


#print_r($db);


$action = $_POST["action"]; #recuperer la valeur du bouton
if ($action == "ajouter")
{
    #print_r($_POST);
    $blog ->ajouter($_POST, $db); #"->" pointeur

} else if($action == "modifier"){ #switch case

} else if($action == "supprimer"){

} else {

}