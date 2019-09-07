<?php
$dsn = 'pgsql:host=ec2-23-23-92-204.compute-1.amazonaws.com
;dbname=d8g5vkl3hk84ai';
$username = 'movgpzvubxrkru';
$password = 'f4117a6654430998b88fafb8fff17397b647ae20fd38b526e3df636f4edf3d54';
try {
$connection = new PDO($dsn, $username, $password);
	
} catch(PDOException $e) {

}
 $con = "dbname=d8g5vkl3hk84ai host=host=ec2-23-23-92-204.compute-1.amazonaws.com port=5432 user=movgpzvubxrkru password=f4117a6654430998b88fafb8fff17397b647ae20fd38b526e3df636f4edf3d54 sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }
pg_select_db($con,"d8g5vkl3hk84ai");
$query = "INSERT INTO Users (nome) VALUES ('wilton')"; 
pg_query($connection,$query);
