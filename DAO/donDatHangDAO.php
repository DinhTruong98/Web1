<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 9:45 PM
 */

class donDatHangDAO extends db
{
    public  function  getALL()
    {
        $listDonDatHang = array();
        $query = "Select MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang from DonDatHang";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $DonDatHang = new DonDatHang();
            $DonDatHang->maDonDatHang = $row["MaDonDatHang"];
            $DonDatHang->ngayLap= $row["NgayLap"];
            $DonDatHang->tongThanhTien = $row["TongThanhTien"];
            $DonDatHang->maTaiKhoan = $row["MaTaiKhoan"];
            $DonDatHang->maTinhTrang = $row["TinhTrang"];
            $listDonDatHang[] = $DonDatHang;
        }
        return $listDonDatHang;
    }

    public  function  getByID($MaDonDatHang)
    {

        $query = "Select MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang from DonDatHang where MaDonDatHang = $MaDonDatHang";
        $result = $this->executeQuery($query);
        //cắt doi tuong thanh tung dong
        if ($result == null)
            return null;

        $row = mysqli_fetch_array($result);
            $DonDatHang = new DonDatHang();
            $DonDatHang->maDonDatHang = $row["MaDonDatHang"];
            $DonDatHang->ngayLap= $row["NgayLap"];
            $DonDatHang->tongThanhTien = $row["TongThanhTien"];
            $DonDatHang->maTaiKhoan = $row["MaTaiKhoan"];
            $DonDatHang->maTinhTrang = $row["TinhTrang"];

        return $DonDatHang;
    }
}

