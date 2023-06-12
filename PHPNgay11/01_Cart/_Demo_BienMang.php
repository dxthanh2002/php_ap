<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Demo biến mảng lưu giỏ hàng</title>
</head>

<body>
<?php
//php cho phép khai báo mảng theo dạng key=>value cho mỗi phần tử
//key là khóa để gắn và quản lý value thay vì index theo thứ tự 0,1,2...
//$cart = array("SP01"=>2, "SP02"=>3, "SP03"=> 1);
$cart[3] = 2;//không cần khai báo trước mảng, cứ thêm 1 phần tử mới là sinh ra mảng
$cart[4] = 3;
$cart[5] = 1;
//thêm phần tử mới chỉ cần tạo 1 key mới và gán giá trị cho phần tử đó
$cart[6] = 2;
print_r($cart);
//duyệt mảng dạng key=>value
foreach($cart as $key => $value)
{
	echo "<p> mã sp: $key, Số lượng: $value </p>";
}
//kiểm tra 1 key đã có trong mảng chưa?
$masp = "SP04";
if( array_key_exists($masp, $cart))
	echo "<p> sản phẩm $masp đã có trong giỏ hàng </p>";
else
	echo "<p> sản phẩm $masp chưa có trong giỏ hàng </p>";
?>
</body>
</html>