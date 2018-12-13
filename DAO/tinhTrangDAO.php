<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 10:51 PM
 */

class tinhTrangDAO extends db
{
    public function  getALL()
    {
        $listTinhTrang = array();
        $query = "Select MaTinhTrang, TenTinhTrang from TinhTrang";
        $result = this->$this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $TinhTrang = new TinhTrang();
            $TinhTrang->maTinhTrang = $row["MaTinhTrang"];
            $TinhTrang->tenTinhTrang = $row["TenTinhTrang"];
            $listTinhTrang[] = $TinhTrang;
        }
        return $listTinhTrang;
    }

    public function  getByID($MaTinhTrang)
    {

        $query = "Select MaTinhTrang, TenTinhTrang from TinhTrang where MaTinhTrang = $MaTinhTrang";
        $result = $this->executeQuery($query);
        //cắt doi tuong thanh tung dong
        if ($result == null)
            return null;

        $row = mysqli_fetch_array($result);
        $TinhTrang = new TinhTrang();
        $TinhTrang->maTinhTrang = $row["MaTinhTrang"];
        $TinhTrang->tenTinhTrang = $row["TenTinhTrang"];
        $listTinhTrang[] = $TinhTrang;

        return $TinhTrang;
    }
}
