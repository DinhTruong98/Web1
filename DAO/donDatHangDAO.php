<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 9:45 PM
 */

class donDatHangDAO extends db
{
    public  function  getAll()
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
            $DonDatHang->maTinhTrang = $row["MaTinhTrang"];
            $listDonDatHang[] = $DonDatHang;
        }
        return $listDonDatHang;
    }

    public  function  getByUserID($uid)
    {
        $listDonDatHang = array();
        $query = "Select MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang from DonDatHang WHERE MaTaiKhoan = $uid";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $DonDatHang = new DonDatHang();
            $DonDatHang->maDonDatHang = $row["MaDonDatHang"];
            $DonDatHang->ngayLap= $row["NgayLap"];
            $DonDatHang->tongThanhTien = $row["TongThanhTien"];
            $DonDatHang->maTaiKhoan = $row["MaTaiKhoan"];
            $DonDatHang->maTinhTrang = $row["MaTinhTrang"];
            $listDonDatHang[] = $DonDatHang;
        }
        return $listDonDatHang;
    }

    public function getByID($MaDonDatHang)
    {

        $query = "Select MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang from DonDatHang where MaDonDatHang = '$MaDonDatHang'";
        $result = $this->executeQuery($query);
        //cắt doi tuong thanh tung dong
        $row = mysqli_fetch_array($result);
            $DonDatHang = new DonDatHang();
            $DonDatHang->maDonDatHang = $row["MaDonDatHang"];
            $DonDatHang->ngayLap= $row["NgayLap"];
            $DonDatHang->tongThanhTien = $row["TongThanhTien"];
            $DonDatHang->maTaiKhoan = $row["MaTaiKhoan"];
            $DonDatHang->maTinhTrang = $row["MaTinhTrang"];
            //echo $query;
        return $DonDatHang;
    }



    public function insert($DonDatHang)
    {
        $sql = "INSERT INTO DonDatHang(MaDonDatHang,NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang) values ('$DonDatHang->maDonDatHang', NOW(), $DonDatHang->tongThanhTien,$DonDatHang->maTaiKhoan, 1)";
        $this->executeQuery($sql);
        //echo $sql;
    }

    public function giamSoLuong()
    {

    }

    public function updateStatus($maTrangThai, $maDonHang)
    {
        $query = "UPDATE dondathang SET MaTinhTrang = $maTrangThai WHERE MaDonDatHang = '$maDonHang'";
        $this->executeQuery($query);
        echo ($query);
    }

    public function delete($oid)
    {
        $sql = "DELETE FROM DonDatHang where MaDonDatHang = '$oid'";
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

