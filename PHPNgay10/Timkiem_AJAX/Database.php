<?php
//kết nối CSDL
function ConnectDB()
{
    $conn = NULL;
    try
    {
    $conn = new PDO("mysql:host=localhost;dbname=ThuchanhAJAX","root","");
    $conn->query("SET NAMES UTF8");//thiết lập chế độ unicode
    }
    catch(PDOException $ex)
    {
        echo "<p>" . $ex->getMessage() . "</p>";//thông báo lỗi hệ thống
    }
    return $conn;//trả về đối tượng PDO
}
//hàm tìm kiếm và trả về mảng các bản ghi từ bảng tbbooks
//default $keyword = "" nếu gọi hàm không truyền tham số
function getListBooks($keyword="", $year="")
{
    $conn = ConnectDB();
    if($conn==NULL)
        return -1;//Lỗi kết nối CSDL
    $sql = "SELECT * FROM tbbooks WHERE TRUE ";
    
    if($keyword!="")
        $sql .= " AND title LIKE '%$keyword%'";
    if($year!="") 
    {
        $sql .= " AND pub_year= $year";   
    }
        
    //echo "<p>$sql</p>";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();//trả về TRUE/FALSE
    if($ketqua == FALSE)
        return -2;//lỗi SQL
    else{
        $rows = $pdo_stm->fetchAll();
        return $rows;
    }    
}
?>