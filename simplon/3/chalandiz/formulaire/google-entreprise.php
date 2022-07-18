<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="rosinel/css/bootstrap.min.css">

  <title>coordonnees</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <img src="#" alt="img">
      </div>
      <div class="col">
        <h1 class="title">Votre entreprise a t'elle une fiche Google Entreprise?</h1>
        <!--formulaire - début-->
        <?php

        # variables - D

        $nomErr = $emailErr  = "";

        $gmbNon = "";

        $nom =  $email =  "";

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

          if (empty($_POST["email"])) {

            $emailErr = "Veuillez entrer une addresse email valide";
          } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

              $emailErr = "Cette addresse email est incorrecte";
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

        <p><span class="error">* Champ requis</span></p>

        <div class="col-md-4 frm">
            <label for="nomId" class="form-label">Nom de la fiche GMB<span class="error">* <?php echo $nomErr; ?></span></label>
            <input type="text" class="form-control frm" name="nom" id="nomId">           
            <p class="inf"><abbr title="Entrez le nom exact de votre fiche Google My Business" tabindex="0">?</abbr></p>
          </div>

          <div class="col-md-4">
            <label for="emailId" class="form-label">Email GMB<span class="error">* <?php echo $nomErr; ?></span></label>
            <input type="text" class="form-control" name="email" id="emailId">
            <p class="inf"><abbr title="Entrez l'adresse email qui gère cette fiche Google" tabindex="0">?</abbr></p>
          </div>

          <p>
            la fiche google entreprise correspond aux fiches présentant le nom, adresse, numéro de téléphone et notation d'entreprise ci dessus
          </p>

          <input class="btnP" type="button" value="précedent" onclick="history.back()">

          <input class="btnS" type="submit" name="Suivant" value="suivant">

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
  <script src="/js/script.js"></script>
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