<?php
	$sql_chitiet="select * from chitietlk where id_loailk='$_GET[id]'";
	$query=sqlsrv_query($conn,$sql_chitiet);
?>
<?php
	$sql_loailk="select * from loailk where id_loailk='$_GET[id]'";
	$query_loailk=sqlsrv_query($conn,$sql_loailk);
	$dong_loailk=sqlsrv_fetch_array($query_loailk);
?>
<p style="text-align:center;color:white;background:#090;padding:10px; text-transform:uppercase"><b><?php echo $dong_loailk['tenloailk'] ?></b></p>
            <div class="linhkienall">
            	<ul>
                <?php
				while($dong_chitiet=sqlsrv_fetch_array($query)){
				?>
                	<li><a href="index.php?xem=chitietlinhkien&id=<?php echo $dong_chitiet['id_lk'] ?>">
                    	<img src="admincp/modules/quanlychitietlk/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="150" height="100" />
                    	<p style="color:black"><?php echo $dong_chitiet['tenlk'] ?></p>
                        <p style="color:#0C0"><?php echo $dong_chitiet['gia'] ?> <?php echo "VNĐ" ?></p>
                        <p style="color:#999;">Đặt món</p>
                    </a></li>
                <?php
				}
				?>
         		</ul>
           </div>