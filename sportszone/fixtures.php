<?php
session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function showCD(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","index_parsing.php?q="+str,true);
  xmlhttp.send();
}
</script>
<link  rel="stylesheet" href="css/fixture.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Fixture of sportszone</title>
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
<div class="fix ajax_form">
<p class="form_style">Choose Your Desired Fixture</p>
<form>
<select name="cds" onchange="showCD(this.value)">
<option class="option_style" value="">SELECT A TOURNAMENT</option>
<option class="option_style" value="WORLD CRICKET">WORLD CRICKET</option>
<option class="option_style" value="WORLD FOOTBALL">WORLD FOOTBALL</option>
<option class="option_style" value="EPL">ENGLISH PREMIER LEAGUE</option>
</select>
</form>
</div>

<div id="txtHint" ></div>

</div>
 
 </div>
 
 </div>
 <div class="fix footer">
 <p class="fix footer_text1 ">All Rights Reserved To</p>
 <p class="fix footer_text1 ">MD: RUHUL AMIN LINKON</p>
</div>
 
</body>
</html>