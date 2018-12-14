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

    public function INSERT($DonDatHang)
    {
        $sql = "INSERT INTO DonDatHang(MaDonDatHang,NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang) values ('$DonDatHang->MaDonDatHang', '$DonDatHang->NgayLap', $DonDatHang->TongThanhTien,$DonDatHang->MaTaiKhoan, $DonDatHang->MaTinhTrang)";
        $this->executeQuery($sql);
    }

    public function DELETE($DonDatHang)
    {
        $sql = "DELETE FROM DonDatHang where MaDonDatHang = $DonDatHang->MaDonHang";
        $this->executeQuery($sql);
    }

    public function SetDelete($DonDatHang)
    {

    }

    public function UnSetDelete($DonDatHang)
    {

    }

    public  function Update($DonDatHang)
    {

    }
}

