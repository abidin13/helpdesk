<?php 
	require_once 'core/init.php';

	//var_dump(Config::get('mysql/host'));
	$user = DB::getInstance()->query("SELECT * FROM users where username=?", array('alex'));

	if ($user->error()) {
		echo "no User";
	} else {
		echo "OK";
	}
	

 ?>