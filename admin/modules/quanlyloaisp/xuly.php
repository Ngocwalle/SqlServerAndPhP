<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenloaisp=$_POST['tenloaisp'];
	$maloaisp=$_POST['maloaisp'];
	if(isset($_POST['them'])){
		$sql="insert into loaisp (tenloaisp,maloaisp) values (N'$tenloaisp',N'$maloaisp')";
		sqlsrv_query($conn,$sql);
		header('location:../../welcome.php?quanly=quanlyloaisp&ac=them');
	}elseif(isset($_POST['sua'])){
		$sql="update loaisp set tenloaisp='$tenloaisp',maloaisp='$maloaisp' where id_loaisp='$id'";
		sqlsrv_query($conn,$sql);
		header('location:../../welcome.php?quanly=quanlyloaisp&ac=sua&id='.$id);
	}else{
		$sql="delete from loaisp where id_loaisp='$id'";
		sqlsrv_query($conn,$sql);
		header('location:../../welcome.php?quanly=quanlyloaisp&ac=them');
	}
?>