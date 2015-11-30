<?php
	require_once 'core/init.php';

	if (Input::exits()) {
		echo Input::get('username');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register PHP</title>
</head>
<body>
	<form action="" method="post">
		<div class="field">
			<label for="username">username</label>
			<input type="text" name="username" id="username" autocomplete="off">
		</div>
		<div class="field">
			<label for="password">Choose a password</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="field">
			<label for="password_again">enter your password again</label>
			<input type="password" name="password_again" id="password_again">
		</div>
		<div class="field">
			<label for="name">name</label>
			<input type="text" name="name" id="name" autocomplete="off">
		</div>

		<input type="submit" value="Register">
	</form>

</body>
</html>