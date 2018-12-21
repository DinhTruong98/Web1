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
        $query = "SELECT MaLoaiSanPham, TenLoaiSanPham, BiXoa FROM loaisanpham";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result)) {
            $loaiSanPham = new loaiSanPham();
            $loaiSanPham->tenLoaiSanPham = $row["TenLoaiSanPham"];
            $loaiSanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $loaiSanPham->biXoa = $row["BiXoa"];
            $listLoaiSanPham[] = $loaiSanPham;

        }
        return $listLoaiSanPham;

    }

    public function getAvailable()
    {
        $listLoaiSanPham = array();
        $query = "SELECT MaLoaiSanPham, TenLoaiSanPham, BiXoa FROM loaisanpham WHERE BiXoa = 0";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result)) {
            $loaiSanPham = new loaiSanPham();
            $loaiSanPham->tenLoaiSanPham = $row["TenLoaiSanPham"];
            $loaiSanPham->maLoaiSanPham = $row["MaLoaiSanPham"];
            $listLoaiSanPham[] = $loaiSanPham;

        }
        return $listLoaiSanPham;
    }

    public function getByTID($TID)
    {
        $loaiSanPham = new loaiSanPham();
        $query = "SELECT MaLoaiSanPham, TenLoaiSanPham, BiXoa FROM loaisanpham WHERE BiXoa = 0 AND MaLoaiSanPham = $TID";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $loaiSanPham->tenLoaiSanPham = $row["TenLoaiSanPham"];
            $loaiSanPham->maLoaiSanPham = $row["MaLoaiSanPham"];

        }
        return $loaiSanPham;

    }


    public function getByID2($tid)
    {
        $listHangSanXuat = array();
        $query = "SELECT TenLoaiSanPham, MaLoaiSanPham FROM LoaiSanPham WHERE MaLoaiSanPham = '$tid'";
        $result = $this->executeQuery($query);
        //căt đối tượng thành từng dòng.
        while ($row = mysqli_fetch_array($result))
        {
            //cắt từng cột trong row, từng biến   extract($row);
            $hangSanXuat = new hangSanXuat();
            $hangSanXuat->tenHangSanXuat = $row["TenHangSanXuat"];
            $hangSanXuat->maHangSanXuat = $row["MaHangSanXuat"];
            $listHangSanXuat[] = $hangSanXuat;

        }
        return $listHangSanXuat;
    }

    public function getByName($tname)
    {
        $listHangSanXuat = array();
        $query = "SELECT TenLoaiSanPham, MaLoaiSanPham FROM LoaiSanPham WHERE  BiXoa=0 AND TenLoaiSanPham = '$tname'";
        $result = $this->executeQuery($query);
        //căt đối tượng thành từng dòng.
        while ($row = mysqli_fetch_array($result))
        {
            //cắt từng cột trong row, từng biến   extract($row);
            $hangSanXuat = new hangSanXuat();
            $hangSanXuat->tenHangSanXuat = $row["TenHangSanXuat"];
            $hangSanXuat->maHangSanXuat = $row["MaHangSanXuat"];
            $listHangSanXuat[] = $hangSanXuat;

        }
        return $listHangSanXuat;
    }

    public function insert($tenLoaiSanPham)
    {
        $sql = "INSERT INTO loaisanpham ( TenLoaiSanPham, BiXoa) values ('$tenLoaiSanPham',0)";
        $this->executeQuery($sql);
        //echo 'Ham nay da duoc hoi o on dao';
    }

    public function detete($maLoaiSanPham)
    {
        $sql = " DELETE FROM LoaiSanPham WHERE  MaLoaiSanPham = $maLoaiSanPham";
        $this->executeQuery($sql);
    }

    public function setDelete($maLoaiSanPham)
    {
        $sql = "UPDATE LoaiSanPham SET BiXoa=1 WHERE MaLoaiSanPham = $maLoaiSanPham";
        $this->executeQuery($sql);
        //echo $sql;
    }


    public  function unsetDelete($maLoaiSanPham)
    {
        $sql = "UPDATE LoaiSanPham SET BiXoa=0 WHERE MaLoaiSanPham = '$maLoaiSanPham'";
        $this->executeQuery($sql);
    }

    public function update($loaiSanPham)
    {
        $sql = "UPDATE LoaiSanPham SET TenLoaiSanPham = '$loaiSanPham->tenLoaiSanPham', BiXoa=$loaiSanPham->biXoa  WHERE MaLoaiSanPham = '$loaiSanPham->maLoaiSanPham'";
        $this->executeQuery($sql);
    }
}
?>