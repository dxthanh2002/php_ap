<?php
$id = $_REQUEST["id"];
$tensp = $_REQUEST["t1"];
$tacgia = $_REQUEST["t2"];
$gia = $_REQUEST["t3"];
$ketqua = $sanpham->SuaSanpham($id,$tensp,$tacgia,$gia);
if($ketqua==FALSE)
	$thongbao="Lỗi sửa dữ liệu";
else
	$thongbao ="Sửa dữ liệu thành công";
require("../Views/vKetqua.php");
?>