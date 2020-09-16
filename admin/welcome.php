<?php 
	session_start();
	if(!isset($_SESSION['username'])){
	header('location:login.php');
	}
?>  
<h2><a href="welcome.php">Welcome back !</a></h2>
<h2><a href="logout.php"> Đăng xuất</a></h2>

<h2>Thêm loại sản phẩm:<a href="modules/quanlyloaisp/them.php">Link</a></h2>

<?php
    include('modules/config.php');
    include('modules/content.php');
?>