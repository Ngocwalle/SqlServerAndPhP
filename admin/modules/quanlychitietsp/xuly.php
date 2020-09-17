<?php
	include('../config.php');
	$id=$_GET['id'];
	$tensp=$_POST['tensp'];
	$mota=$_POST['motasp'];
	$gia=$_POST['gia'];
	$loaisp=$_POST['loaisp'];
	$ma_ct_sp=$_POST['ma_ct_sp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	if(isset($_POST['them'])){
		$sql="insert into chitietsp (tensp,ma_ct_sp,mota,gia,id_loaisp,hinhanh) values ('$tensp','$ma_ct_sp','$mota','$gia','$loaisp','$hinhanh')";
		sqlsrv_query($conn,$sql);
		header('location:../../welcome.php?quanly=quanlychitietsp&ac=them');
	}elseif(isset($_POST['sua'])){
		if($hinhanh!=''){
		$sql="update chitietsp set tensp='$tensp',ma_ct_sp='$ma_ct_sp',mota='$mota',gia='$gia',id_loaisp='$loaisp',hinhanh='$hinhanh' where id_sp='$id'";
		}else{
		$sql="update chitietsp set tensp='$tensp',ma_ct_sp='$ma_ct_sp',mota='$mota',gia='$gia',id_loaisp='$loaisp' where id_sp='$id'";
		}
		sqlsrv_query($conn,$sql);
		header('location:../../welcome.php?quanly=quanlychitietsp&ac=sua&id='.$id);
	}else{
		$sql="delete from chitietsp where id_sp='$id'";
		sqlsrv_query($conn,$sql);
		header('location:../../welcome.php?quanly=quanlychitietsp&ac=them');
	}
?>