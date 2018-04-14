<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam = $_GET['ac'];
	}else{
		$tam = '';
	}if($tam == 'them'){
		include('modules/tintuc/them.php');
	}elseif($tam == 'sua'){
		include('modules/tintuc/sua.php');
	}
	?>
</div>
<div class="right">
	<?php
		include('modules/tintuc/lietke.php');
	?>
</div>