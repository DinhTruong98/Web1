<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/6/2018
 * Time: 6:23 PM
 */
class loaiSanPhamBUS
{
    public function getAll()
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        return $loaiSanPhamDAO->getAll();
    }

    public function getByTID($TID)
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        return $loaiSanPhamDAO->getByTID($TID);
    }

}

?>