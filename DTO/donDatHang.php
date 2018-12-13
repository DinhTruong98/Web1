<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 7:28 PM
 */

class donDatHang
{
    var $maDonDatHang;
    var $ngayLap;
    var $tongThanhTien;
    var $maTaiKhoan;
    var $maTinhTrang;

    public function  __construct()
    {
        $this->maDonDatHang = "";
        $this->ngayLap = '1/1/1998';
        $this->tongThanhTien=0;
        $this->maTaiKhoan=0;
        $this->maTinhTrang=0;
    }
}
?>