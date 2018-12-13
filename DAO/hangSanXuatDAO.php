<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/6/2018
 * Time: 5:36 PM
 */

class hangSanXuatDAO extends db
{
    public function getAll()
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

    public function getByID($BID)
    {
        $hangSanXuat = new hangSanXuat();
        $query = "SELECT TenHangSanXuat, MaHangSanXuat FROM HangSanXuat WHERE BiXoa=0 AND MaHangSanXuat = $BID";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {

            $hangSanXuat->tenHangSanXuat = $row["TenHangSanXuat"];
            $hangSanXuat->maHangSanXuat = $row["MaHangSanXuat"];
            $listHangSanXuat[] = $hangSanXuat;

        }
        return $hangSanXuat;


    }
}

?>