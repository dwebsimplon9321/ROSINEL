<?php
session_start();

// initializing variables
$nom = "";
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
  $paie = intval($db, $_POST['paie']);
  $acc = intval($db, $_POST['acc']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (!preg_match('/^[-a-zA-Z0-9 .]+$/', $nom)  || empty($nom)) {
    array_push($errors, "Veuillez entrer votre nom");
  }
  if (!preg_match('/^[-a-zA-Z0-9 .]+$/', $prenom)  || empty($prenom)) {
    array_push($errors, "Veuillez entrer votre prenom");
  }
  if (empty($tel)) {
    array_push($errors, "Veuillez entre votre numéro de téléphone");
  }

  if (!preg_match('/^[-a-zA-Z0-9 .]+$/',   $postale)  || empty($postale)) {
    array_push($errors, "Veuillez indiquer l'adresse postale de votre entreprise");
  }

  if(empty($_POST['cat'])) {
    array_push($errors, "Vous devez selectionner la catégorie de l'entreprise");;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)  || empty($email)) {
    array_push($errors, "Veuillez entrer votre adresse email");
  }
  if (!preg_match('/^[-a-zA-Z0-9 .]+$/', $nomGmb)  || empty($nomGmb)) {
    array_push($errors, "Vous devez inscrire le nom de votre fiche Google My Business");
  }
  if (!filter_var($emailGmb, FILTER_VALIDATE_EMAIL)  || empty($emailGmb)) {
    array_push($errors, "Veuillez entrer votre adresse email");
  }

  /*if (empty($duree)) {
    array_push($errors, "Veuillez indiquer la durée de l'opération");
  }*/

  /*if ($paie == "") {
    array_push($errors, "Vous n'avez pas selectioner de mode de paiment");
  }*/

  /*if ($acc == "lbr" || $acc == "") {
    array_push($errors, "Vous devez créer un compte pour pouvoir continuer");
  }*/

  if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password_1)  || empty($password_1)) {
    array_push($errors, "Mot de passe requis");
    #test:6aA!!!sds
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM userss WHERE nom='$nom' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['nom'] === $nom) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = password_hash($password_1, PASSWORD_DEFAULT);//encrypt the password before saving in the database

  	$query = "INSERT INTO userss (nom, prenom, email, password) 
  			  VALUES('" .$nom. "', '" .$prenom. "', '" .$email. "','" .$password. "')";
  	
    /*$queryEnt = "INSERT INTO entreprise (postale, cat, nomGmb, emailGmb) 
  			  VALUES('" .$postale. "', '" .$cat. "', '" .$nomGmb. "', '" .$emailGmb. "')";
  	mysqli_query($db, $query, $queryEnt);*/
    /*$query = "INSERT INTO userss (nom, prenom, tel, email, duree, paie, password) 
  			  VALUES('" .$nom. "', '" .$prenom. "', '" .$tel. "', '" .$email. "', '" .$duree. "', '" .$paie. "', '" .$password. "')";*/
    mysqli_query($db, $query);
  	$_SESSION['nom'] = $nom;
  	$_SESSION['success'] = "Inscription terminé";
  	header('location: index.php');

    
  }
}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $nom = mysqli_real_escape_string($db, $_POST['nom']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($nom)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$nom' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['nom'] = $nom;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  

  /*function FormatTel($numTel) {
    $i=0;
    $j=0;
    $formate = "";
    while ($i<strlen($numTel)) { //tant qu il y a des caracteres
      if ($j < 2) {
        if (preg_match('/^[0-9]$/', $numTel[$i])) { //si on a bien un chiffre on le garde
          $formate .= $numTel[$i];
          $j++;
        }
        $i++;
      }
      else { //si on a mis 2 chiffres a la suite on met un espace
        $formate .= " ";
        $j=0;
      }
    }
    return $formate;
  }*/
