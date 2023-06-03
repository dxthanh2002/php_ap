<?php
function ConnectDB()
{
    $conn = NULL;
    try
    {
    $conn = new PDO("mysql:host=localhost;dbname=phpdemo08_1","root","");
    $conn->query("SET NAMES UTF8");
    }
    catch(PDOException $ex)
    {
        echo "<p>" . $ex->getMessage() . "</p>";
    }
    return $conn;
}
function getListBooks($keyword="",$year=""){
    $conn = ConnectDB();
    if ($conn==NULL){
        return -1;
    }
    $sql = "SELECT * from tbbooks where true";
    if($keyword!="")
        $sql .= " AND title LIKE '%$keyword%'";
    if($year!="")
        $sql .= " AND pub_year= $year";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua == FALSE){
        return -2;
    }else{
        $rows = $pdo_stm->fetchAll();
        return $rows;
    }
}
