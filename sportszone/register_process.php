<?php
ob_start();
include "database.php";

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$country=$_POST['country'];

insert_user($username,$email,$password,$country);
header('Location:register.php');
 
 function insert_user($username,$email,$password,$country){
	 $user_information="INSERT INTO user(username,email,password,country)VALUES('$username','$email','$password','$country')";
	 mysql_query($user_information);
 }
 

?>