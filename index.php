<?php 
	require_once 'core/init.php';

	//var_dump(Config::get('mysql/host'));
	$user = DB::getInstance()->insert('users', array(
			'username' => 'Febri',
			'password' => 'password',
			'salt' => 'salt'
		));
	

 ?>