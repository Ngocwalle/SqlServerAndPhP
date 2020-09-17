 <div class="giohang" style="color:white">
    	<table>
        	<tr> 
<h2>Giỏ hàng</h2>
<?php 
	@session_start();
	echo '  <table width="980px" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
			
			echo'  <tr bgcolor="#CC0000">';
			echo '<td>Tên thực đơn</td>';
			echo'<td>Hình ảnh</td>';
			echo'<td>Giá</td>';
			echo'<td>Số lượng</td>';
			echo'<td>Chỉnh sửa thực đơn</td>';
			echo'<td>Thành tiền</td>';
			echo'</tr>';

	//them sp
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$id=$_GET['add'];
		$_SESSION['cart_'.$id]+=1;
		header('location:index.php?xem=giohang');
	}
	//cong san pham
	if(isset($_GET['them'])){
		$_SESSION['cart_'.$_GET['them']]+=1;
		header('location:index.php?xem=giohang');
	}
	//tru san pham
	if(isset($_GET['tru'])){
		$_SESSION['cart_'.$_GET['tru']]--;
		header('location:index.php?xem=giohang');
	}
	//Xoa san pham
	if(isset($_GET['xoa'])){
		$_SESSION['cart_'.$_GET['xoa']]=0;
		@header('location:index.php?xem=giohang');
	}
	//hien thi sp da them
	
	$thanhtien1=0;
	foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name,0,5)=='cart_'){
				$id=substr($name,5,strlen($name-5));
				$sql="select * from chitietsp where id_sp='".$id."'";
				$query=sqlsrv_query($conn,$sql);
				while($dong=sqlsrv_fetch_array($query)){
					$tongtien1=0;
					$tongtien1=$dong['gia']*$value;
					echo '<tr>';
					echo '<td>'.$dong['tensp'].'</td>';
					echo'<td><img src="img/'.$dong['hinhanh'].'" width="100" height="100" /></td>';
					echo '<td>'.$dong['gia'].'</td>';
					echo '<td>'.$value.'</td>';
					echo'<td><a href="index.php?xem=giohang&them='.$id.'">[Thêm]</a><a href="index.php?xem=giohang&tru='.$id.'">[giảm]</a><a href="index.php?xem=giohang&xoa='.$id.'">[xóa]</a><br/></td>';
					echo '<td>'.$tongtien1.' '.'VNĐ'.'</td>';
					$thanhtien1+=$tongtien1;	
				}
			}
			
		}
		}
		$thanhtien2=0;
		foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name,0,5)=='cart_'){
				$id=substr($name,5,strlen($name-5));
				$sql="select * from chitietlk where id_lk='".$id."'";
				$query=sqlsrv_query($conn,$sql);
				while($dong=sqlsrv_fetch_array($query)){
					$tongtien2=0;
					$tongtien2=$dong['gia']*$value;
					echo '<tr>';
					echo '<td>'.$dong['tenlk'].'</td>';
					echo'<td><img src="img/'.$dong['hinhanh'].'" width="100" height="100" /></td>';
					echo '<td>'.$dong['gia'].'</td>';
					echo '<td>'.$value.'</td>';
					echo'<td><a href="index.php?xem=giohang&them='.$id.'">[Thêm]</a><a href="index.php?xem=giohang&tru='.$id.'">[Giảm]</a><a href="index.php?xem=giohang&xoa='.$id.'">[Xóa]</a><br/></td>';
					echo '<td>'.$tongtien2.' '.'VNĐ'.'</td>';	
					$thanhtien2+=$tongtien2;
				}
			}	
		}
		}
		$tongthanhtien=$thanhtien1+$thanhtien2;
		if($tongthanhtien==0){
			echo 'giỏ hàng trống';
		}else{
			echo 'Tổng tiền='.$tongthanhtien.' '.'VNĐ';
		}
?>
               </tr>
         </table>
         <p align="right"><a href="index.php?xem=thongtinkh" style="text-decoration:none; color:#0C0"><b>Thanh toán</b></a></p>
    </div>


