<?php
function ConnectDB()
{
    $conn = NULL;
    try
    {
    $conn = new PDO("mysql:host=localhost;dbname=phpdemo09_kt","root","");
    $conn->query("SET NAMES UTF8");//thiết lập chế độ unicode
    }
    catch(PDOException $ex)
    {
        echo "<p>" . $ex->getMessage() . "</p>";//thông báo lỗi hệ thống
    }
    return $conn;//trả về đối tượng PDO
}
function getListBooks($keyword="",$year=""){
    $conn = ConnectDB();
    if ($conn==NULL){
        return -1;// loi ket noi csdl
    }
    $sql = "SELECT * from tbbooks where true";
    if($keyword!="")
        $sql .= " AND title LIKE '%$keyword%'";
    if($year!="")
        $sql .= " AND pub_year= $year";
        echo "<p>$sql</p>";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua == FALSE){
        return -2;
    }else{
        $rows = $pdo_stm->fetchAll();
        return $rows;
    }
}
