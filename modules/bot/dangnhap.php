<?php
ob_start();
	if(session_status() == PHP_SESSION_NONE){
		session_start();		
	}
?>
<?php
if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau =$_POST['matkhau'];
		$sql ="select * from khachhang where tentk = '$taikhoan' and pass = '$matkhau' limit 1 ";
		$run = mysqli_query($Dbconnect,$sql);
		$dangnhap = mysqli_num_rows($run);//if dang nhap dung run se chay dang nhap tang len 1
		if($dangnhap == 0){
			echo "<script>alert('Nhập lại tài khoản hoặc mật khẩu')</script>";
		}
		else{			
			$_SESSION['dangnhap'] = $taikhoan;		
			?>
            <script type="text/javascript">
				window.location='index.php?xem=thongbao';
			</script>
            <?php
			ob_flush();
			
		}
	}
?>
<div class="tongdn">
       <div class="dangnhap"><h3 align="center">Đăng Nhập</h3></div>
 	<div class="fish" id="fish"></div>
	<div class="fish" id="fish2"></div>
    <div class="box_dn">
        <form action="" method="post" enctype="multipart/form-data">
        
        <div class="formgroup1" style="color:#09C">
            <label for="name" >Tài Khoản*</label>
            <input type="text" name="taikhoan" id="taikhoan">
        </div>
        
        <div class="formgroup1" style="color:#09C">
            <label for="email">Mật Khẩu*</label>
            <input type="password" name="matkhau" id="matkhau">
        </div>
        <div class="sub_dn">
        	 <input type="submit" name="dangnhap" id="dangnhap" value="Đăng Nhập">
        </div>
        </form>
	</div>
</div>
