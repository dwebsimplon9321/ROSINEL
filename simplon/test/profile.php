<?php
session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row titre">
            <h1>Tableau de bord</h1>
            <span> <?php echo $_SESSION['email']; ?> </span>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Periode de l'évenement :<?php echo $_SESSION['dateDebut']; ?> au <?php echo $_SESSION['dateFin']; ?></p>
                <h2>Nombre de clics par ville</h2>
            </div>
            <div class="col-md-6">
                <div>
                <select name="paiement" id="paiement"></select>
                <select name="facture" id="facture"></select>
                </div>
                <span>Évenement :</span>

                <h2>Ville</h2>
                <button type="button" class="btn btn-primary bleu btComm disabled"><?php echo $_SESSION['comm1']; ?></button>
                <button type="button" class="btn btn-primary bleu btComm disabled"><?php echo $_SESSION['comm2']; ?></button>
                <button type="button" class="btn btn-primary bleu btComm disabled"><?php echo $_SESSION['comm3']; ?></button>
                <button type="button" class="btn btn-primary bleu btComm disabled"><?php echo $_SESSION['comm4']; ?></button>
                <button type="button" class="btn btn-primary bleu btComm disabled"><?php echo $_SESSION['comm5']; ?></button>

                <div>
                <span>Nombre de clics</span>
                <span>Affichage</span>
                </div>
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