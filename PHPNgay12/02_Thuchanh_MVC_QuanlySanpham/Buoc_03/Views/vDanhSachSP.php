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
<?php
if($ketqua)
{
?>
<div id="khung">
	<?php
	$rows = $sanpham->data;
	foreach($rows as $row)
	{
	?>
    <div class="sanpham">
    	<h3><?=$row["title"]?></h3>
        <h3>Tác giả: <?=$row["author"]?></h3>
        <h3>Giá: <?=$row["price"]?> VNĐ </h3>
        <p>
        <a href="ctlSanpham.php?act=sua&id=<?=$row["id"]?>"> Sửa </a>
        - <a href="ctlSanpham.php?act=xoa&id=<?=$row["id"]?>"> Xóa </a>
        </p>
    </div>
    <?php
	}
	?>
</div>
<?php
}
?>
</body>
</html>