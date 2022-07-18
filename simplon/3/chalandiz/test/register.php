<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Rajouter les éléments de body dans container-fluid -->
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
    </div> -->
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
 
      <div class="mb-3 input-group" >
          <!--Changer username en userp-->
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" id="prenom">
  </div>

  <div class="mb-3 input-group">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="usern" value="<?php echo $usern; ?>" class="form-control" id="nom">
  </div>

  <div class="mb-3 input-group">
    <label for="num" class="form-label">Téléphone</label>
    <input type="text" name="tel" value="<?php echo $tel; ?>" class="form-control" id="num">
  </div>

  <div class="mb-3 input-group">
    <label for="postal" class="form-label">Addresse postale</label>
    <input type="text" name="addPost" value="<?php echo $addPost; ?>" class="form-control" id="postal">
  </div>

  <div class="dropdown input-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Catégorie d'entreprise
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Administration</a></li>
    <li><a class="dropdown-item" href="#">Automobile</a></li>
    <li><a class="dropdown-item" href="#">Agroalimentaire</a></li>
    <li><a class="dropdown-item" href="#">Etc</a></li>
  </ul>
</div>


  	<div class="input-group">
  	  <label>Email du gérent</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Déjà membre? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>