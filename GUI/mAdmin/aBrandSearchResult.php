<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 5:18 PM
 */

if (isset($_POST['key']) == false)
    header("location:admin.php?a=6");
$key = $_POST['key'];
echo "<h1>kết quả tìm kiếm cho từ khoá: $key</h1>";
$hangSanXuatBUS = new hangSanXuatBUS();
$listHangSanXuat = $hangSanXuatBUS->search($key);
foreach ($listHangSanXuat as $hangSanXuat)
{
    echo ("<p>$hangSanXuat->maHangSanXuat || $hangSanXuat->tenHangSanXuat || Bị khoá: $hangSanXuat->biXoa  || <a href='admin.php?a=102&bid=$hangSanXuat->maHangSanXuat'>Xoá</a> - <a href='admin.php?a=103&bid=$hangSanXuat->maHangSanXuat'>Khoá</a> - <a href='admin.php?a=104&bid=$hangSanXuat->maHangSanXuat'>Mở khoá</a> - <a href='admin.php?a=7&bid=$hangSanXuat->maHangSanXuat'>Cập nhật</a></p><hr />");
}
?>