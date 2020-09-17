<?php
	$sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
	$query=sqlsrv_query($conn,$sql_chitiet);
?>
<?php
	$sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
	$query_loaisp=sqlsrv_query($conn,$sql_loaisp);
	$dong_loaisp=sqlsrv_fetch_array($query_loaisp);
?>
<p style="text-align:center;color:white;background:#090;padding:10px; text-transform:uppercase"><b><?php echo $dong_loaisp['tenloaisp'] ?></b></p>
            <div class="dongxeall">
            	<ul>
                <?php
				while($dong_chitiet=sqlsrv_fetch_array($query)){
				?>	
                	<li><a href="index.php?xem=chitietsanpham&id=<?php   echo $dong_chitiet['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="150" height="100" />
                    	<p style="color:black;"><?php echo $dong_chitiet['tensp'] ?></p>
                        <p style="color:#0C0;"><?php echo $dong_chitiet['gia'] ?> <?php echo "VNĐ" ?></p>
                        <p style="color:#999;">Đặt món</p>
                    </a></li>
                <?php
				}
				?>
         		</ul>
           </div>