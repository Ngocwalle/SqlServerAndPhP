<?php
	$sql_chitietlk="select * from chitietlk where id_lk=$_GET[id]";
	$query_chitietlk=sqlsrv_query($conn,$sql_chitietlk);
	$dong_chitietlk=sqlsrv_fetch_array($query_chitietlk);
?>
<table width="600" height="400" tyle="border-collapse:collapse" style="float:left; text-transform:uppercase">
  <tr>
   <td bgcolor="#0066CC" style="color:#FFF"><div align="center"><?php echo $dong_chitietlk['tenlk'] ?></div></td>
  </tr>
  <tr>
    <td bgcolor="white"><img src="admincp/modules/quanlychitietlk/uploads/<?php echo $dong_chitietlk['hinhanh'] ?>" width="100%" height="100%" /></td>
</table>
<table width="350" height="auto" style="float:left; margin-left:20px; margin-top:5px; text-transform:uppercase; line-height:40px"
   <tr>
    <td>Tên thức uống:<p style="color:black"><?php echo $dong_chitietlk['tenlk'] ?></p>
    				<p style="color:#0F0">Giá thức uống:<?php echo $dong_chitietlk['gia']?> <?php echo "VNĐ" ?></p>
  					<a href="index.php?xem=giohang&add=<?php echo $dong_chitietlk['id_lk'] ?>"><img src="img/mua.PNG" width="150" height="40" style="float:left; border-radius:15px"/></a>
  	</td>
  </tr>
</table>

