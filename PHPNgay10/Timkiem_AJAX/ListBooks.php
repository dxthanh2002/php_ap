    <?php
    sleep(1);
    $keyword = isset($_REQUEST["keyword"])?$_REQUEST["keyword"]:"";
    $year = isset($_REQUEST["year"])?$_REQUEST["year"]:"";
    require_once("Database.php");
    $rows = getListBooks($keyword,$year);
    if($rows==-1)
        die("<h3>LỖI KẾT NỐI CSDL</h3>");
    else if($rows==-2)
        die("<h3>LỖI SQL</h3>");
    else if(count($rows)==0)
        die("<h3>không tìm thấy dữ liệu</h3>");
    ?> 
    <table width="800"  align="center" border="1" cellpadding="5">
        <Tr bgcolor="pink" height="30">
            <th>bookid</th>
            <th>authorid</th>
            <th>title</th>
            <th>ISBN</th>
            <th>pub_year</th>
            <th>available</th>
        </Tr>
        <?php
        foreach($rows as $row)
        {
        ?>
        <Tr height="30">
            <td><?=$row["bookid"]?></td>
            <td><?=$row["authorid"]?></td>
            <td><?=$row["title"]?></td>
            <td><?=$row["ISBN"]?></td>
            <td><?=$row["pub_year"]?></td>
            <td><?=$row["available"]?></td>
        </Tr>
        <?php
        }
        ?>
    </table>
