<?php

	error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING);
	$sql = "select * from loaitt where ID_TT = $_GET[id] ";
	$row=mysqli_query($Dbconnect,$sql);
	$dong=mysqli_fetch_array($row);
?>
<form action="modules/tintuc/xuly.php?id=<?php echo $dong['ID_TT'] ?>" method="post" enctype="multipart/form-data">
     
        <table class="info-table" width="520" border="2" bordercolor="#666">
      <tr>
        <td height="57" colspan="2" style="text-align:center; font-size:25px ; padding-bottom:25px; padding-top:25px;"><div align="center"><h3>Sửa loại Tin Tức</h3></div></td>
      </tr>
      <tr>
        <td width="49" height="83" style="font-size:19px" ><div align="center"><h4>Tên Loại TT<h4></div></td>
        <td width="77"  style="padding-bottom:37px; padding-top:37px;"><div align="center">
          <input type="text" name="txtloaitt" value="<?php echo $dong['ten_tintuc'] ?>">
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="sua" id="sua" value="Sửa">
        </div></td>
      </tr>
    </table>
  </form>

