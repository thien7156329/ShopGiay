<style>
	.MyClass1 {
    	display: block;
    }
</style>
<?php
	@session_start();
?>
<div class="header">
    <section class="top-link clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav navbar-nav topmenu-contact pull-left">
                        <li><i class="fa fa-phone"></i> <span>Hotline:01203781380</span></li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                            <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                            <li class="order-cart"><a href="index.php?xem=muahang"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li class="account-login"><a href="index.php?xem=dangnhap"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                            <li class="account-register"><a href="index.php?xem=dangky"><i class="fa fa-key "></i> Đăng ký </a></li>
                        </ul>
                    <div class="show-mobile hidden-lg hidden-md">
                        <div class="quick-user">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="inner-toggle">
                                    <ul class="login links">
                                        <li>
                                            <a href="index.php?xem=dangky"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                        </li>
                                        <li>
                                            <a href="index.php?xem=dangnhap"><i class="fa fa-key"></i> Đăng nhập</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="quick-access">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-list"></i>
                            </div>
                            <div class="inner-toggle">
                                <ul class="links">
                                    <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                    <li><a href="/gio-hang.html" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <section class="header-content clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 logo text-center">
                        <a href="/" title="">
                            <img alt="" src="" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12 top-search">
                        <div class="search">
                         <form action="index.php" method="post" enctype="multipart/form-data">
                            <div class="input-cat form-search clearfix">
                                <div class="form-search-controls input-group">
      
            				
                                    <input type="text" name="txtsearch" id="txtsearch"  placeholder="Nhập Tìm Kiếm..." />
                                    <span class="input-group-btn">
                                        <input  class="btn btn-search" type="submit" id="search" name="search" value="Tìm Kiếm">
                                            <i class="fa fa-search"></i>
                              
                                    </span>
                          
                                </div>
                            </div>
                                </form>
                        </div>
                        <div class="social-group">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 top-cart hidden-xs">
                              
                        <div class="cart">
                            <div class="heading">
                      
                                <a href="index.php?xem=muahang">
                                	  <span class="icon">icon</span><span id="cart-total">  
                          			<?php
										
										$a=0;
										if(isset($_SESSION['sanpham'])){	
													$thanhtien=0;
												
															
													foreach($_SESSION['sanpham'] as $giohang){
														
														$tongtien=$giohang['soluong']*$giohang['gia'];
															$thanhtien=($thanhtien + $tongtien);
															$a+=$giohang['soluong'];
													}
											echo $a.'sp';
											
									?>
                                            -
                                    <?php		
											echo $thanhtien.'đ' ;
									 }else{
									  echo '0sp - 0đ';
									}
										
									?> 
                                   
                                </a>
                                
                          
                            </div>
                        </div>

                    </div>
                </div>
        </div></section>


<section class="navigation-menu clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar nav-menu">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation" onClick="Click()">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            
                        </button>
						<script>
							function Click(){
    							document.getElementById("mobile-menu").className = "MyClass1";
							 }
							 
						</script>
                    
                    <div id="mobile-menu" class=" collapse navbar-collapse">
                        <ul class="menu nav navbar-nav" >
                        	<li class="level0" ><a class="" href="index.php"><span>Trang chủ</span></a></li>
                            <li class="level0 "><a class="" href="index.php?xem=gioithieu"><span>Giới thiệu</span></a></li>
                            <li class="level0 "><a class="" href="index.php?xem=tatcasp"><span>Sản phẩm</span></a></li>
                            <li class="level0 "><a class="" href="index.php?xem=tatcatintuc"><span>Tin tức</span></a></li>
                            <li class="level0 "><a class="" href="index.php?xem=lienhe"><span>Liên hệ</span></a></li>
                        </ul>
                    </div>
                    </div >
                </nav>
            </div>
        </div>
    </div>

</section>
</div>