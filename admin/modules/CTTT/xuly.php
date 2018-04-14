<?php
	include('../config.php');
	$id = $_GET['id'];
	$tieude=$_POST['txttieude'];
	$noidung=$_POST['txtnoidung'];
	$hinhanh=$_FILES['txthinh']['name'];
	$hinhanh_tmp=$_FILES['txthinh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$loaitt=$_POST['txtloaitt'];
	$gioithieu=$_POST['txtgioithieu'];
	
	if(isset($_POST['them'])){
                   if (!$tieude || !$noidung || !$gioithieu)
			 {
					echo'<script> alert("Vui lòng nh?p d?y d? thông tin")</script>';
					?>
						<script type="text/javascript">
							window.location='../../index.php?quanly=CTTT&ac=them';
						</script>
						<?php	
					exit;
			 }
		 $sql_them=("insert into tintuc (TieuDe,NoiDung,HinhAnh,ID_TT,GioiThieu) values('$tieude','$noidung','$hinhanh','$loaitt','$gioithieu')");
	mysqli_query( $Dbconnect,$sql_them);
		header('location:../../index.php?quanly=CTTT&ac=them');
	}elseif(isset($_POST['sua'])){
	if($hinhanh !=''){
           if (!$tieude || !$noidung || !$gioithieu)
			 {
					echo'<script> alert("Vui lòng nh?p d?y d? thông tin")</script>';
					?>
						<script type="text/javascript">
							window.location='../../index.php?quanly=CTTT&ac=sua';
						</script>
						<?php	
					exit;
			 }
	   $sql_sua = "update tintuc set TieuDe='$tieude',NoiDung='$noidung',HinhAnh='$hinhanh',ID_TT='$loaitt',GioiThieu='$gioithieu' where ID_tintuc = $id";
	 }
         else
	 {
	   $sql_sua = "update tintuc set TieuDe='$tieude',NoiDung='$noidung',ID_TT='$loaitt',GioiThieu='$gioithieu' where ID_tintuc = $id";
	 }
		mysqli_query( $Dbconnect,$sql_sua);
		header('location:../../index.php?quanly=CTTT&ac=sua&id='.$id);
	 }
         else
         {
		$sql_xoa = "delete from tintuc where ID_tintuc = $id";
		mysqli_query($Dbconnect,$sql_xoa);
		header('location:../../index.php?quanly=CTTT&ac=them');
	 }
?>