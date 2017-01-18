<?php
ob_start();
session_start();
include 'database.php';

$heading=$_POST['heading'];
$status=$_POST['status'];
$video_link=$_POST['video'];

status_update($heading,$status,$video_link);
header('Location:admin_page.php?status=yes');

function status_update($heading,$status,$video_link){
	$sql="INSERT INTO video_link(heading,status,video_link)VALUES('$heading','$status','$video_link')";
	mysql_query($sql);
}

?>