
<div class="boss2"> 
<?php
 	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql="select * from sanpham where loaisp = 8 LIMIT 4";
	$tam=mysqli_query($Dbconnect,$sql);
	
?>  
		    <?php
 				$sql_loaisp="select * from loaisp where ID=8 ";
 				$tam_loaisp=mysqli_query($Dbconnect,$sql_loaisp);
				$dong_loaisp = mysqli_fetch_array($tam_loaisp);
			?>
     <div class="box">
            <div class="box-list">
                <h3 align="center" class="title-box"><?php echo $dong_loaisp['tenloaisp']; ?></h3>
                <a href="index.php?xem=loaisp&id=8">
                    Xem thêm<span>...</span>
                </a>
            </div>
    
     
    </div>         

<div class="items">

 		 <?php
			while($dong = mysqli_fetch_array($tam)){
			?>
            
        	<div class="item">
          		
                    <div class="subject">
                        <ul>
                            <li><a href="index.php?xem=chitietsp&id=<?php echo $dong['ID_sp'] ?>" ><?php echo $dong['tensp'] ?></a>
                            </li>
                            
                            <li class="giasp"> <?php echo $dong['giasp'] ?>đ</li>
                        </ul>
                    </div>
                    <div class="content">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinh'] ?>"   />
                    </div>
                    <div class="button">
                          <a href="index.php?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>" ><input class="btn" type="button" value="Chi tiết"></a>
                    </div>
            
			</div> 
              <?php
				   } 
				    echo "<div class='clear' ></div>";
				?>
   </div>
   </div>
   </div>
  
    
    <div class="boss2"> 
   <?php
   
 	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql="select * from sanpham where loaisp = 7 LIMIT 4";
	$tam=mysqli_query($Dbconnect,$sql);
	
?>  
		    <?php
 				$sql_loaisp="select * from loaisp where ID=7 ";
 				$tam_loaisp=mysqli_query($Dbconnect,$sql_loaisp);
				$dong_loaisp = mysqli_fetch_array($tam_loaisp);
			?>
     <div class="box">
            <div class="box-list">
                <h3 align="center" class="title-box"><?php echo $dong_loaisp['tenloaisp']; ?></h3>
                <a href="index.php?xem=loaisp&id=7">
                    Xem thêm<span>...</span>
                </a>
            </div>
    
     
    </div>         



 		 <?php
			while($dong = mysqli_fetch_array($tam)){
			?>
            
        	<div class="item">
          		
                    <div class="subject">
                        <ul>
                            <li> <a href="index.php?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>" ><?php echo $dong['tensp'] ?></a>
                            </li>
                            
                            <li class="giasp"> <?php echo $dong['giasp'] ?>đ</li>
                        </ul>
                    </div>
                    <div class="content">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinh'] ?>"   />
                    </div>
                    <div class="button">
                         <a href="index.php?xem=chitietsp&loaisp=<?php echo $dong['loaisp'] ?>&id=<?php echo $dong['ID_sp'] ?>" > <input class="btn" type="button" value="Chi tiết"></a>
                    </div>
            
			</div> 
              <?php
				   } 
				?>
   </div>
