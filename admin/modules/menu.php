<?php
	if(isset($_GET['ac']) && $_GET['ac']== 'dangxuat'){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="boss1">
        
        <div class="menu">
            <ul>
            	<li><a href="index.php" id="a"> Trang Chủ </a></li>
                
            	<li><a href="index.php?quanly=loaisp&ac=them">Quản Lý Loại SP</a></li>
                
            	<li><a href="index.php?quanly=quanlysp&ac=them"> Quản Lý SP</a></li>
                
            	<li><a href="index.php?quanly=tintuc&ac=them"> QL Loại Tin Tức</a></li>
                
            	<li><a href="index.php?quanly=CTTT&ac=them"> Quản Lý Tin Tức</a></li>
                <li><a href="index.php?ac=dangxuat"> Đăng Xuất</a></li>
                             
            </ul>
            <div class="menu1">
                <input type="text" placeholder="Nhập Tìm Kiếm..." />
            
            </div>
        </div>
    </div>