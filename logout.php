<?php 
session_start();
	session_unset();
	session_destroy();

	
	header('location:../CLASSIC_WATCH/index.php');
 ?>

 