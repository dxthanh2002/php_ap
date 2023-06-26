<?php
require_once("clsDatabase.php");
class clsSanpham extends clsDatabase
{
	public $data;//mảng chứa dữ liệu trả về bởi hàm truy vấn dữ liệu
	function __construct()
	{
		parent::__construct();//gọi hàm tạo của lớp cha để kết nối CSDSL
		$this->data = NULL;
	}
	//các hàm truy vấn, thêm, sửa, xóa
	//Hàm LayDanhSachSanpham() truy vấn dữ liệu lưu vào thuộc tính data của lớp
	function LayDanhSachSanpham()
	{
		$sql = "SELECT * FROM books";
		$ketqua = $this->ThucthiSQL($sql);// gọi ThucthiSQL() kế thừa từ clsDatabase
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	//Hàm thêm dữ liệu
	function ThemSanpham($name,$author,$price)
	{
		$sql = "INSERT INTO books VALUES (NULL, ?, ?, ?)";
		$data = [$name,$author,$price];
 		$ketqua = $this->ThucthiSQL($sql,$data);// gọi ThucthiSQL() kế thừa từ clsDatabase
		return $ketqua;
	}
	//Hàm sửa dữ liệu
	function SuaSanpham($id,$name,$author,$price)
	{
		$sql = "UPDATE books SET title=?, author = ?, price = ? WHERE id=?";
		$data = [$name,$author,$price,$id];
		$ketqua = $this->ThucthiSQL($sql,$data);// gọi ThucthiSQL() kế thừa từ clsDatabase
		return $ketqua;
	}
	//Hàm xóa dữ liệu
	function XoaSanpham($id)
	{
		$sql = "DELETE FROM books WHERE id=?";
		$data = [$id];
 		$ketqua = $this->ThucthiSQL($sql,$data);// gọi ThucthiSQL() kế thừa từ clsDatabase
		return $ketqua;
	}
}
?>