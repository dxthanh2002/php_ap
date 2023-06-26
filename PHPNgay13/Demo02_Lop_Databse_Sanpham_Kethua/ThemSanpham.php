<?php
require("Models/clsSanpham.php");
//tạo đối tượng của lớp clsSanpham
$sanpham = new clsSanpham();
//thêm sách
$ketqua = $sanpham->ThemSanpham("Sách 6","Tác giả 6", 6000);
if($ketqua==FALSE)
	die("<p>Lỗi thêm dũ liệu</p>");
else
{
	echo "<p>thêm dũ liệu thành công</p>";
	$id = $sanpham->conn->lastInsertId();
	echo "<p> mã sách vừa thêm là $id</p>";
}
?>