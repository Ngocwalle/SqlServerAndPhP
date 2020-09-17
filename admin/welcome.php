<?php 
	session_start();
	if(!isset($_SESSION['username'])){
	header('location:login.php');
	}
?>  
<h2><a href="welcome.php">Welcome back !</a></h2>

<?php
	include('modules/config.php');
	include('modules/menu.php');
	include('modules/content.php');
?>