<div class="right2"><?php
	if(isset($_GET['trang'])){
		$trang = $_GET['trang'];
	}
	else{
		$trang = '';
	}
	if($trang == '' || $trang == 1){
		$qua_trang = 0;
	}else{
		$qua_trang = ($trang * 12) - 12;
	}
 	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql="select * from sanpham  limit $qua_trang,12";
	$tam=mysqli_query($Dbconnect,$sql);
?>   
<div class="box1">
   			 <div class="box-list1">
                <h3 align="center" class="title-box1">Tất Cả Sản Phẩm</h3>
                
            </div>    
</div>
<div class="clear"></div>
<div class="items1" style="margin-left:10px;">
 		 <?php
			while($dong = mysqli_fetch_array($tam)){
			?>	
        	<div class="item1">
          
                    <div class="subject1">
                        <ul>
                            <li class="tenspbanchay"><a href="index.php?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>" ><?php echo $dong['tensp'] ?></a>
                            </li>
                            
                            <li class="giaspbanchay"> <?php echo $dong['giasp'] ?>đ</li>
                        </ul>
                    </div>
                    <div class="content1">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinh'] ?>"   />
                    </div>
                    <div class="button1">
                        <a href="index.php?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>" > <input class="btn1" type="button" value="Chi tiết" /></a>
                    </div>
            
			</div> 
              <?php
				   } 
				?>
   </div>
</div>
 <div class="clear"></div>
 <?php
	$sql_trang = mysqli_query($Dbconnect,"select * from sanpham");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count /12);
	if($a > 1){
?>

<div style="margin-left:300px;">

 <a href="#" class="page">Trang</a>
<?php
	$sql_trang = mysqli_query($Dbconnect,"select * from sanpham");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count /12);

	for($b=1;$b<=$a;$b++){
		if($trang==$b){
		echo '<a href="?xem=tatcasp&trang='.$b.'" style="text-decoration:none;color:blue;" class="page">'.$b.' ' .'</a>';
		
		}else{
		echo '<a href="?xem=tatcasp&trang='.$b.'" style="text-decoration:none;color:#000;" class="page">'.$b.' ' .'</a>';
		}
	}
}
	
?>
</div>