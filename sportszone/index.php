<?php

if($_COOKIE['id']){
	header('Location:admin_page.php');
}
else
{
	echo 'no';
}

?>