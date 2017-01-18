<?php
ob_start();
include 'database.php';
$delete=$_GET['t'];
delete_process($delete);

 header("Location: ".$_SERVER['HTTP_REFERER']);  
 
function delete_process($delete){
$sql = "DELETE FROM status WHERE news_id='$delete'";
$com="DELETE FROM comments WHERE id='$delete'";
mysql_query($sql);
mysql_query($com);
}

?> 