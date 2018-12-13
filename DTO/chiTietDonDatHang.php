<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 7:23 PM
 */

class chiTietDonDatHang
{
    var $maChiTietDonDatHang;
    var $soLuong;
    var $giaBan;
    var $maDonDatHang;
    var $maSanPham;

    public  function __construct()
    {
        $this->maChiTietDonDatHang = "";
        $this->soLuong = 0;
        $this->giaBan = 0;
        $this->maDonDatHang="";
        $this->maSanPham = 0;
    }
}

?>