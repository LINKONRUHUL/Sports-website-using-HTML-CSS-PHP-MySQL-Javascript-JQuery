<?php
session_start();
ob_start();
if(isset($_COOKIE['id'])||isset($_SESSION['id']))
 {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="admin.css"/>
<title>admin page of sports zone</title>
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
  <li><a href="#">PHOTOS</a></li>
  <li><a href="register.php">REGISTRATION</a></li>
  <li><a href="admin_page.php">ADMIN</a></li>
  <li><a href="logout.php">LOGOUT</a></li>
  <?php
   } else{
   ?>
   <li><a href="home.php">HOME</a></li>
   <li><a href="live_score.php">LIVE SCORES</a></li>
   <li><a href="news.php">NEWS</a></li>
   <li><a href="#">PHOTOS</a></li>
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
  <li><a href="#">PHOTOS</a></li>
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
 <div class="fix login_form">
 <?php
 if($_GET['status']=='yes')
 {
	echo '<p style="color:green;">your status updated successfully</p>';
 }
 ?>
 <p class="fix form_p">UPDATE STATUS</p>
 
 <form method="post" action="admin_status_process.php" enctype="multipart/form-data">
 <h4 class="fix form_h4">Heading  :</h4>
 <input type="text" name="heading" class="fix inputs" placeholder="enter news heading"/>
 <h4 class="fix form_h4">Shortcut Status   :</h4>
 <textarea name="shortcut_status" class="fix inputs" cols="40" rows="3"></textarea>
 <h4 class="fix form_h4">Status   :</h4>
 <textarea name="status" cols="60" rows="8" class="fix inputs"></textarea>
 <h4 class="fix form_h4">Picture  :</h4>
 <input type="file" name="image" placeholder="enter image" class="fix inputs"/>
 <h4 class="fix form_h4">News Id:</h4>
 <input type="text" name="news_id" placeholder="enter id of news" class="fix inputs"/>
 <br />
 <input class="fix myButton" type="submit" value="status          " />
 </form>

 </div>
 
 <div class="fix video_status"> 
 
 <div class="fix login_form">
 <p class="fix form_p">VIDEO UPLOAD</p>
 <form method="post" action="video_status_process.php">
 <h4 class="fix form_h4">Heading  :</h4>
 <input type="text" name="heading" placeholder="enter news heading" class="fix inputs"/>
 <h4 class="fix form_h4">Status   :</h4>
 <textarea name="status" cols="60" rows="8" class="fix inputs"></textarea>
 <h4 class="fix form_h4">Video Link  :</h4>
 <input type="text" name="video" class="fix inputs"/>
 <br />
 <input class="fix myButton" type="submit" value="status          " />
 </form>
 </div>
 
 </div>
 
 <div class="fix video_status">
 
 <div class="fix login_form">
 
 <p class="fix form_p" >PICTURE UPLOAD</p>
 <form method="post" action="picture_process.php" enctype="multipart/form-data">
  <h4 class="fix form_h4"></h4>
 <h4 class="fix form_h4" style="font-size:24px;">Heading  :</h4>
 <input type="text" name="heading" placeholder="enter picture heading" class="fix inputs"/>
 <h4 class="fix form_h4">Picture  :</h4>
 <input type="file" name="image" placeholder="enter image" class="fix inputs"/>
  <br/>
 <input class="fix myButton" type="submit" value="status          " />

</form> 
 </div>
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
<?php
}else{
 header('Location:home.php');	
}
?>
