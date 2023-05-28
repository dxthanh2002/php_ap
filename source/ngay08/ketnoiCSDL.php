<?php
function ConnectDB()
{
    $conn = NULL;
    try
    {
    $conn = new PDO("mysql:host=localhost;dbname=phpdemo08_1","root","");
    $conn->query("SET NAMES UTF8");//thiết lập chế độ unicode
    }
    catch(PDOException $ex)
    {
        echo "<p>" . $ex->getMessage() . "</p>";//thông báo lỗi hệ thống
    }
    return $conn;//trả về đối tượng PDO
}
function getListBooks(){
    $conn = ConnectDB();
    if ($conn==NULL){
        return -1;// loi ket noi csdl
    }
    $sql = "SELECT * from tbbooks where true";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua == FALSE){
        return -2;
    }else{
        $rows = $pdo_stm->fetchAll();
        return $rows;
    }
}
 ?>