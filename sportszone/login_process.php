<?php
ob_start();
session_start();
include 'database.php';
$username=$_POST['username'];
$password=$_POST['password'];

if($username=='admin'&&$password=='1234'){

   if(isset($_POST['check'])&&$_POST['check']=='yes'){
	$_SESSION['id']='1234';
	setcookie('id','1234',time()+1000);
   }else{ 
	$_SESSION['id']='1234';
   }
	header('Location:home.php?admin=yes');
	
}else{
	
//login_system($username,$password);

//function login_system($username,$pass){
	$sql="SELECT * FROM user WHERE username='$username'";
	//if($sql){
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		if($row['password']==$password)
		{
			
			if(isset($_POST['check'])&&$_POST['check']=='yes'){
			$_SESSION['id']=$row['user_id'];
			setcookie('id',$row['user_id'],time()+1000);
			}else{
		       $_SESSION['id']=$row['user_id'];
			}
			header('Location:go.php');
			die();
			
		}
		else
		{
			header('Location:login.php?pass=yes');
		}
	}
	
	//}else{
	header('Location:login.php?name=username');
	
	//}
	
//}
}
?>