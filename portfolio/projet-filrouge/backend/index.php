<?php 

  ?>

  <?php 
  session_start();
  if(isset($_SESSION["email"]))
  {
    #affiche backend

    // header html
include("../includes/header.php");

// main html
include("../includes/base.php");

    // footer html
    include("../includes/footer.php");
  } else {
    #redirection page de connection
    $_SESSION["msg"] = "ATTENTION, votre session est expirée!!!";
     /* Ceci produira une erreur. Notez la sortie ci-dessus,
        qui se trouve avant l'appel à la fonction header() */
                    header('Location: https://projet-filrouge.com.gp/');exit;
                }

  $_SESSION["email"];
  ?>