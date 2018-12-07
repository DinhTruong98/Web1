<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/7/2018
 * Time: 11:05 PM
 */

class taiKhoan
{
    var $tenDangNhap;
    var $matKhau;
    var $maTaiKhoan;
    var $tenHienThi;
    var $diaChi;
    var $soDienThoai;
    var $email;
    var $biXoa;
    var $maLoaiTaiKhoan;

    public function __construct()
    {
        $this->maTaiKhoan = 0;
        $this->tenDangNhap = "";
        $this->matKhau = "";
        $this->tenHienThi = "";
        $this->diaChi = "";
        $this->email = "";
        $this->maLoaiTaiKhoan;
        $this->biXoa = 0;
        $this->soDienThoai = "";
    }

}

?>