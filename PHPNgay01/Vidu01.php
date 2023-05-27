<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ PHP</title>
    <style type="text/css">
        .class1 {width: 200px; height: 100px; float: left;
                border: 1px red solid; margin: 5px;}
    </style>
</head>
<body>
    <h1>Làm quen với PHP</h1>
    <?php
    //Các mã lệnh PHP chạy trên máy chủ đặt ở đây
    $hoten = "Ngôn ngữ PHP";
    echo "<h2> Hello: " . $hoten . "</h2>";//dấu . là lệnh ghép chuỗi
    //cho phép đặt luôn biến vào trong chuỗi để ghép vào chuỗi
    echo "<h3> Xin chào: $hoten </h3>";
    //nếu chỉ hiển thị 1 biển thì sử dụng như bên dưới
    ?>
    <h3>Ví dụ vòng lặp <?=$hoten?></h3>
    <?php
    //đoạn php tiếp theo
    $n = 5;
    for($i=1; $i<=$n; $i++)
    {
        echo "\n<div class=\"class1\"> Dòng thứ $i </div>";
    }
    ?>
    
    <!--đoạn java script được gửi về trình duyệt thực thi-->
    <script language="javascript">
        window.alert("Hello <?=$hoten?> From Javascript");
    </script>

</body>
</html>