<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>

<?php
	error_reporting(E_ALL);
	if(isset($_POST['dangky'])){
		$hoten=$_POST['hoten'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$pass=$_POST['matkhau'];
		$dienthoai=$_POST['dienthoai'];
		    if (!$hoten || !$pass || !$email || !$dienthoai || !$diachi)
			 {
					echo'<script> alert("Vui lòng nhập đầy đủ thông tin")</script>';
					?>
						<script type="text/javascript">
							window.location='index.php?xem=dangky';
						</script>
						<?php	
					exit;
			 }
			 if(mysqli_num_rows(mysqli_query($Dbconnect,"SELECT tentk FROM khachhang WHERE tentk='$hoten'")) > 0){
				echo'<script> alert("Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác")</script>';
					?>
						<script type="text/javascript">
							window.location='index.php?xem=dangky';
						</script>
						<?php	
					exit;
			}
				  
		
			if (mysqli_num_rows(mysqli_query($Dbconnect,"select email from khachhang where email='$email'")) > 0)
			{
				echo'<script> alert("Email này đã có người dùng. Vui lòng chọn Email khác")</script>';
					?>
						<script type="text/javascript">
							window.location='index.php?xem=dangky';
						</script>
						<?php	
					exit;
			}
			$sql_dangky ="insert into khachhang (tentk,pass,email,diachi,sdt)          value('$hoten','$pass','$email','$diachi','$dienthoai')";
		$run_query = mysqli_query($Dbconnect,$sql_dangky);  
		if($run_query){
		ob_start();
		echo'<script> alert("đăng thành công")</script>';
			?>
            <script type="text/javascript">
				window.location='index.php';
			</script>
            <?php
		ob_flush();
		}
	else{
		;
		?>
            <script type="text/javascript">
				window.location='index.php?xem=dangky';
			</script>
            <?php	
	}
}

?>

<div class="dk">
<div id="form_dk">
	<h3 align="center">Đăng Ký Thành Viên</h3>


<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>
<div class="fish" id="fish3"></div>

<div class="fish" id="fish4"></div>

<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<div class="box_big">


<div class="formgroup">
    <label for="name">Tài Khoản*</label>
    <input type="text" name="hoten" />
</div>

<div class="formgroup" >
    <label for="name">Mật Khẩu*</label>
    <input type="password" name="matkhau">
</div>
<div class="formgroup" >
    <label for="email">Email*</label>
   <input type="email" name="email">
</div>
<div class="formgroup" >
    <label for="tel">Số Điện Thoại*</label>
    <input type="tel" name="dienthoai">
</div>
<div class="formgroup" >
    <label for="text">Địa Chỉ*</label>
    <input type="text" name="diachi">
</div>
	 <input type="submit" value="Đăng Ký!" name="dangky"/>

</div>
</form>
</div>
</div>



</body>
</html>
