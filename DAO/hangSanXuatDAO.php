<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/6/2018
 * Time: 5:36 PM
 */

class hangSanXuatDAO extends db
{
    public function getAvailable()
    {
        $listHangSanXuat = array();
        $query = "SELECT TenHangSanXuat, MaHangSanXuat FROM HangSanXuat WHERE  BiXoa=0";
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

    public function getAll()
    {
        $listHangSanXuat = array();
        $query = "SELECT TenHangSanXuat, MaHangSanXuat, BiXoa FROM HangSanXuat";
        $result = $this->executeQuery($query);
        //căt đối tượng thành từng dòng.
        while ($row = mysqli_fetch_array($result))
        {
            //cắt từng cột trong row, từng biến   extract($row);
            $hangSanXuat = new hangSanXuat();
            $hangSanXuat->tenHangSanXuat = $row["TenHangSanXuat"];
            $hangSanXuat->maHangSanXuat = $row["MaHangSanXuat"];
            $hangSanXuat->biXoa = $row["BiXoa"];
            $listHangSanXuat[] = $hangSanXuat;

        }
        return $listHangSanXuat;
    }

    public function getByID($BID)
    {
        $hangSanXuat = new hangSanXuat();
        $query = "SELECT TenHangSanXuat, MaHangSanXuat FROM HangSanXuat WHERE MaHangSanXuat = $BID";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {

            $hangSanXuat->tenHangSanXuat = $row["TenHangSanXuat"];
            $hangSanXuat->maHangSanXuat = $row["MaHangSanXuat"];

        }
        return $hangSanXuat;
    }

    public function getByName($bname)
    {
        $listHangSanXuat = array();
        $query = "SELECT TenHangSanXuat, MaHangSanXuat FROM HangSanXuat WHERE  BiXoa=0 AND TenHangSanXuat = '$bname'";
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

    public function getByID2($bid)
    {
        $listHangSanXuat = array();
        $query = "SELECT TenHangSanXuat, MaHangSanXuat FROM HangSanXuat WHERE MaHangSanXuat = '$bid'";
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

    public function insert($tenHangSanXuat)
    {
        $sql = "INSERT INTO HangSanXuat ( TenHangSanXuat, BiXoa) values ('$tenHangSanXuat',0)";
        $this->executeQuery($sql);
    }

    public function detete($MaHangSanXuat)
    {
        $sql = " DELETE FROM HangSanXuat WHERE  MaHangSanXuat = $MaHangSanXuat";
        $this->executeQuery($sql);
    }

    public function setDelete($MaHangSanXuat)
    {
        $sql = "UPDATE hangsanxuat SET BiXoa=1 WHERE MaHangSanXuat = '$MaHangSanXuat'";
        $this->executeQuery($sql);
    }


    public  function unsetDelete($MaHangSanXuat)
    {
        $sql = "UPDATE hangsanxuat SET BiXoa=0 WHERE MaHangSanXuat = '$MaHangSanXuat'";
        $this->executeQuery($sql);
    }

    public function update($hangSanXuat)
    {
        $sql = "UPDATE hangsanxuat SET TenHangSanXuat = '$hangSanXuat->tenHangSanXuat', BiXoa=$hangSanXuat->biXoa, LogoURL = '$hangSanXuat->logoURL' WHERE MaHangSanXuat = '$hangSanXuat->maHangSanXuat'";
        $this->executeQuery($sql);
    }
}

?>