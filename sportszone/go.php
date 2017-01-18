<?php
session_start();
ob_start();

if(isset($_COOKIE['id'])||isset($_SESSION['id'])){
header('Location:home.php');	
}
?>