<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/6/2018
 * Time: 6:17 PM
 */

class loaiSanPhamDAO extends db
{
    public function getAll()
    {
        $listLoaiSanPham = array();
        $query = "SELECT MaLoaiSanPham, TenLoaiSanPham, BiXoa FROM loaisanpham WHERE BiXoa = 0";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $loaiSanPham = new loaiSanPham();
            $loaiSanPham->tenLoaiSanPham = $row["TenLoaiSanPham"];
            $loaiSanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $listLoaiSanPham[] = $loaiSanPham;

        }
        return $listLoaiSanPham;

    }
}