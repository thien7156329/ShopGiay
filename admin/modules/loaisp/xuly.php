<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
	include('../config.php');
	$id = $_GET['id'];
	$tenloaisp=$_POST['txtloaisp'];
        
	if(isset($_POST['them'])){     
                 if (!$tenloaisp)
			 {
					echo'<script> alert("Vui lòng nhập đầy đủ thông tin")</script>';
					?>
						<script type="text/javascript">
							window.location='../../index.php?quanly=loaisp&ac=them';
						</script>
						<?php	
					exit;
			 }
                 $sql_them=("insert into loaisp (tenloaisp) values('$tenloaisp')");
                 mysqli_query( $Dbconnect,$sql_them);
                 header('location:../../index.php?quanly=loaisp&ac=them');

	}elseif(isset($_POST['sua'])){
                if (!$tenloaisp)
			 {
					echo'<script> alert("Vui lòng nhập đầy đủ thông tin")</script>';
					?>
						<script type="text/javascript">
							window.location='../../index.php?quanly=loaisp&ac=them';
						</script>
						<?php	
					exit;
			 }
		$sql_sua="update loaisp set tenloaisp = '$tenloaisp' where ID = '$id'";
		mysqli_query( $Dbconnect,$sql_sua);
		header('location:../../index.php?quanly=loaisp&ac=sua&id='.$id);
                
	}else{
               
		$sql_xoa = "delete from loaisp where ID = $id";
		mysqli_query($Dbconnect,$sql_xoa);
		header('location:../../index.php?quanly=loaisp&ac=them');
	}
?>
