  <div class="right2"><?php
 	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	if(isset($_POST['search'])){
		$search = $_POST['txtsearch'];
		$sql="select * from sanpham where tensp LIKE '%$search%'"; //'%on' ket thúc bằng on -- 'on%' bắt đầu bằng on -- '%on%' Chuỗi có on
		$tam=mysqli_query($Dbconnect,$sql);
	}
	
	
	
?>  
            
 <div class="box1">
   			

<div class="items1">
		<?php
		
			if($_POST['txtsearch'] == null){
				echo '<div class="tieude" style="width:100%;color:#333;">Nhập sản phẩm cần tìm.</div>';
				echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';
				echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';
				echo '<br/>';
				echo '<br/>';
				
			}
			else{
			if($count = mysqli_num_rows($tam)==0){
		?>
        <div class="tieude" style="width:500px;color:#333;">Không Tìm Thấy Sản Phẩm</div>
       <br /> <br /> <br /> <br /> 
       <br /><br /> <br /><br />
       <br />
       <br />
       
        
        <?php
			}else{
		?>
	 <div class="box-list1">
                <h3 align="center" class="title-box1">Sản Phẩm Tìm Thấy</h3>
                
            </div>    
 		 <?php
			while($dong = mysqli_fetch_array($tam)){
			?>
            
        	<div class="item1">
          		
                    <div class="subject1">
                        <ul>
                            <li><a href="index.php?xem=chitietsp&id=<?php echo $dong['ID_sp'] ?>" ><?php echo $dong['tensp'] ?></a>
                            </li>
                            
                            <li> <?php echo $dong['giasp'] ?>đ</li>
                        </ul>
                    </div>
                    <div class="content1">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinh'] ?>"   />
                    </div>
                    <div class="button1">
                         <a href="index.php?xem=chitietsp&id=<?php echo $dong['ID_sp'] ?>" > <input class="btn1" type="button" value="Chi tiết"></a>
                    </div>
            
			</div> 
              <?php
				   } 
				?>
   </div>
   </div>
   <?php
			}
			}
   ?>
</div>
</div>
</div>
