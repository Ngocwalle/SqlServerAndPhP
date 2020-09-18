<?php
  if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
?>
<?php
  if(isset($_GET['trangsp'])){
    $g_trangsp=$_GET['trangsp'];
  }else{
    $g_trangsp='';
  }
  if($g_trangsp=='' || $g_trangsp==1){
    $trg1=0;
  }else{
    $trg1=($g_trangsp*6)-6;
  }
	$sql="select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp OFFSET $trg1 ROWS FETCH NEXT 5 ROWS ONLY";
	$run=sqlsrv_query($conn,$sql);
?>
<table width="100%" height="auto" border="1">
  <tr>
    <td width="6%"><div align="center">Thứ tự</div></td>
    <td width="24%"><div align="center">Tên thức ăn</div></td>
    <td width="21%"><div align="center">Hình ảnh</div></td>
    <td width="7%"><div align="center">Giá</div></td>
    <td width="20%"><div align="center">Loại thức ăn</div></td>
    <td width="6%"><div align="center">Mã sản phẩm</div></td>
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
    <td><div align="center"><?php echo currency_format($dong['gia']); ?></div></td>
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
</p>
                    Trang:
					<?php
                        $params = array();
                        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
						$sql_trang=sqlsrv_query($conn,"select * from chitietsp",$params,$options);
						$count=sqlsrv_num_rows($sql_trang);
						$t1=ceil($count/5);
						for($a=1;$a<=$t1;$a++){
							echo '<a href="welcome.php?quanly=quanlychitietsp&ac=them?trangsp='.$a.'" style="text-decoration:none">'.' '.$a.' '.'</a>';
						}
					?>
                    <p>
                    <?php
					if($g_trangsp >=1){
					echo 'Bạn đang ở trang:'.$g_trangsp;
					}
					?></p>
