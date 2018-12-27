<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 8:55 PM
 */

class chiTietDonDatHangDAO extends db
{
    public function deteleByOID($odid)
    {
        $sql = "DELETE FROM ChiTietDonDatHang where MaDonDatHang = '$odid'";
        $this->executeQuery($sql);
        //echo $sql;
    }

    public function detele($odid)
    {
        $sql = "DELETE FROM ChiTietDonDatHang where maChiTietDonDatHang = $odid";
        $this->executeQuery($sql);
    }

    public  function getAll()
    {
        $listChiTietDonDatHang = array();
        $query = "SELECT MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham FROM ChiTietDonDatHang";
        $result = $this->executeQuery($query);
        //cat doi tuong thanh tung dong
        while ($row = mysqli_fetch_array($result))
        {
            $ChiTietDonDatHang = new chiTietDonDatHang();
            $ChiTietDonDatHang->maChiTietDonDatHang = $row["MaChiTietDonDatHang"];
            $ChiTietDonDatHang->soLuong = $row["SoLuong"];
            $ChiTietDonDatHang->giaBan = $row["GiaBan"];
            $ChiTietDonDatHang->maDonDatHang = $row["MaDonDatHang"];
            $ChiTietDonDatHang->maSanPham = $row["MaSanPham"];
            $listChiTietDonDatHang[]  = $ChiTietDonDatHang;
        }
        return $listChiTietDonDatHang;
    }

    public  function getByOID($oid)
    {
        $listChiTietDonDatHang = array();
        $query = "SELECT MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham FROM ChiTietDonDatHang WHERE MaDonDatHang = '$oid'";
        $result = $this->executeQuery($query);
        //cat doi tuong thanh tung dong
        while ($row = mysqli_fetch_array($result))
        {
            $ChiTietDonDatHang = new chiTietDonDatHang();
            $ChiTietDonDatHang->maChiTietDonDatHang = $row["MaChiTietDonDatHang"];
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
    // Xem lai 5 ham nay.!
    public function  insert($chiTietDonDatHang)
    {
        $sql = "insert into chiTietDonDatHang(maChiTietDonDatHang, soLuong, giaBan, maDonDatHang, maSanPham) values('$chiTietDonDatHang->maChiTietDonDatHang',$chiTietDonDatHang->soLuong,$chiTietDonDatHang->giaBan, '$chiTietDonDatHang->maDonDatHang', $chiTietDonDatHang->maSanPham) ";
        $this->executeQuery($sql);
    }


    public function SetDelete($ChiTietDonDatHang)
    {
        $sql = "UPDATE ChiTietDonDat Set BiXoa = 1 where MaChiTietDonDatHang = $ChiTietDonDatHang->MaChiTietDonDatHang";
        $this->executeQuery($sql);
    }

    public  function  UnsetDelete($ChiTietDonDatHang)
    {
        $sql = "UPDATE ChiTietDonDatHang Set BiXoa = 0 where  MaChiTietDondatHang = $ChiTietDonDatHang->MaChiTietDonDatHang";
        $this->executeQuery($sql);
    }

    public  function  UPDATE($ChiTietDonDatHang)
    {
        $sql = "UPDATE ChiTietDonDatHang SET MaChiTietDonDatHang = $ChiTietDonDatHang->MaChiTietDonDatHang where  MaChiTietDonDatHang = $ChiTietDonDatHang->MaChiTietDonDatHang";
        $this->executeQuery($sql);

    }



}
?>