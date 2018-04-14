<?php
	include('../../admin/modules/config.php');
		@session_start();
		
		$name=$_SESSION['dangnhap'];
		$themdh = mysqli_query($Dbconnect,"insert into chitietdh (tendh)values('".$name."')");
		$ketqua = mysqli_query($Dbconnect,$themdh);
		if($ketqua){
		for($i = 0;$i < count($_SESSION['giohang']);$i++){
			$max=mysqli_query($Dbconnect,"select max(id) from hoadon");
				$row=mysqli_fetch_array($max);
				
				$ID_DH=$row[0];
				$ID_SP=$_SESSION['giohang'][$i]['ID_SP'];
				$soluong=$_SESSION['giohang'][$i]['soluong'];
				
				$gia=$_SESSION['giohang'][$i]['thanhtien'];
				
				 $insert_chitietdh="insert into chitietdh (ID_DH,ID_SP,soluong,thanhtien) values('".$ID_DH."','".$ID_SP."','".$soluong."','".$gia."');";
				 $cart_detail=mysqli_query($Dbconnect,$insert_chitietdh);
		
			}
			
		}	
			unset($_SESSION['giohang']);
			
			header('location:index.php');

		
		
?>