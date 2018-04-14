
 <div class="boss2">    
       <div class="content">
        
    <?php
		if(isset($_GET['quanly'])){
			$tam = $_GET['quanly'];
		}else{
			$tam = '';
		}if($tam == 'loaisp'){
			include('modules/loaisp/main.php');
		}
		elseif($tam == 'quanlysp'){
			include('modules/quanlysp/main.php');
		}
		elseif($tam == 'tintuc'){
			include('modules/tintuc/main.php');
		}
		elseif($tam == 'CTTT'){
			include('modules/CTTT/main.php');
		}else{
			include('modules/welcome/welcome.php');
		}
	?>
      	 </div>   
 </div><!-- DONG BOSS 2 -->