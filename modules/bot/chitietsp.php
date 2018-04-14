<div class="right">
<style>
h1.title {
	
    color: #ffffff;
    font-size: 17px;
    position: relative;
    text-transform: uppercase;
    border-bottom: 2px solid #006fc0;
    line-height: 40px;
	}
	h1.title span {
    font-size: 17px;
    display: inline-block;
    position: relative;
    text-transform: uppercase;
    background-color: #006fc0;
    padding: 0 40px 0 10px;
	}
	h1.title span:before {
    border-color: transparent #ffffff transparent transparent;
    border-style: solid;
    border-width: 0 25px 40px 0;
    content: "";
    position: absolute;
    right: 0;
}

</style>
<?php
	$sql = "select * from sanpham where ID_sp = $_GET[id]" ;
	$run = mysqli_query($Dbconnect,$sql);
	$dong = mysqli_fetch_array($run); 
?>
<form action="xuly_dh.php?id=<?php echo $dong['ID_sp'] ?>" method="post" enctype="multipart/form-data">
<table width="918" border=".1" class="info-table">
  <tr>
    <td height="55" colspan="2"><div class="CTSP" align="center"><h3>Chi Tiết Sản Phẩm</h3></div></td>
  </tr>
  <tr>
    <td  width="200" rowspan="3"><div class="hinhsp" align="center"><img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinh'] ?>" width="149px" height="220px" /></div></td>
    <td width="280" height="46"><div align="center"><h4 style="font-size:2em">Tên</h4> <h4 style="padding-top:3px;"><?php echo $dong['tensp']; ?></h4></div></td>
   
  </tr>
  <tr>
    <td height="49"><div align="center"><h4 style="font-size:2em">Mã Giày</h4> <h4 style="padding-top:3px;"><?php echo $dong['ID_sp']; ?></h4></div></td>
  </tr>
  <tr>
    <td height="110" rowspan="2"><div align="center"><h4 style="font-size:2em">Giá</h4><h4 style="padding-top:3px;"><?php echo $dong['giasp']; ?>đ</h4></div></td>
  </tr>
  <tr>
   <td><div align="center"><h4 style=" font-size:2.5em;">Mô Tả SP</h4></div></td>   
  </tr>
  <tr>
   <td height="180px"> <div align="center" >
      <textarea name="textarea" cols="93" rows="7"><?php echo $dong['motasp']; ?></textarea>
    </div></td>   
   <td><div align="center"><h4><input type="image" name="them_giohang" value="Mua hàng"  src="https://st.depositphotos.com/1005920/2824/i/950/depositphotos_28247209-stock-photo-buy-now-icon.jpg" width="165" height="165" style="margin-left:50px;" /></h4></div>
   
   </td>
  </tr>
</table>                                 
</form> 

<?php
  if(isset($_GET['trang'])){
		$trang = $_GET['trang'];
	}
	else{
		$trang = '';
	}
	if($trang == '' || $trang == 1){
		$qua_trang = 0;
	}else{
		$qua_trang = ($trang * 4) - 4;
	}
 	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql="select * from sanpham where loaisp ='$_GET[loaisp]' and sanpham.ID_sp<>$_GET[id] limit $qua_trang,4";
	$tam=mysqli_query($Dbconnect,$sql);
	
?>  

<h1 class="title clearfix"><span>Sản Phẩm Cùng Loại</span></h1>

<div class="items1">
 		 <?php
			while($dong_spcungloai = mysqli_fetch_array($tam)){
			?>	
        	<div class="item5">
          
                    <div class="subject1">
                        <ul>
                            <li><a href="index.php?xem=chitietsp&id=<?php echo $dong_spcungloai['ID_sp'] ?>" ><?php echo $dong_spcungloai['tensp'] ?></a>
                            </li>
                            
                            <li> <?php echo $dong_spcungloai['giasp'] ?>đ</li>
                        </ul>
                    </div>
                    <div class="content1">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $dong_spcungloai['hinh'] ?>"   />
                    </div>
                    <div class="button1">
                        <a href="?xem=chitietsp&loaisp=<?php echo $dong_spcungloai['loaisp'] ?>&id=<?php echo $dong_spcungloai['ID_sp'] ?>" > <input class="btn1" type="button" value="Chi tiết" /></a>
                    </div>
            
			</div> 
              <?php
				   } 
				?>
</div>
 <div class="clear"></div>         
<div style="margin-left:156px;">

 <a href="#" class="page">Trang</a>
<?php
	$sql_trang = mysqli_query($Dbconnect,"select * from sanpham where loaisp ='$_GET[loaisp]' and sanpham.ID_sp<>$_GET[id]");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count /4);

	for($b=1;$b<=$a;$b++){
		if($trang==$b){
?>
	<a href="?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>&trang=<?php echo $b ?>" style="text-decoration:none;color:blue;" class="page"><?php echo $b ?></a>
<?php		
		}else{
?>
	<a href="?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>&trang=<?php echo $b ?>" style="text-decoration:none;color:#000;" class="page"><?php echo $b ?></a>
<?php
	}
	}

	
?>
</div>
</div>