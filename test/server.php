<?php



session_start();

#######################

$nom = "";
$email    = "";
$errors = array();

$nomserv = 'local';
$user = '' ;
$mdp = '' ;
$bdd = '';
#$db = mysqli_connect('localhost', 'chalandizz', 't55S4ScL6d', 'chalandiz');

#######################

if (isset($_POST['reg_user'])) {
  #Lecture des champs du formulaire
  $nom = mysqli_real_escape_string($db, $_POST['nom']);
  $prenom = mysqli_real_escape_string($db, $_POST['prenom']);
  $tel = mysqli_real_escape_string($db, $_POST['tel']);
  $postale = mysqli_real_escape_string($db, $_POST['postale']);
  $cat = mysqli_real_escape_string($db, $_POST['cat']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $nomGmb = mysqli_real_escape_string($db, $_POST['nomGmb']);
  $emailGmb = mysqli_real_escape_string($db, $_POST['emailGmb']);
  $paie = mysqli_real_escape_string($db, $_POST['paie']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $token = mysqli_real_escape_string($db, $_POST['token']);

  #Validation des différent champ du formulaire
  if (!preg_match('/^[-a-zA-Z0-9 .]+$/', $nom)  || empty($nom)) {
    array_push($errors, "Veuillez entrer votre nom");
  }
  if (!preg_match('/^[-a-zA-Z0-9 .]+$/', $prenom)  || empty($prenom)) {
    array_push($errors, "Veuillez entrer votre prenom");
  }

  if (!preg_match('/^[0-9]{10}+$/', $tel) || empty($tel)) {
    array_push($errors, "Veuillez entrer un numéro de téléphone valide");
  }

  if (empty($postale)) {
    array_push($errors, "Veuillez indiquer l'adresse postale de votre entreprise");
  }

  if (empty($_POST['cat'])) {
    array_push($errors, "Vous devez selectionner la catégorie de l'entreprise");;
  }

  if (!preg_match('/^[-a-zA-Z0-9 .]+$/', $nomGmb)  || empty($nomGmb)) {
    array_push($errors, "Vous devez inscrire le nom de votre fiche Google My Business");
  }

  if (!filter_var($emailGmb, FILTER_VALIDATE_EMAIL)  || empty($emailGmb)) {
    array_push($errors, "Veuillez entrer votre adresse email Google My Business");
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)  || empty($email)) {
    array_push($errors, "Veuillez entrer votre adresse email");
  }

  if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password_1)  || empty($password_1)) {
    array_push($errors, "Mot de passe requis");
    #test mdp:6aA!!!sds
  }

    #verifier si l'adresse mail n'existe pas dans la BDD
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {

    if ($user['email'] === $email) {
      array_push($errors, "Un compte existe déjà pour cette adresse mail");
    }
  }

    #inscription de l'utilisateur
  if (count($errors) == 0) {
    $password = $password_1;
    $password = password_hash($_POST['$password_1'], PASSWORD_DEFAULT);
    $token =  rand(0,1000) ; #code de vérification


    $query = "INSERT INTO users (nom, prenom, tel, email, password, token) 
  			  VALUES('" . $nom . "', '" . $prenom . "', '" . $tel . "', '" . $email . "', '" . $password . "', '" . $token . "')";

    mysqli_query($db, $query);

    $queryEnt = "INSERT INTO entreprise (postale, cat, nomGmb, emailGmb) 
  	VALUES('" . $postale . "', '" . $cat . "', '" . $nomGmb . "', '" . $emailGmb . "')";

    mysqli_query($db, $queryEnt);

    #email contenant le code d'activation

    $message = "Votre de code d'activation".$token."";
    $to=$email;
    $subject="Activation Code";
    $from = 'chalandiz.fr.gp@gmail.com';
    $body='Votre code d\'activation est :'.$code.' Veuillez cliquer sur ce lien pour activer votre compte : <a href="verification.php">Verify.php?id='.'&token='.$token.'</a>.';
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);

    header('location: index.php');

  }
}
#######################

#######################

#Activation du compte
if (isset($_POST['verify'])) {

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $token = mysqli_real_escape_string($db, $_POST['token']);
  //$password = password_hash($_POST['$password'], PASSWORD_DEFAULT);

  if (empty($email)) {
    array_push($errors, "Veuillez indiquer votre adresse mail");
  }
  if (empty($token)) {
    array_push($errors, "Veuillez entrer votre code de vérification");
  }
  if (count($errors) == 0) {

    $user_check_query = "SELECT * FROM users WHERE token='" . $token . "' AND email='" . $email . "'";
    $results = mysqli_query($db, $user_check_query);
    if (mysqli_num_rows($results) == 1) {

      
      $_SESSION['nom'] = $nom;
      $_SESSION['email'] = $email;
      $query = "UPDATE users  SET token = NULL WHERE email='".$_SESSION['email']."'";
      mysqli_query($db, $query);

      $_SESSION['success'] = "";
      header('location: index.php');

    } else {
      array_push($errors, "L'adresse mail ou le code sont invalides");
    } 
  }
}

#######################

#######################

#Connexion
if (isset($_POST['login_user'])) {

  $nom = mysqli_real_escape_string($db, $_POST['nom']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  //$password = password_hash($_POST['$password'], PASSWORD_DEFAULT);

  if (empty($nom)) {
    array_push($errors, "Veuillez indiquer votre nom");
  }
  if (empty($password)) {
    array_push($errors, "Veuillez indiquer votre mot de passe");
  }
  if (count($errors) == 0) {

    $user_check_query = "SELECT * FROM users WHERE password='" . $password . "' AND nom='" . $nom . "' AND token IS NULL";
    $results = mysqli_query($db, $user_check_query);
    if (mysqli_num_rows($results) == 1) {
      
      $_SESSION['nom'] = $nom;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');

    } else {
      array_push($errors, "Champs invalide");
    } 
  }
}