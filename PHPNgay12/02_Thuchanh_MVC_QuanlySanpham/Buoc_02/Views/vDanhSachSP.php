<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danh sách sản phẩm</title>
<style type="text/css">
h1,h2 {text-align:center; color:blue}
#khung {width:660px; height:auto; border:1px red solid; 
		margin-left:auto; margin-right:auto; overflow:auto}
.sanpham{width:200px; border:1px #FF9900 dashed; 
		margin:10px; border-radius:10px; padding:10px;
		float:left; box-sizing:border-box}
.sanpham h3:nth-child(1) {color:red; text-align:center}
.sanpham p {text-align:center}
a {color:green; text-decoration: none}
</style>
</head>

<body>
<h1> danh sách sản phẩm</h1>
<h2><a href="ctlSanpham.php?act=them"> THÊM SẢN PHẨM</a></h2>
<div id="khung">
	<div class="sanpham">
    	<h3>Tên sách 1</h3>
        <h3>Tên tác giả 1</h3>
        <h3>Giá: 100.000 VNĐ </h3>
        <p>
        <a href="ctlSanpham.php?act=sua&id=1"> Sửa </a>
        - <a href="ctlSanpham.php?act=xoa&id=1"> Xóa </a>
        </p>
    </div>
    <div class="sanpham">
    	<h3>Tên sách 2</h3>
        <h3>Tên tác giả 2</h3>
        <h3>Giá: 100.000 VNĐ </h3>
        <p>
        <a href="ctlSanpham.php?act=sua&id=2"> Sửa </a>
        - <a href="ctlSanpham.php?act=xoa&id=2"> Xóa </a>
        </p>
    </div>
    <div class="sanpham">
    	<h3>Tên sách 3</h3>
        <h3>Tên tác giả 3</h3>
        <h3>Giá: 100.000 VNĐ </h3>
        <p>
        <a href="ctlSanpham.php?act=sua&id=3"> Sửa </a>
        - <a href="ctlSanpham.php?act=xoa&id=3"> Xóa </a>
        </p>
    </div>
</div>
</body>
</html>