<?php
ob_start();
session_start();
include 'database.php';
$user_id=$_SESSION['id'];

$comment=$_POST['comment'];
$time=date("l jS \of F Y h:i:s A");

$sql=user_name($user_id);
$id=$_GET['t'];

//echo $id;

status_update($comment,$time,$sql,$id);
header('Location:home.php?p=1');

function status_update($comment,$time,$sql,$id){
	$sql="INSERT INTO comments(comments,date,username,identify_id)VALUES('$comment','$time','$sql','$id')";
	mysql_query($sql);
}

?>

<?php

function user_name($id){
	
	$sql="SELECT * FROM user WHERE user_id='$id'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){
         $username=$row['username'];
		 return $username;
	}
}

?>