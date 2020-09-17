<div class="content">
 	<div class="left">
		<?php
            include('modules/left/danhsach.php');
        ?>
 	</div>
    <div class="right">
    	<?php
            if(isset($_GET['xem'])){
				$tam=$_GET['xem'];
			}else{
				$tam='';
			}if($tam=='chitietloaisanpham'){
				include('modules/right/chitietloaisanpham.php');
			}elseif($tam=='chitietsanpham'){
				include('modules/right/chitietsanpham.php');
			}elseif($tam=='chitietloailinhkien'){
				include('modules/right/chitietloailinhkien.php');
			}elseif($tam=='chitietlinhkien'){
				include('modules/right/chitietlinhkien.php');
			}elseif($tam=='lienhe'){
				include('modules/right/lienhe.php');
			}elseif($tam=='giohang'){
				include('modules/right/cart.php');
			}elseif($tam=='thongtinkh'){
				include('modules/right/thongtinkh.php');
			}elseif($tam=='gioithieu'){
				include('modules/right/gioithieu.php');
			}elseif($tam=='lienhe'){
				include('modules/right/lienhe.php');
			}elseif($tam=='chinhsach'){
				include('modules/right/chinhsach.php');
			}elseif($tam=='tuyendung'){
				include('modules/right/tuyendung.php');
			}else{
				include('modules/right/tatcasanpham.php');
			}
        ?>
    </div>
</div>
<div class="clear"></div>