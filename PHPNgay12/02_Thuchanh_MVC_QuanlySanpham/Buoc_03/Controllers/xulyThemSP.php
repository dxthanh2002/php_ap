<?php
$tensp = $_REQUEST["t1"];
$tacgia = $_REQUEST["t2"];
$gia = $_REQUEST["t3"];
$ketqua = $sanpham->ThemSanpham($tensp,$tacgia, $gia);
if($ketqua==FALSE)
	$thongbao="Lỗi thêm dữ liệu";
else
	$thongbao ="Thêm dữ liệu thành công";
require("../Views/vKetqua.php");
?>