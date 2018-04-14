<style>
.feature-l {
	margin-top: 0;
    margin-bottom: 30px;
    background-color: rgba(0, 111, 192, 0.27);
}
.list-group {
    padding-left: 0;
    margin-bottom: 0;
}
ul, ol {
    padding: 0;
    margin: auto;
    list-style: none;
}
.media:first-child {
    margin-top: 80px;
}

.feature-l li {
    padding: 0 15px;
    overflow: hidden;
    margin-top: 0;
    background-color: #16443f;
    border: 0;
    display: block;
    padding-top: 15px;
}
.feature-l li img {
    padding-right: 10px;
    width: 48px;
    float: left;
}
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}

.media-body {
    width: 10000px;
}
.feature-l .feature-title {
    font-size: 14px;
    line-height: 20px;
    color: #3fa22e;
}
.feature-l p {
    font-family: 'Roboto',sans-serif;
    font-size: 18px;
    line-height: 20px;
    font-weight: 700;
    color: #FFF;
}

p {
    margin-bottom: 0;
}
.media, .media-body {
    overflow: hidden;
    zoom: 1;
}
.media-object {
    display: block;
}

img {
    vertical-align: middle;
}
.feature-l li hr {
    margin-top: 20px;
    margin-bottom: 0;
    border-top: 1px solid #80b69a;
}
img {
    border: 0;
}

</style>

<?php
    error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING); 
	$sql_loaisp = "select * from loaisp";
	$run_loaisp = mysqli_query($Dbconnect,$sql_loaisp);
?>

<div class="left" > 
    	 <div class="list">
                    <h3 class="title">
                        <span>Danh mục sản phẩm</span>
                    </h3>
                    <div class="content-list">
                        <ul class="nav-list">
                            <li>
							 <?php
                            while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
                            ?>
                                <li><a href="index.php?xem=loaisp&id=<?php echo $dong_loaisp['ID'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></a></li>
                            
                       		</li>
                           <?php
                            }
                            ?> 
                         </ul>
                          
                             <!-- 
                               <ul class="nav-list">
                                <li>
                                    <li><a href="index.php?xem=sanpham1 	">Sản Phẩm</a></li>
                                </li>
                        	 </ul>
                             -->
                         
                    </div>           
      	 </div>
         <div class="col-lg-18 hidden-md-down">
                        <div class="feature-l">
                            <ul class="list-group">
                                <li class="media">
                                    <div class="">
                                        <img alt="feature1" class="media-object" src="https://lh4.googleusercontent.com/-NS0gx_A7IJE/WH8PQslQLjI/AAAAAAAACDs/sO3qAu46zLERm0g25KxmOgLBj1C0uWgJQCLcB/s1600/feature1.png">
                                    </div>
                                    <div class="media-body">
                                        <span class="feature-title">Hỗ trợ trực tuyến 24/7</span>
                                        <p>01203781380</p>
                                    </div>
                                    <hr>
                                </li>
                                <li class="media">
                                    <div class="">
                                        <img alt="feature1" class="media-object" src="https://lh4.googleusercontent.com/-UeJktaMQWM4/WH8PQqxnQII/AAAAAAAACD0/T4ontcEv87ALhRgosufwgwmSkClLKCoyQCLcB/s1600/feature2.png">
                                    </div>
                                    <div class="media-body">
                                        <span class="feature-title">Đổi trả hàng trong ngày</span>
                                        <p>01203781380</p>
                                    </div>
                                    <hr>
                                </li>
                                <li class="media">
                                    <div class="">
                                        <img alt="feature1" class="media-object" src="https://lh4.googleusercontent.com/-pBtw3--DHOc/WH8PQhRRbwI/AAAAAAAACDw/j9wWS5NxLegyBcLGAuK88DVMDMU7p6uLgCLcB/s1600/feature3.png">
                                    </div>
                                    <div class="media-body">
                                        <span class="feature-title">Miễn phí vận chuyển</span>
                                        <p>01203781380</p>
                                    </div>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
</div>

        