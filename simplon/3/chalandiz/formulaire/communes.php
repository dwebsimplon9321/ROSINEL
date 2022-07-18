<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="style.scss">
  <link rel="stylesheet" href="rosinel/css/bootstrap.min.css">

  <title>coordonnees</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <img src="/images/Personnages/perso-séléna-mjmetrix.png" alt="sss">
      </div>
      <div class="col">
        <h1 class="title">Quelles sont les coordonnées de l'entreprise</h1>
        <!--formulaire - début-->

        <?php

        # variables - D

        $nomErr = $prenomErr = $emailErr = $rgpdErr = $websiteErr = $numErr = $postErr = $catErr = "";

        $nom = $prenom = $email = $rgpd = $comment = $website =  $num = $post = $cat = "";

        # variable - F

        /*function getProperColor($nomErr){
          if (empty($_POST["nom"])){

          }
        }*/

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          if (empty($_POST["nom"])) {

            $nomErr = "Veuillez entrer un nom valide";
          } else {

            $nom = test_input($_POST["nom"]);

            # verifier que nom ne contiennent que des lettres et des espaces

            if (!preg_match("/^[a-zA-Z-' ]*$/", $nom)) {

              $nomErr = "Seul les lettres et les escapes sont autorisé";
            }
          }

          if (empty($_POST["prenom"])) {

            $prenomErr = "Veuillez entrer un prenom valide";
          } else {

            $prenom = test_input($_POST["prenom"]);

            # verifier que nom ne contiennent que des lettres et des espaces

            if (!preg_match("/^[a-zA-Z-' ]*$/", $prenom)) {

              $prenomErr = "Seul les lettres et les escapes sont autorisé";
            }
          }


          // verifier que le numéro soit correcte

          if (empty($_POST["num"])) {

            $numErr = "Veuillez entre un numéro de téléphone valide";
          } else {

            $num = test_input($_POST["num"]);

            if (!preg_match('`[0-9]{10}`',$num)){
              $numErr = "Le numéro de téléphone est invalide";
            }
          }
        }
        function test_input($data)
        {

          $data = trim($data);

          $data = stripslashes($data);

          $data = htmlspecialchars($data);

          return $data;
        }

        ?>

          <input class="btnP" type="button" value="précedent" onclick="history.back()">

          
          <a href="/formulaire/categories.php"class="btnS" type="submit" name="Suivant" value="suivant">Suivant</a>


        <?php

        # test de lecture de champ - D

        echo "<h2> Informations entrée:</h2>";

        echo $nom;

        # test de lecture de champ - F

        ?>
        <!--forumaire - fin -->


      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


</body>

</html>

<?php

# mettre des balises "placeholder" dans les champs de saisie du formulaire
# les fiches google entreprise ne peuvent avoir de numéro qu'à la fin
# "date-picker"


?>