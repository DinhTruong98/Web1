<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/6/2018
 * Time: 6:38 PM
 */

class sanPhamDAO extends db
{
    public function getAll()
    {
        $listSanPham = array();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $sanPham = new sanPham();
            $sanPham->tenSanPham = $row["TenSanPham"];
            $sanPham->maSanPham = $row["MaSanPham"];
            $sanPham->hinhURL = $row["HinhURL"];
            $sanPham->giaSanPham = $row["GiaSanPham"];
            $sanPham->ngayNhap = $row["NgayNhap"];
            $sanPham->soLuongTon = $row["SoLuongTon"];
            $sanPham->soLuongBan = $row["SoLuongBan"];
            $sanPham->soLuotXem = $row["SoLuotXem"];
            $sanPham->moTa = $row["MoTa"];
            $sanPham->biXoa = $row["BiXoa"];
            $sanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $sanPham->maHangSanXuat = $row["MaHangSanXuat"];

            $listSanPham[] = $sanPham;

        }
        return $listSanPham;
    }

    public function getByID($pid)
    {
        $sanPham = new sanPham();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0 and MaSanPham = $pid";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $sanPham = new sanPham();
            $sanPham->tenSanPham = $row["TenSanPham"];
            $sanPham->maSanPham = $row["MaSanPham"];
            $sanPham->hinhURL = $row["HinhURL"];
            $sanPham->giaSanPham = $row["GiaSanPham"];
            $sanPham->ngayNhap = $row["NgayNhap"];
            $sanPham->soLuongTon = $row["SoLuongTon"];
            $sanPham->soLuongBan = $row["SoLuongBan"];
            $sanPham->soLuotXem = $row["SoLuotXem"];
            $sanPham->moTa = $row["MoTa"];
            $sanPham->biXoa = $row["BiXoa"];
            $sanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $sanPham->maHangSanXuat = $row["MaHangSanXuat"];

        }
        return $sanPham;
    }


    public function getNewest()
    {
        $listSanPham = array();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0 ORDER BY NgayNhap DESC LIMIT 10";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $sanPham = new sanPham();
            $sanPham->tenSanPham = $row["TenSanPham"];
            $sanPham->maSanPham = $row["MaSanPham"];
            $sanPham->hinhURL = $row["HinhURL"];
            $sanPham->giaSanPham = $row["GiaSanPham"];
            $sanPham->ngayNhap = $row["NgayNhap"];
            $sanPham->soLuongTon = $row["SoLuongTon"];
            $sanPham->soLuongBan = $row["SoLuongBan"];
            $sanPham->soLuotXem = $row["SoLuotXem"];
            $sanPham->moTa = $row["MoTa"];
            $sanPham->biXoa = $row["BiXoa"];
            $sanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $sanPham->maHangSanXuat = $row["MaHangSanXuat"];

            $listSanPham[] = $sanPham;

        }
        return $listSanPham;
    }

    public function getBySold()
    {
        $listSanPham = array();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0 ORDER BY SoLuongBan DESC LIMIT 10";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $sanPham = new sanPham();
            $sanPham->tenSanPham = $row["TenSanPham"];
            $sanPham->maSanPham = $row["MaSanPham"];
            $sanPham->hinhURL = $row["HinhURL"];
            $sanPham->giaSanPham = $row["GiaSanPham"];
            $sanPham->ngayNhap = $row["NgayNhap"];
            $sanPham->soLuongTon = $row["SoLuongTon"];
            $sanPham->soLuongBan = $row["SoLuongBan"];
            $sanPham->soLuotXem = $row["SoLuotXem"];
            $sanPham->moTa = $row["MoTa"];
            $sanPham->biXoa = $row["BiXoa"];
            $sanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $sanPham->maHangSanXuat = $row["MaHangSanXuat"];

            $listSanPham[] = $sanPham;

        }
        return $listSanPham;
    }


    public function getByBrand($brandID)
    {
        $listSanPham = array();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0 and MaHangSanXuat=$brandID";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $sanPham = new sanPham();
            $sanPham->tenSanPham = $row["TenSanPham"];
            $sanPham->maSanPham = $row["MaSanPham"];
            $sanPham->hinhURL = $row["HinhURL"];
            $sanPham->giaSanPham = $row["GiaSanPham"];
            $sanPham->ngayNhap = $row["NgayNhap"];
            $sanPham->soLuongTon = $row["SoLuongTon"];
            $sanPham->soLuongBan = $row["SoLuongBan"];
            $sanPham->soLuotXem = $row["SoLuotXem"];
            $sanPham->moTa = $row["MoTa"];
            $sanPham->biXoa = $row["BiXoa"];
            $sanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $sanPham->maHangSanXuat = $row["MaHangSanXuat"];

            $listSanPham[] = $sanPham;

        }
        return $listSanPham;
    }

    public function getByType($typeID)
    {
        $listSanPham = array();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0 and MaLoaiSanPham=$typeID";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $sanPham = new sanPham();
            $sanPham->tenSanPham = $row["TenSanPham"];
            $sanPham->maSanPham = $row["MaSanPham"];
            $sanPham->hinhURL = $row["HinhURL"];
            $sanPham->giaSanPham = $row["GiaSanPham"];
            $sanPham->ngayNhap = $row["NgayNhap"];
            $sanPham->soLuongTon = $row["SoLuongTon"];
            $sanPham->soLuongBan = $row["SoLuongBan"];
            $sanPham->soLuotXem = $row["SoLuotXem"];
            $sanPham->moTa = $row["MoTa"];
            $sanPham->biXoa = $row["BiXoa"];
            $sanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $sanPham->maHangSanXuat = $row["MaHangSanXuat"];

            $listSanPham[] = $sanPham;

        }
        return $listSanPham;
    }

    public function INSERT($SanPham)
    {
        $sql = "INSERT INTO SanPham (MaSanPham, TenSanPham, HinhURl, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat) 
        values ($SanPham->MaSanPham, '$SanPham->TenSanPham','$SanPham->HinhURL', $SanPham->GiaSanPham, $SanPham->NgayNhap, $SanPham->SoLuonTon, 
         $SanPham->SoLuongBan, $SanPham->SoLuotXem, $SanPham->MoTa, $SanPham->BiXoa, $SanPham->MaLoaiSanPham, $SanPham->MaHangSanPham )";
        $this->executeQuery($sql);
    }

    public function DELETE($SanPham)
    {
        $sql = "DELETE FROM SanPham where MaSanPham = $SanPham->MaSanPham";
        $this->executeQuery($sql);
    }

    public function SETDETELE($SanPham)
    {

    }

    public function UNSETDELETE($SanPham)
    {

    }

    public function UPDATE($SanPham)
    {

    }

}

?>