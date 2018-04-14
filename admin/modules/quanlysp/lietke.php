<?php
	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	if(isset($_GET['trang'])){
		$trang = $_GET['trang'];
	}
	else{
		$trang = '';
	}
	if($trang == '' || $trang == 1){
		$qua_trang = 0;
	}else{
		$qua_trang = ($trang * 5) - 5;
	}
	$sql = "select * from sanpham,loaisp where sanpham.loaisp = loaisp.ID order by sanpham.ID_sp desc limit $qua_trang,5";
	$run = mysqli_query($Dbconnect,$sql);
?>
<table width="859px"  border="1" class="info-table" >
  <tr>
    <th height="78" width="5%"><div align="center">Mã  SP</div></td>
    <th width="9%"><div align="center">Tên SP</div></td>
    <th width="22%"><div align="center">Mô Tả SP</div></td>
    <th width="8%"><div align="center">Giá</div></td>
    <th width="13%"><div align="center">Hình</div></td>
    <th width="10%"><div align="center">LoạiSP</div></td>
    <th width="7%"><div align="center">Số Lượng</div></td>
    <th colspan="2" width="80px;"><div align="center">Quản Lý</div></td>
  </tr>
 <?php
  	$i=0;
  	while($dong = mysqli_fetch_array($run)){
		?>
  <tr>
  	<td height="50"><div align="center"><?php echo $i;?></div></td>
    <td><div align="center"><?php echo $dong['tensp']; ?></div> </td>
    <td><div align="center"><textarea name="textarea" cols="32" rows="4"><?php echo $dong['motasp']; ?></textarea></div></td>
    <td><div align="center"><?php echo $dong['giasp']; ?></div></td>
    <td><div align="center"><img src="modules/quanlysp/uploads/<?php echo $dong['hinh']; ?>" width="59" height="58" /></div></td>
    <td><div align="center"><?php echo $dong['tenloaisp']; ?></div></td>
    <td><div align="center"><?php echo $dong['soluong']; ?></div></td>
    <td><div align="center"><a href="index.php?quanly=quanlysp&ac=sua&id=<?php echo $dong['ID_sp']; ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlysp/xuly.php?id=<?php echo $dong['ID_sp']; ?>">Xóa</a></div></td>
  </tr>
<?php
	$i++;
	}
?>
 </table>
 <div style="margin-left:140px; margin-top:15px;">
 <div id="container">
    
 
 <a href="#" class="page">Trang</a>
<?php
	$sql_trang = mysqli_query($Dbconnect,"select * from sanpham");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count /5);

	for($b=1;$b<=$a;$b++){
		
				
		if($_GET['ac'] == 'them'){
			if($trang==$b){
		echo '<a href="index.php?quanly=quanlysp&ac=them&trang='.$b.'" style="text-decoration:none;color:blue;" class="page">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="index.php?quanly=quanlysp&ac=them&trang='.$b.'" style="text-decoration:none;color:#000;" class="page">'.$b.' ' .'</a>';
	}}
	
	elseif($_GET['ac'] == 'sua'){
		if($trang==$b){
				echo '<a href="index.php?quanly=quanlysp&ac=sua&trang='.$b.'" style="text-decoration:none;color:red;" class="page">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="index.php?quanly=quanlysp&ac=sua&trang='.$b.'" style="text-decoration:none;color:#000;" class="page">'.$b.' ' .'</a>';
	}
	}
	

	}
?>
</div>
</div>
</div>

