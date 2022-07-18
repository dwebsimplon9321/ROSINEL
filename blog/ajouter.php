<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
</head>
<body>
    <h1>Ajouter un article</h1>
    <p>Instruction: Pour ajouter un article il faut </p>
    <ul>
        <li>Une date *</li>
        <li>Un titre *</li>
        <li>Un résumé de l'article *</li>
        <li>L'article au complet *</li>
        <li>Une image</li>
    </ul>
    <form action="valider.php" method="post">
        <div>
        <label for="date">Date</label>
        <input type="date" name="date" id="date" class="" required>
        </div>

        <div>
        <label for="titre">Titre</label>
        <input type="titre" name="titre" id="titre" class="" required>
        </div>

        <div>
            <label for="resume">Résumé</label>
            <textarea name="resume" id="resume" cols="30" rows="10" required></textarea>
        </div>

        <div>
            <label for="complet">Complet</label>
            <textarea name="complet" id="complet" cols="30" rows="10" required></textarea>
        </div>

        <div>
            <input type="submit" value="ajouter" name="action">
        </div>
    </form>
    
</body>
</html>
<?php $_SERVER[ 'DOCUMENT_ROOT' ] ?>