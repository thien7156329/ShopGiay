<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam = $_GET['ac'];
	}else{
		$tam = '';
	}if($tam == 'them'){
		include('modules/loaisp/them.php');
	}elseif($tam == 'sua'){
		include('modules/loaisp/sua.php');
	}
	?>
</div>
<div class="right">
	<?php
		include('modules/loaisp/lietke.php');
	?>
</div>