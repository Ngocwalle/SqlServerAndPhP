<?php
	$sql="select * from loaisp where id_loaisp=$_GET[id]";
	$run=sqlsrv_query($conn,$sql);
	$dong=sqlsrv_fetch_array($run);
?>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>" method="post" enctype="multipart/form-data">
<table >
  <tr>
    <td colspan="2"><div align="center"><b>Sửa loại thức ăn</b></div></td>
  </tr>
  <tr>
    <td width="11%">Tên loại thức ăn</td>
    <td width="89%"><input type="text" name="tenloaisp" value="<?php echo $dong['tenloaisp'] ?>"></td>
  </tr>
  <tr>
    <td>Mã loại sản phẩm</td>
    <td><input type="text" name="maloaisp" value="<?php echo $dong['maloaisp'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>
