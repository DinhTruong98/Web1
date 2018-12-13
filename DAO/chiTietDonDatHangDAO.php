<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 8:55 PM
 */

class chiTietDonDatHangDAO extends db
{
    public  function getALL()
    {
        $listChiTietDonDatHang = array();
        $query = "SELECT MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham FROM ChiTietDonDatHang";
        $result = $this->executeQuery($query);
        //cat doi tuong thanh tung dong
        while ($row = mysqli_fetch_array($result))
        {
            $ChiTietDonDatHang = new chiTietDonDatHang();
            $ChiTietDonDatHang->maChiTietDonDatHang = $row["MaChiTiecDonDatHang"];
            $ChiTietDonDatHang->soLuong = $row["SoLuong"];
            $ChiTietDonDatHang->giaBan = $row["GiaBan"];
            $ChiTietDonDatHang->maDonDatHang = $row["MaDonDatHang"];
            $ChiTietDonDatHang->maSanPham = $row["MaSanPham"];
            $listChiTietDonDatHang[]  = $ChiTietDonDatHang;
        }
        return $listChiTietDonDatHang;
    }

    public  function getByID($MaChiTietDonDatHang)
    {

        $query = "SELECT MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham FROM ChiTietDonDatHang where MaChiTietDonDatHang = $MaChiTietDonDatHang ";
        $result = $this->executeQuery($query);
        //cắt doi tuong thanh tung dong
        if ($result == null)
            return null;

        $row = mysqli_fetch_array($result); //neu không có dòng này hàm row sẽ bị lỗi.
        $ChiTietDonDatHang = new chiTietDonDatHang();
        $ChiTietDonDatHang->maChiTietDonDatHang = $row["MaChiTiecDonDatHang"];
        $ChiTietDonDatHang->soLuong = $row["SoLuong"];
        $ChiTietDonDatHang->giaBan = $row["GiaBan"];
        $ChiTietDonDatHang->maDonDatHang = $row["MaDonDatHang"];
        $ChiTietDonDatHang->maSanPham = $row["MaSanPham"];
        $listChiTietDonDatHang[]  = $ChiTietDonDatHang;

        return $ChiTietDonDatHang;
    }

}
?>