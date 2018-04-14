<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam = $_GET['ac'];
	}else{
		$tam = '';
	}if($tam == 'them'){
		include('modules/CTTT/them.php');
	}elseif($tam == 'sua'){
		include('modules/CTTT/sua.php');
	}
	?>
</div>
<div class="right">
	<?php
		include('modules/CTTT/lietke.php');
	?>
</div>