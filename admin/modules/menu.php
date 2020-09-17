<?php
	if(isset($_GET['ac']) && $_GET['ac']=='username'){
		unset($_SESSION['login']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="welcome.php">Trang chủ</a></li>
            <li><a href="welcome.php?quanly=quanlychitietsp&ac=them">QL loại thức ăn</a></li>
            <li><a href="welcome.php?quanly=dmk">Đổi mật khẩu</a></li>
            <li><a href="welcome.php?quanly=dathang">Danh sách đặt món</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
        </ul>
</div>