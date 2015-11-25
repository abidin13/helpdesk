<?php 
	require_once 'core/init.php';

	//var_dump(Config::get('mysql/host'));
	$user = DB::getInstance()->get('users', array('username','=','alex'));

	if (!$user->count()) {
		echo "no User";
	} else {
		echo $user->first()->username;
	}
	

 ?>