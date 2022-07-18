<?php
#Si l'utilisateur se deconnecte, détruire la session et le rediriger vers l'acceuil
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['nom']);
    header("location: index.php");
}
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Page d'accueil - Chalandiz</title>
    <link rel="stylesheet" href="../index.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <!-- logo -->
            <a class="navbar-brand" href="#"><img src="/stage/img/logo-mj metrix (1).png" alt="logo" class="logo"></a>
            <!-- logo -->

            <!-- Nav Icon -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="/img/nav_icon.png" alt="">
            </button>
            <!-- Nav Icon -->

            <!-- Barre de navigation -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active menu" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    <li class="btn-group">

                    <!-- Si la variable de session "nom" existe ou non, changer le bouton -->
                        <?php if (isset($_SESSION['nom'])) : ?>
                            <?php
                            echo '<li class="nav-item">
        <a class="nav-link" href="logout.php">Déconnexion</a>
      </li>';
                            ?>
                        <?php endif ?>
                        <?php if (!isset($_SESSION['nom'])) : ?>
                            <?php
                            echo '<li class="nav-item">
        <a class="nav-link" href="login.php">Connexion</a>
      </li>';
                            echo '<li class="nav-item">
        <a class="nav-link" href="register.php">Inscription</a>
      </li>';
                            ?>
                        <?php endif ?>


                    </li>
                </ul>

            </div>
    </nav>

    <div class="photo">
        <img src="/stage/img/img.png" class="img-fluid" alt="bannière-photo">
    </div>


    <h1>Vous voulez développez la visibilité de votre entreprise sur le web grâce au référencement automatique ?</h1>

    <a href="https://chalandiz.fr.gp/test/register.php" type="button" class="btn btn-primary" style="width:220px">Commencer</a>
    <!-- <button type="button" class="btn btn-primary">Commencer</button>  -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/index.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>