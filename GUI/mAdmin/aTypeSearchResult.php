<?php
if (isset($_POST['key']) == false)
    header("location:admin.php?a=6");
$key = $_POST['key'];
echo "<h1>kết quả tìm kiếm cho từ khoá: $key</h1>";
// = new sanPhamBUS();

$loaiSanPhamBUS = new loaiSanPhamBUS();
$listLoaiSanPham = $loaiSanPhamBUS->search($key);
foreach ($listLoaiSanPham as $loaiSanPham)
{
    echo ("<p>$loaiSanPham->maLoaiSanPham || $loaiSanPham->tenLoaiSanPham || Bị khoá: $loaiSanPham->biXoa  || <a href='admin.php?a=108&tid=$loaiSanPham->maLoaiSanPham'>Xoá</a> - <a href='admin.php?a=109&tid=$loaiSanPham->maLoaiSanPham'>Khoá</a> - <a href='admin.php?a=110&tid=$loaiSanPham->maLoaiSanPham'>Mở khoá</a> - <a href='admin.php?a=8&tid=$loaiSanPham->maLoaiSanPham'>Cập nhật</a></p><hr />");
}
?>