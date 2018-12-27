<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/27/2018
 * Time: 9:36 PM
 */
if (isset($_SESSION['cart']) == false)
    header("location:index.php");

else {
    $cart = unserialize($_SESSION['cart']);
    $tongSoTien = $cart->tongSoTien;
    $uid = $_SESSION['account'];
    $maDonHang = strval(time() ) .$uid;

}
$time = time();
$taiKhoanBUS = new taiKhoanBUS();
$taiKhoan = $taiKhoanBUS->getByUsername($uid);
$donDatHangBUS = new donDatHangBUS();
$donDatHang = new donDatHang();
$donDatHang->maDonDatHang = $maDonHang;
$donDatHang->tongThanhTien = $tongSoTien;
$donDatHang->maTaiKhoan = $taiKhoan->maTaiKhoan;
//var_dump($donDatHang);
$donDatHangBUS->insert($donDatHang);
$chiTietDHBUS = new chiTietDonHangBUS();
foreach ($cart->listSanPham as $item)
{
    $chiTietDH = new chiTietDonDatHang();
    $chiTietDH->maChiTietDonDatHang = $donDatHang->maDonDatHang .$item->sanPham->maSanPham;
    $chiTietDH->soLuong = $item->soLuong;
    $chiTietDH->maDonDatHang = $donDatHang->maDonDatHang;
    $chiTietDH->giaBan = $item->sanPham->giaSanPham;
    $chiTietDH->maSanPham = $item->sanPham->maSanPham;

    $chiTietDHBUS->insert($chiTietDH);
    //var_dump($chiTietDH);
}

unset($_SESSION['cart']);
header("location:index.php?a=9");
?>