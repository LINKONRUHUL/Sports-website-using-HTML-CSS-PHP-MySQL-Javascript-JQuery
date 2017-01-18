<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="css/video.css"/>
<title>Video of sports zone</title>
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


<div class="content">

<div class="fix sidebar">
<ul >
  <li><a href="home.php">HOME</a></li>
  <li><a href="fixtures.php">FIXTURES</a></li>
  <li><a href="video.php">VIDEOS</a></li>
  <li><a href="register.php">REGISTER</a></li>
</ul>
</div>

<div class="fix content_middle">

<div class="fix video">
<?php
include 'database.php';
$sql="SELECT * FROM video_link";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
	?>
<a href="#" class="fix video_heading"><?php echo $row['heading']; ?></a>

<object class="fix link" width="600" height="315"
data="<?php echo $row['video_link'];?>">
</object>
<p class="fix video_status"><?php echo $row['status'] ; ?></p>



<?php 
	}
?>
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