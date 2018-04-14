<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style/css.css"/>
<script src="script/js.js">

</script>
<title>Web Bán hàng CN</title>
</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
	 header('location:login.php');
 }
?>
<body>
<div class="boss">
   
        
	<?php 
		
		include('modules/config.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/content.php');
		echo "<div class='clear' ></div>";
		include('modules/footer.php');
		
	?>
    
   
</div>
</body>
</html>