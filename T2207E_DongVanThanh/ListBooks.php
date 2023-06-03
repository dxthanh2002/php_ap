<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<header><h1> quản lý sách </h1></header>
<div id="search" style="width: 800px; margin: 10px auto;">
    <?php
    $keyword = isset($_REQUEST["keyword"])?$_REQUEST["keyword"]:"";
    $year = isset($_REQUEST["year"])?$_REQUEST["year"]:"";
    ?>
        <form name="f1" id="f1" method="get" action="">
            Title:<input type="text" name="keyword" id="keyword" 
                placeholder="books name" value="<?=$keyword?>">
            <input type="submit" name="b1" id="b1" value="Search">
        </form>
    </div>
    <?php
    require_once("ketnoiCSDL.php");
    $rows = getListBooks($keyword,$year);
    if ($rows == -1)
        die("<h3>LỖI KẾT NỐI CSDL</h3>");
    else if ($rows == -2)
        die("<h3>LỖI SQL</h3>");
    else if (count($rows) == 0)
        die("<h3>không tìm thấy dữ liệu</h3>");
    ?>
    <div class="container-fluid">
        <table class="table table-hover table-bordered caption-top table-responsive table-sm">
        <caption>List of books</caption>
        <thead class="table-dark">
                <tr height="30">
                    <th>bookid</th>
                    <th>authorid</th>
                    <th>title</th>
                    <th>ISBN</th>
                    <th>pub_year</th>
                    <th>available</th>
                </tr>
            </thead>
            <?php
            foreach ($rows as $row) {
            ?>
                <Tr height="30">
                    <td><?= $row["bookid"] ?></td>
                    <td><?= $row["authorid"] ?></td>
                    <td><?= $row["title"] ?></td>
                    <td><?= $row["ISBN"] ?></td>
                    <td><?= $row["pub_year"] ?></td>
                    <td><?= $row["available"] ?></td>
                </Tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>