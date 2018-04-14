<div class="boss2">   
 	      	   
			<?php
                if(isset($_GET['xem'])){
                        $tam= $_GET['xem'];
                    }else{
                        $tam ='';
                    }if($tam == 'loaisp'){	
						include('modules/top/left3.php');			
                        include('modules/bot/loaisp.php');
                    }elseif($tam == 'tatcasp'){		
						include('modules/top/left1.php');		
                        include('modules/bot/tatcasp.php');
					
                    }elseif($tam == 'dangky'){							
                        include('modules/bot/dangky.php');				
                    }elseif($tam == 'tatcatintuc'){	
			?>			
						<div class="main">
        					<div class="container">
            					<div class="row">
            <?php
						include('modules/top/left_tt.php');					
                        include('modules/bot/tatcatintuc.php');	
			?>
						</div> </div> </div>
            <?php	
                    }elseif($tam == 'chitiettt'){							
                        include('modules/bot/chitiettt.php');				
                    }elseif($tam == 'CTTT'){							
                        include('modules/bot/CTTT.php');				
                    }elseif($tam == 'gioithieu'){							
                        include('modules/bot/gioithieu.php');				
                    }elseif($tam == 'lienhe'){							
                        include('modules/bot/lienhe.php');				
                    }elseif($tam == 'tintuc'){							
                        include('modules/bot/tintuc.php');				
                    }elseif($tam == 'thongbao'){	
						include('modules/top/left.php');			
                        include('modules/bot/thongbao.php');
                    }elseif($tam == 'chitietsp'){
						include('modules/top/left2.php');	
								
                        include('modules/bot/chitietsp.php');
						
                    }elseif(isset($_POST['search'])){	
						include('modules/top/left.php');			
                        include('modules/bot/search.php');
                    }elseif($tam == 'update_cart'){				
                        include('modules/bot/update_cart.php');
                    }elseif($tam == 'muahang'){				
                        include('modules/bot/muahang.php');
                    }elseif($tam == 'dangnhap'){
					
									
                        include('modules/bot/dangnhap.php');
					
                    }elseif($tam == 'thanhtoan'){				
                        include('modules/bot/thanhtoan.php');
                    }else{					 	
                 		include('modules/top/left.php');
                                        
                        include('modules/bot/right.php');
                        echo "<div class='clear' ></div>";
						include('modules/bot/quangcao_sp.php');
						
									
                    }
            ?>
        
    
    
</div>