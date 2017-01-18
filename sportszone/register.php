<?php

session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/register_body.css"/>

 <script>

function validateForm(){
   var t=document.getElementById('username').value;
   var email = document.getElementById('email').value;
   var pass = document.getElementById('password').value;
   var count = document.getElementById('country').value;

 
   var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
 
   
     if(t.length == 0||isNaN(t) == false){
      alert('Please enter any value');
      return false;}
	  
	   else if(email.length == 0 || filter.test(email) != true){
     alert('Please enter valid email');
     return false;
     }
	  
	  else if(pass.length == 0){
		 alert('Please enter any password');
         return false;
	  }
	  
   else if(count.length == 0){
		 alert('Please enter any country name');
         return false;
	  }
   else{
     alert('form submitted');
     return true;
   }
}

 </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>registration form of sports zone</title>
</head>

<body>
<div class="fix main">
<div class="fix header">
<h1>SPORTS ZONE</h1>
</div>
<div class="fix navigation_bar">
<ul >

  <?php
  
 if(isset($_COOKIE['id'])||isset($_SESSION['id']))
  {
	  if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
  ?>
  <li><a href="home.php">HOME</a></li>
  <li><a href="live_score.php">LIVE SCORES</a></li>
  <li><a href="news.php">NEWS</a></li>
  <li><a href="photo.php">PHOTOS</a></li>
  <li><a href="register.php">REGISTRATION</a></li>
  <li><a href="admin_page.php">ADMIN</a></li>
  <li><a href="logout.php">LOGOUT</a></li>
  <?php
   } else{
   ?>
   <li><a href="home.php">HOME</a></li>
   <li><a href="live_score.php">LIVE SCORES</a></li>
   <li><a href="news.php">NEWS</a></li>
   <li><a href="photo.php">PHOTOS</a></li>
   <li><a href="register.php">REGISTRATION</a></li>
   <li><a href="logout.php">LOGOUT</a></li>
   <?php
   }
  }else
  
  {
   ?>
   <li><a href="home.php">HOME</a></li>
  <li><a href="live_score.php">LIVE SCORES</a></li>
  <li><a href="news.php">NEWS</a></li>
  <li><a href="photo.php">PHOTOS</a></li>
  <li><a href="register.php">REGISTRATION</a></li>
  <li><a href="login.php">LOGIN</a></li>
   <?php
  }
   ?>

</ul>
</div>



 <div class="fix content">
 
 <div class="fix sidebar">
 <ul >
  <li><a href="home.php">HOME</a></li>
  <li><a href="fixtures.php">FIXTURES</a></li>
  <li><a href="video.php">VIDEOS</a></li>
  <li><a href="register.php">REGISTER</a></li>
 </ul>
 </div>
 
 <div class="fix content_middle">
 
 
 <div class="fix register">
 <h3 class="fix form_p"> REGISTRATION FORM</h3>
 
 <form action="register_process.php"  name="wForm" method="post" onsubmit="return validateForm()">
 
 <h4 class="fix form_h4">Name            :</h4>
 <input type="text" name="username" class="fix inputs" id="username" placeholder="Enter your name" />
 
 <h4 class="fix form_h4">Email           :</h4>
 <input  type="email" name="email" class="fix inputs" id="email" placeholder="Enter your email address"/>
 
 <h4 class="fix form_h4">Password        :</h4>
 <input  type="password" name="password" class="fix inputs" id="password" placeholder="Enter your password"/>
 
 <h4 class="fix form_h4">Country    :</h4>
 <input  type="text" name="country" class="fix inputs" id="country" placeholder="Enter your country name"/>
 <br /><br />
 <input  type="submit" value="SIGNUP    " class="fix myButton"/> 
 </form>
 
 </div>
 
 </div>
 

 
 
 </div>
 
 </div>
 
 
 <div class="fix footer">
 <p class="fix footer_text1 ">All Rights Reserved To</p>
 <p class="fix footer_text1 ">MD: RUHUL AMIN LINKON</p>
</div>

</body>
</html>
