<?php
ob_start();
session_start();
include 'database.php';

$heading=$_POST['heading'];

if($_FILES['image']['error']>0)
{
  echo 'error';
}
else
{
	$prefix=$_SESSION['id'].time();
	$link="upload/".$prefix.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$link);
}
$img_link="http://localhost/sportszone/upload/".$prefix.$_FILES['image']['name']; 


status_update($heading,$img_link);
header('Location:admin_page.php?status=yes');

function status_update($heading,$img_link){
	$sql="INSERT INTO picture(heading,picture)VALUES('$heading','$img_link')";
	mysql_query($sql);
}

?>