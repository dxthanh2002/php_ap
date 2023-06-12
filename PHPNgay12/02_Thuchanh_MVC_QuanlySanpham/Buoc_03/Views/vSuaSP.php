<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sửa sản phẩm</title>
</head>

<body>
<h1 style="color: #090; text-align: center;">Sửa sản phẩm</h1>
<?php
$row = $sanpham->data;
?>
<form name="form1" method="post" action="ctlSanpham.php?act=xulysua">
	<input type="hidden" name="id" id="id" value="<?=$id?>">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="142" height="30">Tên sách:</td>
      <td width="258"><input type="text" name="t1" id="t1"  value="<?=$row["title"];?>"></td>
    </tr>
    <tr>
      <td height="30">Tác giả:</td>
      <td><input type="text" name="t2" id="t2"  value="<?=$row["author"]?>"></td>
    </tr>
    <tr>
      <td height="30">Giá:</td>
      <td><input type="text" name="t3" id="t3"  value="<?=$row["price"]?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Đồng ý"></td>
    </tr>
  </table>
</form>
</body>
</html>
