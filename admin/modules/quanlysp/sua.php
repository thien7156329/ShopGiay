
<?php

	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql = "select * from sanpham where ID_sp = $_GET[id] ";
	$run=mysqli_query($Dbconnect,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlysp/xuly.php?id= <?php echo $dong['ID_sp'] ?>" method="post" enctype="multipart/form-data">
    
     <div class="info-table"> 
    <table width="272" height="344" border="2" class="them_tb" >
      <tr>
        <td colspan="2" style="text-align:center; font-size:25px;padding-bottom:9px;"><div align="center"><h5>Sửa sản phẩm</h5></div></td>
      </tr>
      <tr>
        <td width="4" height="26"><div align="center">Tên  SP</div></td>
        <td width="23"><div align="center">
          <input type="text" name="txttensp" value="<?php echo $dong['tensp'] ?>">
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">Mô Tả SP</div></td>
        <td><div align="center">
          <textarea name="txtmotasp" cols="51" rows="5"><?php echo $dong['motasp'] ?></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">Giá </div></td>
        <td><div align="center">
          <input type="text" name="txtgia" value="<?php echo $dong['giasp'] ?>" />
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">Hình</div></td>
        <td><div align="center">
          <input type="file" name="txthinh" class="hinh1"><img src="modules/quanlysp/uploads/<?php echo $dong['hinh'] ?> " width="70" height="70"/> 
        </div></td>
      </tr>
       <?php
	$sql_loaisp = "select * from loaisp ";
	$run_loaisp = mysqli_query($Dbconnect,$sql_loaisp);
	?>
      <tr>
        <td><div align="center">Loại SP</div></td>
        <td style="padding-right:30px;">
          <select name="txtloaisp" >
           <?php
  	while($dong_loaisp = mysqli_fetch_array($run_loaisp)){
		if($dong['ID'] == $dong_loaisp['ID']){
		?>
          <option selected="selected" value="<?php echo $dong_loaisp['ID'] ?>"><?php echo  $dong_loaisp['tenloaisp'] ?></option>
          <?php
	}else{
		  ?>
          <option value="<?php echo  $dong_loaisp['ID'] ?>"><?php echo  $dong_loaisp['tenloaisp'] ?></option>
          <?php
	}
	}
		  ?>
          </select>
        </td>
      </tr>
      <tr>
        <td height="26"><div align="center">Số Lượng</div></td>
        <td><div align="center">
          <input type="text" name="txtidsp" value="<?php echo $dong['soluong'] ?>">
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

