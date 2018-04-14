<!--
	session_start();
	if(isset($_SESSION['dangnhap'])){
		header('location:index.php?xem=giohang');
	}
	else{
		header('location:index.php?xem=dangnhap');
	
		if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau =$_POST['matkhau'];
		$sql ="select * from dangky where hoten = '$taikhoan' and pass = '$matkhau' limit 1 ";
		$run = mysqli_query($Dbconnect,$sql);
		$dangnhap = mysqli_num_rows($run);//if dang nhap dung run se chay dang nhap tang len 1
		if($dangnhap == 0){
			echo "<script>alert('Nhập lại tài khoản hoặc mật khẩu')</script>";
		}
		else{
			$_SESSION['dangnhap'] = $taikhoan;
			header('location:index.php?xem=giohang');
		}
	}
	
}
-->
<!--
<form action="" method="post" enctype="multipart/form-data">
    <table width="467" border="3">
      <tr>
        <td colspan="2"><div align="center">Đăng Nhập</div></td>
      </tr>
      <tr>
        <td width="210"><div align="center">Tài Khoản</div></td>
        <td width="237"><div align="center">
          <input type="text" name="taikhoan" id="taikhoan">
        </div></td>
      </tr>
      <tr>
        <td><div align="center">Mật Khẩu</div></td>
        <td><div align="center">
          <input type="password" name="matkhau" id="matkhau">
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="dangnhap" id="dangnhap" value="Đăng Nhập">
        </div></td>
      </tr>
    </table>
</form>
-->
<?php
	@session_start();
	include('admin/modules/config.php');

		$name=$_SESSION['dangnhap'];	
		$them_donhang="insert into donhang (tendh) value ('".$name."')"; //ten khach hang
		$ketqua=mysqli_query($Dbconnect,$them_donhang);
		if($ketqua){
			for($i=0;$i<count($_SESSION['sanpham']);$i++){
			$max=mysqli_query($Dbconnect,"select max(ID_DH) from donhang");
			$row=mysqli_fetch_array($max);
			
			$cart_id=$row[0];
			$id_sanpham=$_SESSION['sanpham'][$i]['id'];
			$quantity=$_SESSION['sanpham'][$i]['soluong'];
			
			$price=$_SESSION['sanpham'][$i]['gia'];
			$tongtien = $price * $quantity;
			 $them_chitietdh="insert into chitietdh (ID_DH,ID_SP,soluong,giasp,tongtien) values('".$cart_id."','".$id_sanpham."','".$quantity."','".$price."','".$tongtien."');";
			 $cart_detail=mysqli_query($Dbconnect,$them_chitietdh);

		}
		
	}	
		unset($_SESSION['sanpham']);
		
		header('location:index.php');
	
?>