<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 5:02 PM
 */
if (isset($_POST['key']) == false)
    header("location:admin.php?a=6");
$key = $_POST['key'];
echo "<h1>kết quả tìm kiếm cho từ khoá: $key</h1>";
$sanPhamBUS = new sanPhamBUS();

$listSanPham = $sanPhamBUS->search($key);
foreach ($listSanPham as $sanPham)
{
    $hangSanXuatBUS = new hangSanXuatBUS();
    $hangSanXuat = $hangSanXuatBUS->getByID($sanPham->maHangSanXuat);
    $loaiSanPhamBUS = new loaiSanPhamBUS();
    $loaiSanPham = $loaiSanPhamBUS->getByTID($sanPham->maLoaiSanPham);
    echo ("<p><b>Mã SP: </b>$sanPham->maSanPham ||<b>Tên: </b> $sanPham->tenSanPham ||<b>Hãng SX: </b> $hangSanXuat->tenHangSanXuat || <b>Loại sản phẩm: </b> $loaiSanPham->tenLoaiSanPham || Bị khoá: $sanPham->biXoa  || <a href='admin.php?a=117&pid=$sanPham->maSanPham'>Xoá</a> - <a href='admin.php?a=119&pid=$sanPham->maSanPham'>Khoá</a> - <a href='admin.php?a=120&pid=$sanPham->maSanPham'>Mở khoá</a> - <a href='admin.php?a=12&pid=$sanPham->maSanPham'>Cập nhật</a></p><hr />");
}

?>