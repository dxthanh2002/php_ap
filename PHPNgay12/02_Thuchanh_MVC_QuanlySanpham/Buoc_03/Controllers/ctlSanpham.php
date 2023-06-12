<?php
require_once("../Models/clsSanpham.php");
$act = "";
$id = "";
//lấy các thông tin từ request nếu có
if(isset($_REQUEST["act"]))
	$act = $_REQUEST["act"];
if(isset($_REQUEST["id"]))
	$id = $_REQUEST["id"];
//tạo đối tượng clsSanpham
$sanpham = new clsSanpham();
//gọi các view dựa trên biến act 
if($act == "them"){
	require("../Views/vThemSP.php");
}
else if($act == "sua"){
	$ketqua = $sanpham->TimTheoIDSanpham($id);
	require("../Views/vSuaSP.php");
}
else if($act == "xoa"){
	require("xulyXoaSP.php");
}
else if($act == "xulythem"){
	require("xulyThemSP.php");
}	
else if($act == "xulysua"){
	require("xulySuaSP.php");}
else{
	$ketqua = $sanpham->LayDanhSachSanpham();
	require("../Views/vDanhSachSP.php");
}	
?>