<?php
    session_start();

    unset($_SESSION["commune"]);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/chalandiz.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="rosinel/css/bootstrap.min.css">


    <title>Chalandiz - inscription</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col gauche">
                <img src="#" alt="decoration">
            </div>
            <div class="col droite">
                <!--IMPORTANT - D-->
                <form action="vchalandiz.php" method="POST">
                <!--IMPORTANT - F-->
                    <div class="mb-3">
                        <label for="" class="form-label">Dans quelle commune souhaitez vous faire de l'e-commerce ?</label>
                        <div class="listeC" role="group" aria-label="">
                                        <button type="button" class="btn btn-primary bleu btComm">Les Abymes</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Anse-Bertrand</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Baie-Mahault</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Baillif</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Basse-Terre</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Bouillante</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Capesterre-Belle-Eau</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Capesterre-de-Marie-Galante</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Gourbeyre</button>

                                        <button type="button" class="btn btn-primary bleu btComm">La Désirade</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Deshaies</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Grand-Bourg</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Le Gosier</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Goyave </button>
                                        <button type="button" class="btn btn-primary bleu btComm">Lamentin</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Morne-à-l'Eau</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Le Moule</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Petit-Bourg</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Petit-Canal</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Pointe-à-Pitre</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Pointe-Noire</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Port-Louis</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Saint-Claude</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Saint-François</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Saint-Louis</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Sainte-Anne</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Sainte-Rose</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Terre-de-Bas</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Terre-de-Haut</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Trois-Rivières</button>

                                        <button type="button" class="btn btn-primary bleu btComm">Vieux-Fort</button>
                                        <button type="button" class="btn btn-primary bleu btComm">Vieux-Habitants</button>
                                    </div>

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <p>Vous devez choisir un maximum de 5 communes</p>
                        <div class="reponse">

                        </div>
                    </div>
                    <div class="hidden">

                    </div>
                    <button type="button" class="btnP btn btn-primary" disabled>Précédent</button>
                    <a href="suivant.php" class="btnS btn btn-primary">Suivant</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/chalandiz.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>