<?php
	//setcookie("userName", 'John');
// 	setcookie("userName", "John", 1);
// 	echo $_COOKIE["userName"];
	$user = [
		'name'=> 'John',
		'login'=> 'root',
		'password'=> '1234'
	];
	$str = serialize($user);
	echo base64_encode($str);
	$user =  unserialize(base64_decode($_COOKIE['user']));
	print_r $user;
 ?>