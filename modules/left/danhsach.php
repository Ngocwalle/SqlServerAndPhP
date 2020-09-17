<?php
	$sql_loaisp="select * from loaisp";
	$query=sqlsrv_query($conn,$sql_loaisp);
?>        	
            <p style="text-align:center;color:white;background:#3C3;padding:10px;">Thức ăn</p>
            <div class="danhsachsanpham">
            	<ul>
                <?php
				while($dong_sp=sqlsrv_fetch_array($query)){
				?>
                	<li style="background: #ffe5e5;color:black;"><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?></a></li>
                  <?php
					}
				  ?>
                </ul>
            </div><!--ket thuc Hangxe-->
<?php
	$sql_loailk="select * from loailk";
	$query=sqlsrv_query($conn,$sql_loailk);
?> 
          	<p style="text-align:center;color:white;background:#3C3;padding:10px;">Thức uống</p>
            <div class="danhsachlinhkien">
            	<ul>
                	 <?php
				while($dong_lk=sqlsrv_fetch_array($query)){
				?>
                	<li style="background: #ffe5e5;color:black;"><a href="index.php?xem=chitietloailinhkien&id=<?php echo $dong_lk['id_loailk'] ?>"><?php echo $dong_lk['tenloailk'] ?></a></li>
                  <?php
					}
				  ?>
                </ul>
            </div><!--ket thuc linhkien-->