<?php
	include('../../admincp/modules/config.php');
	$username=$_POST['username'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$diachi=$_POST['diachi'];
	if(!isset($_POST['thongtinkh'])){
		$sql="insert into thongtinkh (username,phone,diachi,email) value ('$username','$phone','$diachi','$email')";
		sqlsrv_query($conn,$sql);
		header('location:../../index.php?xem=thongtinkh');
		}
?>