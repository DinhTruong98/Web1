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

    function getAvailable()
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        return $loaiSanPhamDAO->getAvailable();
    }

    public function getByTID($TID)
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        return $loaiSanPhamDAO->getByTID($TID);
    }

    public function update($loaiSanPham)
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        if ($this->isNull($loaiSanPhamDAO->getByID2($loaiSanPham->maLoaiSanPham)) == false)
        {
            $loaiSanPhamDAO->update($loaiSanPham);
            return true;
        }
        else return false;
    }


    public function delete($tid)
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        if ($this->isNull($loaiSanPhamDAO->getByID2($tid)) == false)
        {
            $loaiSanPhamDAO->detete($tid);
            return true;
        }
        else return false;
    }

    public function setDelete($tid)
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        if ($this->isNull($loaiSanPhamDAO->getByID2($tid)) == false)
        {
            $loaiSanPhamDAO->setDelete($tid);
            //echo 'BUS da chay';
            return true;
        }
        else return false;
    }

    public function unsetDelete($tid)
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        if ($this->isNull($loaiSanPhamDAO->getByID2($tid)) == false)
        {
            $loaiSanPhamDAO->unsetDelete($tid);
            return true;
        }
        else return false;
    }

    public function insert($tname)
    {
        $loaiSanPhamDAO = new loaiSanPhamDAO();
        if ($this->isNull($loaiSanPhamDAO->getByName($tname)) == true)
        {
            $loaiSanPhamDAO->insert($tname);
            return true;
        }
        else return false;
    }

    function isNull($list)
    {
        if (count($list) == 0)
            return true;
        return false;
    }
}

?>