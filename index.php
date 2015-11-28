<?php 
	require_once 'core/init.php';

	//var_dump(Config::get('mysql/host'));
	$user = DB::getInstance()->update('users', 3, array(
			'password' => 'newpassword',
			'name' => 'Febriyant Abidin'
		));
	

 ?>