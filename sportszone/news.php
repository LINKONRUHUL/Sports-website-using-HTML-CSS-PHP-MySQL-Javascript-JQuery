<?php

session_start();
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="css/news_rss.css"/>
<title>Rss news of sportszone</title>
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
<div class="fix left_content_middle">
   <p class="fix top_name">ESPN SPORTS</p>


<?php
    $rss = new DOMDocument();
    $rss->load('http://www.espncricinfo.com/rss/content/story/feeds/509587.xml');
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
    }
	
    $limit = 5;
	
    for($x=0;$x<$limit;$x++) {
		
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
	
    echo '<p class="fix rss_heading"><strong><a class="fix rss_heading" href="'.$link.'" title="'.$title.'">'.$title.'</a></strong></p>';
    echo '<P><small>Posted on '.$date.'</small></p>'.'<hr>';
	
    echo '<p class="fix rss_details">'.$description.'</p>'.'<hr>';
    }
    ?>
	
</div>

<div class="fix right_content_middle">
<p class="fix top_name">BBC SPORTS</p>

<?php
    $rss = new DOMDocument();
    $rss->load('http://feeds.bbci.co.uk/sport/0/cricket/rss.xml?edition=uk#');
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
    }
	
    $limit = 5;
	
    for($x=0;$x<$limit;$x++) {
		
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
	
    echo '<p class="fix rss_heading"><strong><a class="fix rss_heading" href="'.$link.'" title="'.$title.'">'.$title.'</a></strong></p>';
    echo '<P><small>Posted on '.$date.'</small></p>'.'<hr>';
    echo '<p class="fix rss_details">'.$description.'</p>'.'<hr>';
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