<?php
function KetnoiCSDL()
{
	$servername = "localhost:3306"; 
	$user = "root";
	$pass = "";
	$conn = NULL;
	try{
		$conn = new PDO("mysql:host=$servername;dbname=shop",$user,$pass);
		$conn->query("SET NAMES UTF8");
	}
	catch(PDOException $e){
		echo "<p>LỖI KẾT NỐI CSDL</p>";
		echo "<p>" . $e->getMessage() . "</p>";
	}
	return $conn;
}
//Đếm tổng số sản phẩm
function DemTongSoSanPham()
{
	$conn = KetnoiCSDL();
	if($conn==NULL)
		die("<h3> LỖI KẾT NỐI CSDL </h3>");
	$sql = "SELECT COUNT(*) as Tong  FROM books ";
	$pdo_stm = $conn->prepare($sql);
	$ketqua = $pdo_stm->execute();
	if($ketqua==FALSE)
		return NULL;
	else
	{
		$row = $pdo_stm->fetch();
		return $row["Tong"];
	}
}
//hàm trả về số lượng $limit sản phẩm bắt đầu từ bị trí $start
function DanhSach_SP_Theo_Vitri($start, $limit)
{
	$conn = KetnoiCSDL();
	if($conn==NULL)
		die("<h3> LỖI KẾT NỐI CSDL </h3>");
	$sql = "SELECT * FROM books LIMIT $start, $limit";
	$pdo_stm = $conn->prepare($sql);
	$ketqua = $pdo_stm->execute();
	if($ketqua==FALSE)
		return NULL;
	else
	{
		return $pdo_stm->fetchAll();
	}
}
?>