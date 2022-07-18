<link rel="stylesheet" href="index.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3; navbar">
        <div class="container-fluid">

            <!-- logo -->
            <a class="navbar-brand" href="#"><img src="/test/img/logo.png" alt="logo" class="logo"></a>
            <!-- logo -->

            <!-- Nav Icon -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="/test/img/nav_icon.png" alt="">
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
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>

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
        <a class="nav-link" href="formulaire.php">Inscription</a>
      </li>';
                            ?>
                        <?php endif ?>
                        

                    </li>
                </ul>

            </div>
        </div>
    </nav>