
<form action="modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">
    <div class="info-table">
    <table width="272" height="344" border="2" class="them_tb" >
      <tr>
        <td colspan="2" style="text-align:center; font-size:25px;padding-bottom:9px;"><div align="center"><h5>Thêm  sản phẩm</h5></div></td>
      </tr>
      <tr>
        <td width="40" height="26"><div align="center"><h4>Tên  SP</h4></div></td>
        <td width="218"><div align="center">
          <input type="text" name="txttensp">
        </div></td>
      </tr>
      <tr>
        <td height="22"><div align="center"><h4>Mô Tả SP</h4></div></td>
        <td><div align="center">
          <textarea name="txtmotasp" cols="51" rows="5"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center"><h4>Giá</h4> </div></td>
        <td><div align="center">
          <input type="text" name="txtgia" />
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center"><h4>Hình</h4></div></td>
        <td><div align="center">
           <input type="file" name="txthinh" class="hinh" />
        </div></td>
      </tr>
      <?php
	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql = "select * from loaisp ";
	$run = mysqli_query($Dbconnect,$sql);
	?>
      <tr>
        <td height="26"><div align="center"><h4>Loại SP</h4></div></td>
        <td>
          <select name="txtloaisp" style="margin-left:29px" >
           <?php
  	while($dong = mysqli_fetch_array($run)){
		?>
          <option value="<?php echo $dong['ID'] ?>"><?php echo $dong['tenloaisp'] ?></option>
          <?php
	}
		  ?>
          </select>
        </td>
      </tr>
      <tr>
        <td height="26"><div align="center"><h4>Số Lượng</h4></div></td>
        <td><div align="center">
          <input type="text" name="txtidsp">
        </div></td>
      </tr>
      <tr>
        <td height="22" colspan="2"><div align="center">
          <input type="submit" name="them" value="Thêm">
        </div></td>
      </tr>
    </table>
    </div>
  </form>

