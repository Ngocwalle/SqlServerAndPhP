<div class="content">

	<?php
	if(isset($_GET['quanly'])){
		$tam=$_GET['quanly'];
	}else{
		$tam='';
	}if($tam=='quanlyloaisp'){
		include('modules/quanlyloaisp/main.php');
	}elseif($tam=='quanlychitietsp'){
		include('modules/quanlychitietsp/main.php');
	}elseif($tam=='trangchu'){
		include('modules/trangchu.php');
	}else{
        include('modules/quanlyloaisp/main.php');
    }
	?>
</div>
<div class="clear"></div>
