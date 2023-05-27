<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ trộn mã PHP với mã HTML trong điều khiển</title>
    <style type="text/css">
        .sanpham {width: 200px; height: 100px; border: 1px red solid;
        float: left; margin: 5px; padding: 10px;}
        .bg1 {background-color: gray;}
        .bg2 {background-color: pink;}
    </style>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <?php
        //tạo biến mảng 
        $ten = array("Sản phẩm 1", "Sản phẩm 2", "Sản phẩm 3","Sản phẩm 4");
        //cách 2 ở phiên bản php mới
        $gia = [10000000, 2000000, 3000000,4000000];
        //hiển thị các sản phẩm và giá
        for($i=0; $i<count($ten);$i++)//count($benmang) : số phần tử
        {
            if($i%2==1)
            {
    ?>
        <div class="sanpham bg1">
            <?php
            }else{
            ?>
        <div class="sanpham bg2">
            <?php
            }//đóng else
            ?>    
            <h3> <?=$ten[$i]?> </h3>
            <h3> Giá: <?=$gia[$i]?> VNĐ</h3>
        </div>
    <?php
        }// đóng vòng lặp for
    ?>
</body>
</html>