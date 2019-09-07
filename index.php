<?php
$dsn = 'pgsql:host=ec2-23-23-92-204.compute-1.amazonaws.com
;dbname=d8g5vkl3hk84ai';
$username = 'movgpzvubxrkru';
$password = 'f4117a6654430998b88fafb8fff17397b647ae20fd38b526e3df636f4edf3d54';
try {
$connection = new PDO($dsn, $username, $password);
	
} catch(PDOException $e) {

}
class User{
	function conecta() {     
	if($this->con=pg_connect("host=ec2-23-23-92-204.compute-1.amazonaws.com","movgpzvubxrkru","f4117a6654430998b88fafb8fff17397b647ae20fd38b526e3df636f4edf3d54"))
	{
	return "besta";
	}
	else
	{
	return "otario";
	}
	}
}
$user = new User();
$user->conecta();
