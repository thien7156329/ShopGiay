<?php
	include('../config.php');
	$id = $_GET['id'];
	$tensp=$_POST['txttensp'];
	$motasp=$_POST['txtmotasp'];
	$giasp=$_POST['txtgia'];
	$hinhanh=$_FILES['txthinh']['name'];
	$hinhanh_tmp=$_FILES['txthinh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$loaisp=$_POST['txtloaisp'];
	$idsp=$_POST['txtidsp'];
	
	
	if(isset($_POST['them'])){
                 if (!$tensp || !$motasp || !$giasp)
			 {
					echo'<script> alert("Vui lòng nh?p d?y d? thông tin")</script>';
					?>
						<script type="text/javascript">
							window.location='../../index.php?quanly=quanlysp&ac=them';
						</script>
						<?php	
					exit;
			 }
                 $sql_them=("insert into loaisp (tenloaisp) values('$tenloaisp')");
                 mysqli_query( $Dbconnect,$sql_them);
                 header('location:../../index.php?quanly=quanlysp&ac=them');

		 $sql_them=("insert into sanpham (tensp,motasp,giasp,hinh,loaisp,soluong) values('$tensp','$motasp','$giasp','$hinhanh','$loaisp','$idsp')");
	mysqli_query( $Dbconnect,$sql_them);
		header('location:../../index.php?quanly=quanlysp&ac=them');
	}elseif(isset($_POST['sua'])){
         if (!$tensp || !$motasp || !$giasp )
			 {
					echo'<script> alert("Vui lòng nh?p d?y d? thông tin")</script>';
					?>
						<script type="text/javascript">
							window.location='../../index.php?quanly=quanlysp&ac=them';
						</script>
						<?php	
					exit;
			 }
	if($hinhanh !=''){
	  $sql_sua = "update sanpham set tensp='$tensp',motasp='$motasp',giasp='$giasp',hinh='$hinhanh',loaisp='$loaisp',soluong='$idsp' where ID_sp = $id";
	}else
	{
	  $sql_sua = "update sanpham set tensp='$tensp',motasp='$motasp',giasp='$giasp',loaisp='$loaisp',soluong='$idsp' where ID_sp = $id";
	}
		mysqli_query( $Dbconnect,$sql_sua);
		header('location:../../index.php?quanly=quanlysp&ac=sua&id='.$id);
	}else{
		$sql_xoa = "delete from sanpham where ID_sp = $id";
		mysqli_query($Dbconnect,$sql_xoa);
		header('location:../../index.php?quanly=quanlysp&ac=them');
	}
?>