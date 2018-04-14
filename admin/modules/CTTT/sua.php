
<?php
	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql = "select * from tintuc where ID_tintuc = $_GET[id] ";
	$run=mysqli_query($Dbconnect,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action="modules/CTTT/xuly.php?id= <?php echo $dong['ID_tintuc'] ?>" method="post" enctype="multipart/form-data">
    
     <div class="info-table"> 
    <table width="272" height="344" border="2" class="them_tb" >
      <tr>
        <td colspan="2" style="text-align:center; font-size:25px;padding-bottom:9px;"><div align="center"><h5>Sửa Tin Tức</h5></div></td>
      </tr>
      <tr>
        <td width="4" height="26"><div align="center">Tiêu Đề</div></td>
        <td width="23"><div align="center">
          <input type="text" name="txttieude" value="<?php echo $dong['TieuDe'] ?>">
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">Nội Dung</div></td>
        <td><div align="center">
          <textarea name="txtnoidung" cols="51" rows="5"><?php echo $dong['NoiDung'] ?></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">Hình</div></td>
        <td><div align="center">
          <input type="file" name="txthinh" class="hinh1"><img src="modules/CTTT/uploads/<?php echo $dong['HinhAnh'] ?> " width="70" height="70"/> 
        </div></td>
      </tr>
       <?php
	$sql_loaitt = "select * from loaitt ";
	$run_tintuc = mysqli_query($Dbconnect,$sql_loaitt);
	?>
      <tr>
        <td><div align="center">Loại Tin Tức</div></td>
        <td style="padding-right:30px;">
          <select name="txtloaitt" >
           <?php
  	while($dong_loaitt = mysqli_fetch_array($run_tintuc)){
		if($dong['ID_tintuc'] == $dong_loaitt['ID_TT']){
		?>
          <option selected="selected" value="<?php echo $dong_loaitt['ID_TT'] ?>"><?php echo  $dong_loaitt['ten_tintuc'] ?></option>
          <?php
	}else{
		  ?>
          <option value="<?php echo  $dong_loaitt['ID_TT'] ?>"><?php echo  $dong_loaitt['ten_tintuc'] ?></option>
          <?php
	}
	}
		  ?>
          </select>
        </td>
      </tr>
        <tr>
        <td height="26"><div align="center">Giới Thiệu</div></td>
        <td><div align="center">
          <input type="text" name="txtgioithieu" value="<?php echo $dong['GioiThieu'] ?>" />
        </div></td>
      </tr>
      <tr>
        <td height="45" colspan="2"><div align="center">
          <input type="submit" name="sua" id="sua" value="sửa">
        </div></td>
      </tr>
    </table>
    </div>
  </form>

