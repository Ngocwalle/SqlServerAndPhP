<?php
	$sql="select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc";
	$run=sqlsrv_query($conn,$sql);
?>
<table width="100%" height="auto" border="1">
  <tr>
    <td width="6%"><div align="center">Thứ tự</div></td>
    <td width="24%"><div align="center">Tên thức ăn</div></td>
    <td width="21%"><div align="center">Hình ảnh</div></td>
    <td width="7%"><div align="center">Giá</div></td>
    <td width="20%"><div align="center">Loại thức ăn</div></td>
    <td width="6%"><div align="center">ID</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
 <?php
 	$i=0;
 	while($dong=sqlsrv_fetch_array($run)){
 ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><div align="center"><?php echo $dong['tensp']; ?></div></td>
    <td><div align="center"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="60">
    </div>
      <p align="center"></p>
    </td>
    <td><div align="center"><?php echo $dong['gia']; ?></div></td>
    <td><div align="center"><?php echo $dong['tenloaisp']; ?></div></td>
    <td><div align="center"><?php echo $dong['ma_ct_sp']; ?></div></td>
    <td width="8%"><div align="center"><a href="welcome.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>">Sửa</a></div></td>
    <td width="8%"><div align="center"><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>">Xóa</a></div></td>
  </tr>
 <?php
 	$i++;
	}
 ?>
</table>
