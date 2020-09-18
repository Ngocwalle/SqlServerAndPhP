<?php
  //include('../config.php');
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
  $sql="select * from loaisp order by id_loaisp OFFSET $trg1 ROWS FETCH NEXT 5 ROWS ONLY";
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
Trang:
					<?php
                        $params = array();
                        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
						$sql_trang=sqlsrv_query($conn,"select * from loaisp",$params,$options);
						$count=sqlsrv_num_rows($sql_trang);
						$t1=ceil($count/5);
						for($a=1;$a<=$t1;$a++){
							echo '<a href="welcome.php?trangsp='.$a.'" style="text-decoration:none">'.' '.$a.' '.'</a>';
						}
					?>
                    <p>
                    <?php
					if($g_trangsp >=1){
					echo 'Bạn đang ở trang:'.$g_trangsp;
					}
					?></p>