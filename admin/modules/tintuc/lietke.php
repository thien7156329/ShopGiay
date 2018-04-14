
<?php
	$sql = "select * from loaitt order  by ID_TT desc";
	$run = mysqli_query($Dbconnect,$sql);
?>
<table width="790" height="374px" border="1" class="info-table">
  <tr>
    <th height="58"><div align="center">Mã Tin Tức</div></td>
    <th><div align="center">Tên Loại Tin Tức</div></td>
    <th colspan="2"><div align="center">Quản Lý</div></td>
  </tr>
  <?php
  	$i=0;
  	while($dong = mysqli_fetch_array($run)){
		
	
  ?>
  <tr>
  	<td height="50"><div align="center"><?php echo $i ;?></div></td>
    <td><div align="center"><?php echo $dong['ten_tintuc']; ?> </td>
 
    <td><div align="center"><a href="index.php?quanly=tintuc&ac=sua&id=<?php echo $dong['ID_TT']; ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/tintuc/xuly.php?id=<?php echo $dong['ID_TT']; ?>"> xóa</a></div></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>

