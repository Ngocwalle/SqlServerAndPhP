<?php
  if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
?>
<table width="100%">
	<tr>
    	<td>
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
                $sql_all="SELECT * FROM chitietsp ORDER BY id_sp OFFSET $trg1 ROWS FETCH NEXT 5 ROWS ONLY";
                $params = array();
                $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                $query_all=sqlsrv_query($conn,$sql_all,$params,$options);
            ?>        	
                        <p style="text-align:center;color:#0F0;padding:10px;text-transform:uppercase;"><b>Thức ăn</b></p>
                        <hr color="#FF9900" />
                        <div class="dongxeall">
                            <ul>
                             <?php
                                while($dong_all=sqlsrv_fetch_array($query_all)){
                            ?>
                                <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['id_sp'] ?>">
                                    <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?>" width="150" height="100" />
                                    <p style="color:black;"><?php echo $dong_all['tensp'] ?></p>
                                    <p style="color:#0C0;"><?php echo currency_format($dong_all['gia']) ?> <?php echo "VNĐ" ?></p>
                                    <p style="color:#999;">Đặt món</p>
                                </a></li>
                            <?php
                            }
                            ?>
                            </ul>
                        </div>
                        <p style="clear:both">
                    </p>
                    Trang:
					<?php
                        $params = array();
                        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
						$sql_trang=sqlsrv_query($conn,"select * from chitietsp",$params,$options);
						$count=sqlsrv_num_rows($sql_trang);
						$t1=ceil($count/5);
						for($a=1;$a<=$t1;$a++){
							echo '<a href="index.php?trangsp='.$a.'" style="text-decoration:none">'.' '.$a.' '.'</a>';
						}
					?>
                    <p>
                    <?php
					if($g_trangsp >=1){
					echo 'Bạn đang ở trang:'.$g_trangsp;
					}
					?></p>
              </td>
              
       </tr>

<tr>
	<td>
		<?php
		if(isset($_GET['tranglk'])){
					$g_tranglk=$_GET['tranglk'];
				}else{
					$g_tranglk='';
				}
				if($g_tranglk=='' || $g_tranglk==1){
					$trg=0;
				}else{
					$trg=($g_tranglk*5)-5;
				}
                $sql_all="SELECT * FROM chitietlk ORDER BY id_lk OFFSET $trg ROWS FETCH NEXT 5 ROWS ONLY";
                $query_all=sqlsrv_query($conn,$sql_all);
        ?>     
                <p style="text-align:center;color:#0F0;padding:10px;text-transform:uppercase;"><b>Thức uống</b></p>
                <hr color="#FF9900" />	
                 <div class="linhkienall">
                        <ul>
                         <?php
                        while($dong_all=sqlsrv_fetch_array($query_all)){
                        ?>
                            <li><a href="index.php?xem=chitietlinhkien&id=<?php echo $dong_all['id_lk'] ?>">
                                <img src="admincp/modules/quanlychitietlk/uploads/<?php echo $dong_all['hinhanh'] ?>" width="150" height="100" />
                                <p style="color:black;"><?php echo $dong_all['tenlk'] ?></p>
                                <p style="color:#0C0;"><?php echo currency_format($dong_all['gia']) ?> <?php echo "VNĐ" ?></p>
                                <p style="color:#999;">Đặt món</p>
                            </a></li>
                        <?php
                        }
                        ?>
                        </ul>
                    </div>
                    <p style="clear:both">
                    </p>
                    Trang:
					<?php
                        $params = array();
                        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
						$sql_trang=sqlsrv_query($conn,"select * from chitietlk",$params,$options);
						$count1=sqlsrv_num_rows($sql_trang);
						$t2=ceil($count1/5);
						for($b=1;$b<=$t2;$b++){
							echo '<a href="index.php?tranglk='.$b.'" style="text-decoration:none">'.' '.$b.' '.'</a>';
						}
					?>
                    <p>
                    <?php
					if($g_tranglk >=1){
					echo 'Bạn đang ở trang:'.$g_tranglk;
					}
					?></p>
        		</td>
                
        </tr>
        
</table>
					