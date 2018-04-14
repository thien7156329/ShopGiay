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
		$qua_trang = ($trang * 8) - 8;
	}
 	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql="select * from sanpham where loaisp=$_GET[id] limit $qua_trang,8";
	$tam=mysqli_query($Dbconnect,$sql);
	
?>  
		    <?php
 				$sql_loaisp="select * from loaisp where ID=$_GET[id]";
 				$tam_loaisp=mysqli_query($Dbconnect,$sql_loaisp);
				$dong_loaisp = mysqli_fetch_array($tam_loaisp);
			?>
            
 <div class="box1">
   			 <div class="box-list1">
                <h3 align="center" class="title-box1"><?php echo $dong_loaisp['tenloaisp']; ?></h3>
                
            </div>    
</div>
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
                         <a href="index.php?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>" > <input class="btn1" type="button" value="Chi tiết"></a>
                    </div>
            
			</div> 
              <?php
				   } 
				?>
   </div>
   </div>
   <div class="clear"></div>
<?php
	$sql_trang = mysqli_query($Dbconnect,"select * from sanpham where loaisp=$_GET[id]");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count /8);
	if($a > 1){
?>
<div style="margin-left:636px;display:block;">

<a href="#" class="page">Trang</a>
<?php
	$sql_trang = mysqli_query($Dbconnect,"select * from sanpham where loaisp=$_GET[id]");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count /8);
	for($b=1;$b<=$a;$b++){
	
		if($trang==$b){
		echo '<a href="?xem=loaisp&id='.$_GET['id'].'&trang='.$b.'" style="text-decoration:none;color:blue;" class="page" >'.$b.' ' .'</a>';
		
		}else{
		echo '<a href="?xem=loaisp&id='.$_GET['id'].'&trang='.$b.'" style="text-decoration:none;color:#000;" class="page">'.$b.' ' .'</a>';
	}
}
	}
	
?>
</div>
</div>
