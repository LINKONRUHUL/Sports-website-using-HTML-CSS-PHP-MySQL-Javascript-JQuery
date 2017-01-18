<?php
session_start();
include 'database.php';
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/example.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/read_more.css"/>

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

<?php
if($_GET['p']=='1'){
?>

<?php
    $p=$_GET['p'];
    $sql="SELECT * FROM status WHERE news_id='1' ";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
?>
 
 <div class="fix news1">
 
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
 <?php
 if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
 ?>
 <p><a class="fix delete" href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>

 <?php
 }
 ?>
 <hr />
 <p class="fix news1_p"><?php echo $row['status']; ?></p>
  </div>
  
  <div class="fix show_comment">
  
  <p class="fix show_comment_p">USER COMMENT</p>
  
  
  <?php 
  // Connect to the database
include('database.php'); 

$id_post = "1"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];
        
        // Get gravatar Image
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;
        
    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php }
	
	  if(isset($_COOKIE['id'])||isset($_SESSION['id'])){
	 ?>

    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->

  
  
  <?php
  }
	}
  }
   else if($_GET['p']=='2'){
	   $p=$_GET['p'];
	   
    $sql="SELECT * FROM status WHERE news_id='2'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
  <?php
 if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
 ?>
 <p><a class="fix delete" href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
  <?php 
 function update(){
	header('Location:home.php'); 
	 
 }
 
 ?>

 <p ><?php echo $row['status']; ?></p>
  </div>
  <div class="fix show_comment">
  
  <p class="fix show_comment_p">USER COMMENT</p>
  
  
   <?php 

  
// Connect to the database
include('database.php'); 

$id_post = "2"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php }
	    if(isset($_COOKIE['id'])||isset($_SESSION['id'])){

	 ?>


    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->

  
  <?php
	}
   }
   }
   else if($_GET['p']=='3'){
	   	   $p=$_GET['p'];
	   
    $sql="SELECT * FROM status WHERE news_id='3'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
 ?>
 <p><a class="fix delete" href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
  
  <div class="fix show_comment">
  
  <p class="fix show_comment_p">USER COMMENT</p>
  
  
  <?php 
  

// Connect to the database
include('database.php'); 

$id_post = "3"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php }
	   if(isset($_COOKIE['id'])||isset($_SESSION['id'])){

	 ?>


    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->

  <?php
  }
	}
   }
   else if($_GET['p']=='4'){
	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='4'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
 ?>
 <p><a class="fix delete" href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
  <div class="fix show_comment">
  
  <p class="fix show_comment_p">USER COMMENT</p>
  
  
    <?php 
  

// Connect to the database
include('database.php'); 

$id_post = "4"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php } 
	   if(isset($_COOKIE['id'])||isset($_SESSION['id'])){

	?>


    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->

  <?php
  }
	}
   }
   else if($_GET['p']=='5'){
	   	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='5'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
 ?>
 <p><a class="fix delete" href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
  <div class="fix show_comment">
  
  <p class="fix show_comment_p">USER COMMENT</p>
  
  
    <?php 
  
// Connect to the database
include('database.php'); 

$id_post = "5"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php }
	    if(isset($_COOKIE['id'])||isset($_SESSION['id'])){

	 ?>


    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->

  <?php
  }
	
   }
   }
   else if($_GET['p']=='6'){
	   
	   	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='6'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
 ?>
 <p><a class="fix delete" href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
 <p ><?php echo $row['status']; ?></p>
  </div>
  <div class="fix show_comment">
  
  <p class="fix show_comment_p">USER COMMENT</p>
  
  
   <?php 

  
// Connect to the database
include('database.php'); 

$id_post = "6"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php } 
	
	   if(isset($_COOKIE['id'])||isset($_SESSION['id'])){

	?>


    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->

  <?php
  }
	}
   }
   else if($_GET['p']=='7'){
	   	   	   $p=$_GET['p'];

	   
    $sql="SELECT * FROM status WHERE news_id='7'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
   ?>
 <div class="fix news1">
 <img id="n1" src="<?php echo $row['image'];?>" alt="" />
 <div class="news1_text">
 <h1 class="news1_h1"><?php echo $row['heading']; ?></h1>
<?php
 if($_COOKIE['id']=='1234'||$_SESSION['id']=='1234'){
 ?>
 <p><a class="fix delete" href="delete_process.php?t=<?php echo $p;?>">Delete</a></p>
 <?php
 }
 ?>
  <p ><?php echo $row['status']; ?></p>
  </div>
  <div class="fix show_comment">
  
  <p class="fix show_comment_p">USER COMMENT</p>
  
  
    <?php 
// Connect to the database
include('database.php'); 

$id_post = "7"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comments WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php } 
	    if(isset($_COOKIE['id'])||isset($_SESSION['id'])){

	
	?>


    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->

  <?php
	}
	}
   }
  ?>
 </div>
 </div>
 </div>
 
 
 <script type="text/javascript">
   $(function(){ 
        //alert(event.timeStamp);
        $('.new-com-bt').click(function(event){    
            $(this).hide();
            $('.new-com-cnt').show();
            $('#name-com').focus();
        });

        /* when start writing the comment activate the "add" button */
        $('.the-new-com').bind('input propertychange', function() {
           $(".bt-add-com").css({opacity:0.6});
           var checklength = $(this).val().length;
           if(checklength){ $(".bt-add-com").css({opacity:1}); }
        });

        /* on clic  on the cancel button */
        $('.bt-cancel-com').click(function(){
            $('.the-new-com').val('');
            $('.new-com-cnt').fadeOut('fast', function(){
                $('.new-com-bt').fadeIn('fast');
            });
        });

        // on post comment click 
        $('.bt-add-com').click(function(){
            var theCom = $('.the-new-com');
            var theName = $('#name-com');
            var theMail = $('#mail-com');

            if( !theCom.val()){ 
                alert('You need to write a comment!'); 
            }else{ 
                $.ajax({
                    type: "POST",
                    url: "ajax/add-comment.php",
                    data: 'act=add-com&id_post='+<?php echo $id_post; ?>+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
                    success: function(html){
                        theCom.val('');
                        theMail.val('');
                        theName.val('');
                        $('.new-com-cnt').hide('fast', function(){
                            $('.new-com-bt').show('fast');
                            $('.new-com-bt').before(html);  
                        })
                    }  
                });
            }
        });

    });
</script>


 </body>
 </html>