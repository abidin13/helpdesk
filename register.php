<?php
	require_once 'core/init.php';

	if (Input::exits()) {
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
				'username' => array(
						'required' => true,
						'min' => 2,
						'max' => 20,
						'unique' => 'users'
					),
				'password' => array(
						'required' => true,
						'min' => 6
					),
				'password_again' => array(
						'required' => true,
						'matches' => 'password'
					),
				'name' => array(
						'required' => true,
						'min' => 2,
						'max' => 50
					),
			));

		if ($validation->passed()) {
			echo "Passed";
		} else {
			foreach ($validation->errors() as $error) {
				echo $error, '<br>';
			}
		}
		
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
			<input type="text" name="username" id="username" autocomplete="off" value="<?php echo escape(Input::get('username')); ?>">
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
			<input type="text" name="name" id="name" autocomplete="off" value="<?php echo escape(Input::get('name')); ?>">
		</div>

		<input type="submit" value="Register">
	</form>

</body>
</html>