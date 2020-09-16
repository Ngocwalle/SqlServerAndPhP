<?php
  //include('../config.php');
  $sql="select * from loaisp order by id_loaisp desc";
  $params = array();
  $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$run=sqlsrv_query($conn,$sql,$params,$options);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên loại thức ăn</div></td>
    <td><div align="center">Mã loại sản phẩm</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  $i=0;
  while($dong=sqlsrv_fetch_array($run)){
  ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><div align="center"><?php echo $dong['tenloaisp'] ?></div></td>
    <td><div align="center"><?php echo $dong['maloaisp'] ?></div></td>
    <td><div align="center"><a href="welcome.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
