<?php
	@session_start();
	if(isset($_SESSION['sanpham'])){	
		if(isset($_SESSION['dangnhap'])){
			echo '<div class="tieude">Giỏ Hàng Của Bạn  </div> <br/>';
			echo '<div class="customer"><span>Xin Chào:<strong><em> '.$_SESSION['dangnhap'].'</em></strong><a href="xuly_dh.php?thoat=1" style="text-decoration:none;color:green; margin-left:10px;">Đăng Xuất</a></span></div>';
		}else{
			echo '<div class="tieude">Giỏ hàng của bạn</div>';
		}
			
			echo '<div class="box_giohang">';
			echo '  <table width="100%" class="info-table" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
			
			echo'  <tr>';
			echo '<th width="8%">MÃ SP</th>';
			echo'<th width="12%">Tên SP</th>';
			echo'<th width="18%">Hình ảnh</th>';
			echo'<th width="13%">Giá SP</th>';
			echo'<th width="10%">SL</th>';
			echo'<th width="12%">Tổng Tiền</th>';
			echo'<th colspan="3">Quản Lý</th>';
			echo'</tr>';
	$thanhtien=0;
	foreach($_SESSION['sanpham'] as $giohang){
			$id=$giohang['id'];
			$sql="select * from sanpham where ID_sp='$id'";
			$row=mysqli_query($Dbconnect,$sql);
			$dong=mysqli_fetch_array($row);
		 	echo'<tr>';
			echo'<td>'.$dong['ID_sp'].'</td>';
			echo'<td>'.$dong['tensp'].'</td>';
			echo'<td><img src="admin/modules/quanlysp/uploads/'. $dong['hinh'].'  " width="50px" height="50px"   /></td>';
			echo'<td>'.$dong['giasp'].'</td>';		
			echo'<td>'.$giohang['soluong'].'</td>';
			$tongtien=0;
			$tongtien=$giohang['soluong']*$giohang['gia'];
			$thanhtien=($thanhtien + $tongtien);
			echo'<td width="9%">'.number_format($tongtien).'</td>';
			echo'<td width="9%"><a href="xuly_dh.php?cong='.$giohang['id'].'"><input style="margin-left:38px;margin-top:17px;" type="image" name="them_giohang" value="Mua hàng"  title="thêm sản phẩm" src="image/download.jpg" width="25" height="25" /></a></td>';
			echo'<td width="9%"><a href="xuly_dh.php?tru='.$giohang['id'].'" ><input style="margin-left:23px;margin-top:10px;" type="image" name="them_giohang" value="Mua hàng" title="giảm sản phẩm" src="image/001107-grunge-brushed-metal-pewter-icon-media-a-media36-delete.png" width="45" height="45" /></a></td>';
			echo'<td><a href="xuly_dh.php?xoa='.$giohang['id'].'"><input style="margin-left:33px;margin-top:13px;" type="image" name="them_giohang" value="Mua hàng" title="xóa" src="image/112.jpg" width="32" height="32" /></a></td>';
			echo'</tr>';
			echo '<tr>';
			echo'</tr>';
  	}
			echo '<tr>
				<th colspan="6"><a href="xuly_dh.php?xoatoanbo=1"  style="text-decoration:none;color:white;" >Xóa Toàn Bộ</a>	
				</th>
				<th colspan="3">Thành Tiền : '.number_format($thanhtien).'VNĐ'.'</th	>			
			</tr>';
			
	}else{	
		echo '<div class="tieude" style="color:#666; width:500px;"> Giỏ hàng của bạn trống</div>';
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
	
	}
 	echo'</table>';
	
	
  ?>
              
             <!--   <p><a href="?xem=dangky"><input class="thanhtoan" type="button" value="Đăng Ký"></a></p>
                <p><a href="?xem=dangnhap"><input style="width:190px;" class="thanhtoan" type="button" value="Bạn đã có tài khoản"></a></p> -->
                <?php
				if(isset($_SESSION['dangnhap'])&&isset($_SESSION['sanpham'])){
				?>
                 <div><a href="thanhtoan.php"><input class="thanhtoan" type="button" value="Thanh Toán"></a></div>
				<?php
				}else{
				?>
                 <div><a href="index.php?xem=dangnhap"><input style="width:250px;" class="thanhtoan" type="button" value="Đăng Nhập Để Mua Hàng"></a></div>
				<?php	
				}
				?>
        	  <p><a href="?xem=tatcasp"><input style="width:190px;float:left;margin-left:0px;" class="thanhtoan" type="button" value="Thêm Sản Phẩm"></a></p>
    
        </div>
