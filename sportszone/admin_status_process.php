<?php
ob_start();
session_start();
include 'database.php';

$heading=$_POST['heading'];
$status=$_POST['status'];
$time=date("l jS \of F Y h:i:s A");
$news_id=$_POST['news_id'];
$short=$_POST['shortcut_status'];

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

status_update($heading,$status,$time,$img_link,$news_id,$short);
header('Location:admin_page.php?status=yes');

function status_update($heading,$status,$time,$img_link,$news_id,$short){
	$sql="INSERT INTO status(heading,status,date,image,news_id,shortcut_status)VALUES('$heading','$status','$time','$img_link','$news_id','$short')";
	mysql_query($sql);
}

?>