<style>
h1.title {
    color: #ffffff;
    font-size: 17px;
    position: relative;
    text-transform: uppercase;
    border-bottom: 2px solid #000;
    line-height: 40px;
}
h1.title span {
    font-size: 17px;
    display: inline-block;
    position: relative;
    text-transform: uppercase;
    background-color: #000;
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
li.tenspbanchay, li.giaspbanchay{
	font-size:16px;
	font-weight:bold;
}
li.giaspbanchay{
	color:red;
    position: absolute;
    top: 234px;
    left: 75px;
}
</style> 
           <div class="right"><ul id="sliderId">
                    <li>
                        <div><img src="image/banner_shoes.jpg" alt="hình 1" /></div>
                       
                    </li>
                    <li>
                        <div><img src="image/banner_nike donna.jpg" alt="hình 2" /></div>
                       
                    </li>
                      <li>
                        <div><img src="image/3.jpg" alt="hình 3" /></div>
                       
                    </li>
                    <li>
                        <div><img src="image/banner_cheap_nike_air_max.jpg" alt="hình 4"  /></div>
                       
                    </li>
                      <li>
                        <div><img src="image/banner7.jpg" alt="hình 5"  /></div>
                       
                    </li>
                    <li>
                        <div><img src="http://upanhmienphi.net/uploads/hinhanh/banner-thiet-ke-website-escovietnam-10-20170502204253lb9TYNBkp1.jpg" alt="Category 4" /></div>
                       
                    </li>
                </ul> 
                
                
          <?php
 	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql="select * from sanpham  LIMIT 4";
	$tam=mysqli_query($Dbconnect,$sql);
	
?>  
             
<h1 class="title clearfix"><span>Sản Phẩm Bán Chạy</span></h1>
<div class="items1">

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
				    echo "<div class='clear' ></div>";
				?>
   </div>
   </div>
   
             </div>  <!-- DONG right -->
             
             
  <div class="clear"></div>  