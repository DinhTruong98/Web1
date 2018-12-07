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
}

?>