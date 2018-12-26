<?php
/**
 * Created by PhpStorm.
 * User: CD
 * Date: 2018-12-21
 * Time: 15:51
 */

if (isset($_POST['pname']) == false)
    header("location:admin.php?a=4");
$sanPham = new sanPham();
$sanPham->tenSanPham = $_POST['pname'];
$sanPham->hinhURL = $_POST['ppicture'];
$sanPham->giaSanPham = $_POST['pprice'];
$sanPham->soLuongTon = $_POST['pleft'];
$sanPham->moTa = $_POST['pdetail'];
$sanPham->maHangSanXuat = $_POST['pbrand'];
$sanPham->maLoaiSanPham = $_POST['ptype'];
$sanPham->maSanPham = $_POST['pid'];

//var_dump($sanPham);

$sanPhamBUS = new sanPhamBUS();
$sanPhamBUS->update($sanPham);
header("location:admin.php?a=4");
?>

