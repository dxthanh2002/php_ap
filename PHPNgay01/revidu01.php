<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test </title>
</head>
<body>
    <h1>Ví dụ lập trình PHP</h1>
    <?php
        echo"<h2>hellophp</h2>";
        $n=5;
        $tong=0;
        for($i=1;$i<=$n;$i++)
        {
            echo "<p> $i - Lớp T2207E</p>\n";
            $tong += ($i%2==1)?$i:0;
        }
?>
<h3>tong day so từ 1 đến <?=$n?> là <?=$tong?>    </h3>
</body>
</html>