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
    <link rel="stylesheet" href="css/index.css">
    <title>Page d'accueil - Chalandiz</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'?>

    <div class="photo">
        <img src="/test/img/img.png" class="img-fluid" alt="bannière-photo">
    </div>
<?php
    if (isset($_SESSION['nom'])) {
    echo "echo ne requiert pas de parenthèses.";
} else {
    echo "nigger";
}
?>

    <h1>Vous voulez développez la visibilité de votre entreprise sur le web grâce au référencement automatique ?</h1>

    <a href="https://chalandiz.pq.lu/test/formulaire.php" type="button" class="btn btn-primary" style="width:220px">Commencer</a>
    <!-- <button type="button" class="btn btn-primary">Commencer</button>  -->



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