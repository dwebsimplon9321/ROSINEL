<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Realtime Form Validation</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/formhack.css">

</head>
<body>

	<div class="container">
		<form class="registration" id="registration">
			<h1>Registration Form</h1>

			<label for="username">
				<span>Username</span>

				<input type="text" id="username">

				<ul class="input-requirements">
					<li>At least 3 characters long</li>
					<li>Must only contain letters and numbers (no special characters)</li>
				</ul>
			</label>

			<label for="password">
				<span>Password</span>

				<input type="password" id="password">

				<ul class="input-requirements">
					<li>At least 8 characters long (and less than 100 characters)</li>
					<li>Contains at least 1 number</li>
					<li>Contains at least 1 lowercase letter</li>
					<li>Contains at least 1 uppercase letter</li>
					<li>Contains a special character (e.g. @ !)</li>
				</ul>
			</label>

			<label for="password_repeat">
				<span>Repeat Password</span>
				<input type="password" id="password_repeat" maxlength="100" minlength="8">
			</label>

			<br>

			<input type="submit">

		</form>
	</div>

    <script src="script.js"></script>
</body>
</html>
