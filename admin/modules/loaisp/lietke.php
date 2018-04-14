
<?php
	$sql = "select * from loaisp order  by ID desc";
	$run = mysqli_query($Dbconnect,$sql);
?>
<table width="790" height="100" border="1" class="info-table">
  <tr>
    <th height="58"><div align="center">Mã Loại SP</div></td>
    <th><div align="center">Tên Loại SP</div></td>
    <th colspan="2"><div align="center">Quản Lý</div></td>
  </tr>
  <?php
  	$i=0;
  	while($dong = mysqli_fetch_array($run)){
		
	
  ?>
  <tr>
  	<td height="50"><div align="center"><?php echo $i ;?></div></td>
    <td><div align="center"><?php echo $dong['tenloaisp']; ?> </td>
 
    <td><div align="center"><a href="index.php?quanly=loaisp&ac=sua&id=<?php echo $dong['ID']; ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/loaisp/xuly.php?id=<?php echo $dong['ID']; ?>"> xóa</a></div></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>

