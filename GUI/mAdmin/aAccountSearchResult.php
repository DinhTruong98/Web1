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
$taiKhoanBUS = new taiKhoanBUS();
$listTaiKhoan = $taiKhoanBUS->search($key);
foreach ($listTaiKhoan as $taiKhoan)
{
    echo ("<p>$taiKhoan->maTaiKhoan || $taiKhoan->tenDangNhap || Bị khoá: $taiKhoan->biXoa  || Loại tài khoản: $taiKhoan->maLoaiTaiKhoan || <a href='admin.php?a=113&uid=$taiKhoan->maTaiKhoan'>Xoá</a> - <a href='admin.php?a=114&uid=$taiKhoan->maTaiKhoan'>Khoá</a> - <a href='admin.php?a=115&uid=$taiKhoan->maTaiKhoan'>Mở khoá</a> - <a href='admin.php?a=10&uid=$taiKhoan->maTaiKhoan'>Cập nhật</a></p><hr />");
}

?>