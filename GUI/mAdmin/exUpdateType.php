<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 10:43 PM
 */
if (isset($_POST['tname']) == false)
    header("location:admin.php?a=3");
$tid = $_POST['tid'];
$tname = $_POST['tname'];
$bixoa = $_POST['bixoa'];

$loaiSanPham = new loaiSanPham();
$loaiSanPham->maLoaiSanPham = $tid;
$loaiSanPham->tenLoaiSanPham = $tname;
$loaiSanPham->biXoa = $bixoa;

$loaiSanPhamBUS = new loaiSanPhamBUS();
if ($loaiSanPhamBUS->update($loaiSanPham) == true)
{
    header("location:admin.php?a=3");
}
else echo "Cập nhật không thành công";
?>