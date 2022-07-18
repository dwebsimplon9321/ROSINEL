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
        <img src="/images/Personnages/perso-séléna-mjmetrix.png" alt="sss">
      </div>
      <div class="col">
        <h1 class="title">Quelles sont les coordonnées de l'entreprise</h1>
<?php

/* page: inscription.php */
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "gestionnaire";
$BDD['db'] = "annuaire";
$BDD['mdp'] = "t55S4ScL6d";
$mysqli = mysqli_connect($BDD['nom'], $BDD['prenom'], $BDD['telephone'], $BDD['post'], $BDD['cat']);
if (!$mysqli) {
    echo "Connexion non établie.";
    exit;
}
//création automatique de la table membres, une fois créée, vous pouvez supprimer les lignes de code suivantes:
//echo mysqli_query($mysqli,"CREATE TABLE IF NOT EXISTS `".$BDD['db']."`.`membres` ( `id` INT NOT NULL AUTO_INCREMENT , `pseudo` VARCHAR(25) NOT NULL , `mdp` CHAR(32) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;")?"Table membres créée avec succès, vous pouvez maintenant supprimer la ligne ". __LINE__ ." de votre fichier ". __FILE__ ."!":"Erreur création table membres: ".mysqli_error($mysqli);
//la table est créée avec les paramètres suivants:
//champ "id": en auto increment pour un id unique, peux vous servir pour une identification future
//champ "pseudo": en varchar de 0 à 25 caractères
//champ "mdp": en char fixe de 32 caractères, soit la longueur de la fonction md5()
//fin création automatique
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)
$AfficherFormulaire = 1;
//traitement du formulaire:
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

        if (!preg_match('`[0-9]{10}`', $num)) {
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

        // verifier que l'url soit bien écrit

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "Cette addresse email est incorrecte";
        }
    }

    //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
    //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
    if (!mysqli_query($mysqli, "INSERT INTO membres SET nom='" . $_POST['nom'] . "',prenom='" . $_POST['prenom'] . "', num='" . $_POST['num'] . "', post='" . $_POST['post'] . "', cat='" . $_POST['cat'] . "', email='" . $_POST['email'] . "'")) { //on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: " . mysqli_error($mysqli); //je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else {
        echo "Vous êtes inscrit avec succès!";
        //on affiche plus le formulaire
        $AfficherFormulaire = 0;
    }
}

if ($AfficherFormulaire == 1) {
?>
     <p><span class="error">* Champ requis</span></p>

<form class="formulaire" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

  <div class="col-md-4 frm">
    <label for="nomId" class="form-label">Nom <span class="error">* <?php echo $nomErr; ?></span></label>
    <input type="text" class="form-control frm" name="nom" id="nomId">
    <p> <abbr title="Ce champ ne doit pas comporter de caractères spéciaux" tabindex="0">?</abbr></p>
  </div>

  <div class="col-md-4 ">
    <label for="prenomId" class="form-label">Prénom
      <span class="error">* <?php echo $prenomErr; ?></span></label>
    <input type="text" class="form-control" name="prenom" id="prenomId">
    <p> <abbr title="Ce champ ne doit pas comporter de caractères spéciaux" tabindex="0">?</abbr></p>
  </div>

  <div class="col-md-4 ">
    <label for="numId" class="form-label">Téléphone
      <span class="error">* <?php echo $numErr; ?></span></label>
    <input type="text" class="form-control" maxlength="10" name="num" id="numId">
    <div id="element" tabindex="-1"></div>
    <p> <abbr title="Ce champ ne doit pas comporter de caractères spéciaux" tabindex="0">?</abbr></p>
  </div>

  <div class="col-md-4 ">
    <label for="postId" class="form-label">Adresse postale
      <span class="error">* <?php echo $postErr; ?></span></label>
    <input type="text" class="form-control" name="post" id="postId">
    <p> <abbr title="Ce champ ne doit pas comporter de caractères spéciaux" tabindex="0">?</abbr></p>
  </div>

  <div class="col-md-3">
    <label for="cat" class="form-label">Catégorie d'entreprise
      <span class="error">* <?php echo $catErr; ?></span></label>
    <select class="form-select" id="cat">
      <option selected disabled value="">...</option>
      <option value="1">.</option>
      <option value="2">...</option>
      <option value="3">.....</option>
      <span class="error">* <?php echo $na; ?></span>
    </select>
  </div>

  <input type="checkbox" name="rgpd" value="rgpd - oui"> Consentement <a href="">RGPD</a>

  <span class="error">* <?php echo $rgpdErr; ?></span>

  <br><br>

  <input class="btnP" type="button" value="précedent" onclick="history.back()">

  <input class="btnS" type="submit" name="Suivant" value="suivant">


</form>
<?php
}
?>
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