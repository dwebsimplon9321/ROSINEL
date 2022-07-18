<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">

  <title>coordonnees</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <img src="/images/Personnages/perso-séléna-mjmetrix.png" alt="sss">
      </div>
      <div class="col">
        <h1>Quelles sont les coordonnées de l'entreprise</h1>
        <!--formulaire - début-->

        <?php

        # variables - D

        $nomErr = $prenomErr = $emailErr = $rgpdErr = $websiteErr = $numErr = $postErr = $catErr = "";

        $nom = $prenom = $email = $rgpd = $comment = $website =  $num = $post = $cat = "";

        # variable - F

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

            if (!is_numeric($num)) {
              $numErr = "Le numéro de téléphone est invalide";
            }
          }

          if (empty($_POST["post"])) {

            $postErr = "Veuillez entre une adresse postale valide";
          } else {

            $post = test_input($_POST["post"]);

            if (!is_numeric($post)) {
              $postErr = "L'adresse postale est invalide";
            }
          }

          if (empty($_POST["website"])) {

            $website = "";
          } else {

            $website = test_input($_POST["website"]);

            # verifier que l'url soit valide

            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {

              $websiteErr = "Enter a valid Webiste URL";
            }
          }

          if (empty($_POST["email"])) {

            $emailErr = "Veuillez entrer une addresse email valide";
          } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

              $emailErr = "Cette addresse email est incorrecte";
            }
          }

          /*if (empty($_POST["comment"])) {

            $comment = "";
          } else {

            $comment = test_input($_POST["comment"]);
          }

          if (empty($_POST["rgpd"])) {

            $rgpdErr = "En soumettant...";
          } else {

            $rgpd = test_input($_POST["rgpd"]);
          }*/
        }

        function test_input($data)
        {

          $data = trim($data);

          $data = stripslashes($data);

          $data = htmlspecialchars($data);

          return $data;
        }

        ?>

        <p><span class="error">* Champ requis</span></p>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

          Nom: <input placeholder="nom" type="text" name="nom">

          <span class="error">* <?php echo $nomErr; ?></span>

          <br><br>

          Prénom: <input placeholder="prénom" type="text" name="prenom">

          <span class="error">* <?php echo $prenomErr; ?></span>

          <br><br>

          Téléphone:  <input placeholder="téléphone" type="text" name="num">

          <span class="error">* <?php echo $numErr; ?></span>

          <br><br>

          Adresse postale: <input placeholder="adresse postale" type="text" name="post">

          <span class="error">* <?php echo $postErr; ?></span>

          <br><br>

          Catégorie d'entreprise: <select name="" id="">
            <option value="1">.</option>
            <option value="2">...</option>
            <option value="3">.....</option>
            <span class="error">* <?php echo $na; ?></span>
          </select>

          <br><br>

          <!--Website: <input type="text" name="website">

          <span class="error"><?php echo $websiteErr; ?></span>

          <br><br>-->

          Email: <input placeholder="email" type="text" name="email">

          <span class="error">* <?php echo $emailErr; ?></span>

          <br><br>

          <p>Balises info a rajouter <abbr title="info" tabindex="0">?</abbr></p>

          <!--Comment: <textarea name="comment" rows="2" cols="10"></textarea>

          <br><br>-->

          <input type="checkbox" name="rgpd" value="rgpd - oui"> Consentement <a href="">RGPD</a>

          <span class="error">* <?php echo $rgpdErr; ?></span>

          <br><br>

          <input type="button" value="précedent" onclick="history.back()">

          <input type="submit" name="Suivant" value="suivant">

        </form>

        <?php

        # test de lecture de champ - D

        echo "<h2> Informations entrée:</h2>";

        echo $nom;

        echo "<br>";

        echo $prenom;

        echo "<br>";

        echo $num;

        echo "<br>";

        echo $post;

        echo "<br>";

        echo $website;

        echo "<br>";

        echo $email;

        echo "<br>";

        echo $comment;

        echo "<br>";

        echo $rgpd;

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
#

?>