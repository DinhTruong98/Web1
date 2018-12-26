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
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham";
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

    public function getByID2($pid)
    {
        $listSanPham = array();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham where MaSanPham = $pid";
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

    public function getAvailable()
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

    public function searchByName($tenSanPham)
    {
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0 AND TenSanPham LIKE '%$tenSanPham%'";
        $result = $this->executeQuery($query);
        $listSanPham = array();
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

    public function getByName($tenSanPham)
    {
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE TenSanPham = '$tenSanPham'";
        $result = $this->executeQuery($query);
        $listSanPham = array();
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

    public function getRelative($sanPham)
    {
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE BiXoa = 0 AND MaLoaiSanPham = $sanPham->maLoaiSanPham ORDER BY SoLuotXem DESC LIMIT 5";
        $result = $this->executeQuery($query);
        $listSanPham = array();
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
    //Hàm này sẽ tăng số luọt xem lên 1
    public function viewCount($maSanPham, $soLuotXemHienTai)
    {
        $luotXem = $soLuotXemHienTai + 1;
        $query = "UPDATE sanpham SET SoLuotXem =$luotXem WHERE MaSanPham = $maSanPham";

        $this->executeQuery($query);
    }

    public function insert($sanPham)
    {
        $query = "INSERT INTO sanpham(TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat,SoLuongBan,SoLuotXem) VALUES ('$sanPham->tenSanPham','$sanPham->hinhURL',$sanPham->giaSanPham,CURDATE(),$sanPham->soLuongTon,'$sanPham->moTa', 0,$sanPham->maLoaiSanPham,$sanPham->maHangSanXuat,0,0)";
        $this->executeQuery($query);
    }

    public function delete($pid)
    {
        $sql = "DELETE FROM SanPham where MaSanPham = $pid";
        $this->executeQuery($sql);
    }

    public function setDelete($maSanPham)
    {
        $sql = "UPDATE sanpham SET BiXoa=1 WHERE MaSanPham = $maSanPham";
        $this->executeQuery($sql);
        echo $sql;
    }

    public function unsetDelete($maSanPham)
    {
        $sql = "UPDATE sanpham SET BiXoa=0 WHERE MaSanPham = $maSanPham";
        $this->executeQuery($sql);
        echo $sql;
    }

    public function update($sanPham)
    {
        $query = "UPDATE sanpham SET TenSanPham='$sanPham->tenSanPham',HinhURL='$sanPham->hinhURL',GiaSanPham=$sanPham->giaSanPham,SoLuongTon=$sanPham->soLuongTon,MoTa='$sanPham->moTa',MaLoaiSanPham=$sanPham->maLoaiSanPham,MaHangSanXuat=$sanPham->maHangSanXuat WHERE MaSanPham = $sanPham->maSanPham";
        $this->executeQuery($query);
        //echo $query;
    }

    public function search($key)
    {
        $listSanPham = array();
        $query = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuotXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat FROM sanpham WHERE TenSanPham like '%$key%'";
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