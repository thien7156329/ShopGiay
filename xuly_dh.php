<?php
	session_start();
	include('admin/modules/config.php');
	//
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION['dangnhap']);
		header('location:index.php?xem=muahang');
	}
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['sanpham'] as $giohang){
			if($id!=$giohang['id']){
				
				$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$giohang['soluong'],'gia'=>$giohang['gia']);
				$_SESSION['sanpham']=$sanpham;
			}else{
				$giam=$giohang['soluong']-1;
                                if(($giohang['soluong']-1) < 1){
                                        echo'<script> alert("S? Lu?ng s?n ph?m không du?c nh? hon 1")</script>';
					?>
						<script type="text/javascript">
							window.location='../shopgiay/index.php?xem=muahang';
						</script>
						<?php	
					exit;
                                }
				if($giohang['soluong']>1){
				$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$giam,'gia'=>$giohang['gia']);
				
				}else{
					$giam=1;
					$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$giam,'gia'=>$giohang['gia']);
				}
				$_SESSION['sanpham']=$sanpham;
			}

			header('location:index.php?xem=muahang');
		}
		
	}
	//cong them sp
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['sanpham'] as $giohang){
			if($id!=$giohang['id']){
				
				$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$giohang['soluong'],'gia'=>$giohang['gia']);
				$_SESSION['sanpham']=$sanpham;
			}else{
				$tang=$giohang['soluong']+1;
                                if(($giohang['soluong']+1)>10){
                                        echo'<script> alert("S? Lu?ng s?n ph?m không du?c l?n hon 10")</script>';
					?>
						<script type="text/javascript">
							window.location='../shopgiay/index.php?xem=muahang';
						</script>
						<?php	
					exit;
                                }
				if($giohang['soluong'] <10){
				
				$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$tang,'gia'=>$giohang['gia']);
				
			}else{
				
				$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$giohang['soluong'],'gia'=>$giohang['gia']);
			}
			$_SESSION['sanpham']=$sanpham;
			}
			
			header('location:index.php?xem=muahang');
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['sanpham'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['sanpham'] as $giohang){
			if($giohang['id']!= $id){
				$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$giohang['soluong'],'gia'=>$giohang['gia']);
			}
		$_SESSION['sanpham']=$sanpham;
		header('location:index.php?xem=muahang');
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:index.php?xem=muahang');
	}
	//them giohang
	if(isset($_POST['them_giohang'])){
		$id=$_GET['id'];
		$soluong=$_POST['soluong'];
		$soluong = 1;
		$sql="select * from sanpham where ID_sp='$id' limit 1";
		$row=mysqli_query($Dbconnect,$sql);
		$dong=mysqli_fetch_array($row);
		if($dong){
			
			$new_sanpham=array(array('tensp'=>$dong['tensp'],'id'=>$id,'soluong'=>$soluong,'gia'=>$dong['giasp']));
			if(isset($_SESSION['sanpham'])){
				$found=false;
				foreach($_SESSION['sanpham'] as $giohang){
					if($giohang['id'] == $id){
						
						$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$soluong,'gia'=>$giohang['gia']);
						$found=true;
					}else{
						$sanpham[]=array('tensp'=>$giohang['tensp'],'id'=>$giohang['id'],'soluong'=>$giohang['soluong'],'gia'=>$giohang['gia']);
					}
					
				}if($found==false){
					$_SESSION['sanpham']=array_merge($sanpham,$new_sanpham);
				}else{
					$_SESSION['sanpham']=$sanpham;
				}
			}else{
				$_SESSION['sanpham']=$new_sanpham;
			}
		}
		header('location:index.php?xem=muahang');
	}
?>

