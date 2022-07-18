<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'chalandizz', 't55S4ScL6d', 'chalandiz');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $nom = mysqli_real_escape_string($db, $_POST['nom']);
  $prenom = mysqli_real_escape_string($db, $_POST['prenom']);
  $tel = mysqli_real_escape_string($db, $_POST['tel']);
  $postale = mysqli_real_escape_string($db, $_POST['postale']);
  $cat = mysqli_real_escape_string($db, $_POST['cat']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $nomGmb = mysqli_real_escape_string($db, $_POST['nomGmb']);
  $emailGmb = mysqli_real_escape_string($db, $_POST['emailGmb']);
  $duree = mysqli_real_escape_string($db, $_POST['duree']);
  $paie = mysqli_real_escape_string($db, $_POST['paie']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nom)) { array_push($errors, "Veuillez entrer votre nom"); }
  if (str_contains($nom, 'abc', '')){
    array_push($errors, "fuck off");
  }
  if (empty($prenom)) { array_push($errors, "Veuillez entrer votre prénom"); }
  if (empty($tel)) { array_push($errors, "Veuillez entre votre numéro de téléphone"); }
  if (empty($postale)) { array_push($errors, "Veuillez indiquer l'adresse postale de votre entreprise"); }
  if (empty($cat)) { array_push($errors, "Vous devez selectionner la catégorie de l'entreprise"); }
  if (empty($email)) { array_push($errors, "Veuillez entrer votre adresse email"); }
  if (empty($nomGmb)) { array_push($errors, "Vous devez inscrire le nom de votre fiche Google My Business"); }
  if (empty($emailGmb)) { array_push($errors, "Vous devez inscrire l'email de votre fiche Google my Business"); }
  if (empty($duree)) { array_push($errors, "Veuillez indiquer la durée de l'opération"); }
  if (empty($paie)) { array_push($errors, "Veuillez selectionner un mode de paiement"); }
  if (empty($password_1)) { array_push($errors, "Mot de passe requis"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Les deux mots de passe ne sont pas identiques");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' OR emailGmb='$emailGbm' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Cette adresse email à déjà été utilisé");
    }

    if ($user['emailGmb'] === $emailGmb) {
      array_push($errors, "Ce compte Google My Business est déjà enregistré pour une autre entreprise");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password_3 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (nom, prenom, tel, postale, cat, email, nomGmb, emailGmb, duree, paie, password) 
  			  VALUES('$nom', '$prenom', '$tel', '$postale', '$cat', '$email', '$nomGmb', '$emailGmb', '$duree', '$paie', '$password_3')";
  	mysqli_query($db, $query);
  	$_SESSION['nom'] = $nom;
  	$_SESSION['success'] = "Vous êtes connecté";
  	header('location: index.php');
  }
}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_3 = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Veuillez indiquer votre adresse email");
    }
    if (empty($password_3)) {
        array_push($errors, "Veuillez indiquer votre mot de passe");
    }
  
    if (count($errors) == 0) {
        $password_3 = md5($password_3);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password_3'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['nom'] = $nom;
          $_SESSION['success'] = "Vous êtes connecté";
          header('location: index.php');
        }else {
            array_push($errors, "L'email ou le mot de passe sont incorrects");
        }
    }
  }


    /*function nettoyer($data)
    {
        // formatage de données
        $resultat = htmlentities(htmlspecialchars(strip_tags($data)));


        // recherche caractere speciaux et chiffre et remplace  par vide
        $pattern = '/[0-9#-&;,.:@!(){}=|_^]/i';
        $replacement = '';
        $dataFin = preg_replace($pattern, $replacement, $resultat);

        // retourner (afficher) chaine de caractere nettoyer et securise
        return $dataFin;
    }*/
  
  ?>