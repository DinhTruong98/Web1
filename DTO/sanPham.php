<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/6/2018
 * Time: 6:15 PM
 */

class sanPham
{
    var $maSanPham;
    var $tenSanPham;
    var $hinhURL;
    var $giaSanPham;
    var $ngayNhap;
    var $soLuongTon;
    var $soLuongBan;
    var $soLuotXem;
    var $moTa;
    var $maLoaiSanPham;
    var $maHangSanXuat;
    var $biXoa;

    public function __construct()
    {
        $this->maSanPham = "";
        $this->tenLoaiSanPham = "";
        $this->hinhURL = "";
        $this->giaSanPham = 999999;
        $this->ngayNhap = "";
        $this->soLuongTon = 0;
        $this->soLuongBan = 0;
        $this ->soLuotXem = 0;
        $this->moTa = "";
        $this->maLoaiSanPham = 0;
        $this->maHangSanXuat = 0;
        $this->biXoa = 0;
    }
}
?>