<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'chizz', 'tcL6d', 'z');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $nom = mysqli_real_escape_string($db, $_POST['nom']);
  $prenom = mysqli_real_escape_string($db, $_POST['prenom']);
  $num = mysqli_real_escape_string($db, $_POST['num']);
  $postale = mysqli_real_escape_string($db, $_POST['postale']);
  $cat = mysqli_real_escape_string($db, $_POST['cat']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gmb = mysqli_real_escape_string($db, $_POST['gmb']);
  $gmbMail = mysqli_real_escape_string($db, $_POST['gmbMail']);
  $event = mysqli_real_escape_string($db, $_POST['event']);
  $acc = mysqli_real_escape_string($db, $_POST['acc']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  /*if (empty($nom)) { array_push($errors, "Veuillez indiquer votre nom"); }
  if (empty($prenom)) { array_push($errors, "Veuillez indiquer votre prénom"); }
  if (empty($num)) { array_push($errors, "Veuillez indiquer le téléphone de l'entreprise"); }
  if (empty($postale)) { array_push($errors, "Veuillez indiquer l'adresse postale de votre entreprise"); }
  if (empty($cat)) { array_push($errors, "Veuillez indiquer la catégorie de l'entreprise"); }
  if (empty($email)) { array_push($errors, "Veuillez indiquer votre adresse mail"); }
  if (empty($mdp_1)) { array_push($errors, "Si vous souhaitez ouvrir un compte client, vous devez créer un mot de passe"); }
  if ($mdp_1 != $mdp_2) {
	array_push($errors, "Les mots de passe ne sont pas identiques");
  }*/

  if (empty($nom)) {$errorNom = "Veuillez indiquer votre nom"; 
  } 

  if (empty($prenom)) { array_push($errors, "Veuillez indiquer votre prénom"); 

  } elseif (!preg_match("#^[a-z0-9]+$#",$_POST['prenom'])){
    echo "Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
  }
  if (empty($num)) { array_push($errors, "Veuillez indiquer le téléphone de l'entreprise"); }
  if (empty($postale)) { array_push($errors, "Veuillez indiquer l'adresse postale de votre entreprise"); }
  if (empty($cat)) { array_push($errors, "Veuillez indiquer la catégorie de l'entreprise"); }
  if (empty($email)) { array_push($errors, "Veuillez indiquer votre adresse mail"); }
  if (empty($mdp_1)) { array_push($errors, "Si vous souhaitez ouvrir un compte client, vous devez créer un mot de passe"); }
  if ($mdp_1 != $mdp_2) {
	array_push($errors, "Les mots de passe ne sont pas identiques");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (nom, prenom, telephone, addPost, catEnt, email, gmb, gmbMail, event, mdp) 
  			  VALUES('$nom', '$prenom', '$num','$postale', '$cat', '$email', '$gmb', '$gmbMail', '$event', $mdp_1)";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mdp_1 = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Vous devez indiquer votre email");
    }
    if (empty($mdp_1)) {
        array_push($errors, "Vous devez entrez votre mot de passe");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND mdp='$mdp_1'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Le mot de passe ou l'adresse email indiqué sont incorrecte");
        }
    }
  }


  
  ?>

<?php
    
    /* page: inscription.php */
//connexion à la base de données:
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)
$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['pseudo'],$_POST['mdp'])){//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['pseudo'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Pseudo est vide.";
    } elseif(!preg_match("#^[a-z0-9]+$#",$_POST['pseudo'])){//le champ pseudo est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres (je préfère personnellement enregistrer le pseudo de mes membres en minuscule afin de ne pas avoir deux pseudo identique mais différents comme par exemple: Admin et admin)
        echo "Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
    } elseif(strlen($_POST['pseudo'])>25){//le pseudo est trop long, il dépasse 25 caractères
        echo "Le pseudo est trop long, il dépasse 25 caractères.";
    } elseif(empty($_POST['mdp'])){//le champ mot de passe est vide
        echo "Le champ Mot de passe est vide.";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='".$_POST['pseudo']."'"))==1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Ce pseudo est déjà utilisé.";
    } else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
        if(!mysqli_query($mysqli,"INSERT INTO membres SET pseudo='".$_POST['pseudo']."', mdp='".md5($_POST['mdp'])."'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        } else {
            echo "Vous êtes inscrit avec succès!";
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
    ?>
    <!-- 
    Les balises <form> sert à dire que c'est un formulaire
    on lui demande de faire fonctionner la page inscription.php une fois le bouton "S'inscrire" cliqué
    on lui dit également que c'est un formulaire de type "POST"
     
    Les balises <input> sont les champs de formulaire
    type="text" sera du texte
    type="password" sera des petits points noir (texte caché)
    type="submit" sera un bouton pour valider le formulaire
    name="nom de l'input" sert à le reconnaitre une fois le bouton submit cliqué, pour le code PHP
     -->
    <br />
    <form method="post" action="inscription.php">
        Pseudo (a-z0-9) : <input type="text" name="pseudo">
        <br />
        Mot de passe : <input type="password" name="mdp">
        <br />
        <input type="submit" value="S'inscrire">
    </form>
    <?php
}
?>
