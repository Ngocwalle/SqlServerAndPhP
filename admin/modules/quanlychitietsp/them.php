<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td colspan="2"><div align="center"><b>Thêm chi tiết sản phẩm</b></div></td>
  </tr>
  <tr>
    <td width="9%">Tên sản phẩm</td>
    <td width="91%"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <?php
  $sql="select * from loaisp";
  $run=sqlsrv_query($conn,$sql);
  ?>
  <tr>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
    <?php
	while($dong=sqlsrv_fetch_array($run)){
	?>
    	<option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp'] ?></option>
        <?php
	}
		?>
    	</select></td>
  </tr>
  <tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" name="ma_ct_sp"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm">Thêm</button>
    </div></td>
  </tr>
</table>
</form>
