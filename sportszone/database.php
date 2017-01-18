<?php
$connection=mysql_connect("localhost","root","");
if($connection){
	mysql_select_db("sportszone",$connection);
}
?>