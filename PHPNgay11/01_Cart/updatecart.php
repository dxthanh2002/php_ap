<?php
session_start();
if(isset($_REQUEST["qty"])==false)
	die("<p> lỗi form</p>");
$qty = $_REQUEST["qty"]; //lấy mảng các input có name=qty[id]
//print_r($qty);
var_dump($qty);
foreach($qty as $id=>$soluong)
{
	if($soluong>0)
		$_SESSION["cart"][$id] = $soluong;
	else//nếu số lượng <=0 thì xóa sản phẩm khỏi giỏ hàng
		unset($_SESSION["cart"][$id]);
}
//header("location:cart.php");
?>
<p>update thành công</p>
<a href="cart.php">Hiển thị giỏ hàng</a>