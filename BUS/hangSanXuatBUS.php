<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/6/2018
 * Time: 6:01 PM
 */

class hangSanXuatBUS
{
    public function getAll()
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        return $hangSanXuatDAO->getAll();
    }

    public function getAvailable()
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        return $hangSanXuatDAO->getAvailable();
    }

    public function getByID($BID)
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        return $hangSanXuatDAO->getByID($BID);
    }

    public function insert($bname)
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        if ($this->isNull($hangSanXuatDAO->getByName($bname)) == true)
        {
            $hangSanXuatDAO->insert($bname);
            return true;
        }
        else return false;
    }

    public function delete($bid)
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        if ($this->isNull($hangSanXuatDAO->getByID2($bid)) == false)
        {
            $hangSanXuatDAO->detete($bid);
            return true;
        }
        else return false;
    }

    public function setDelete($bid)
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        if ($this->isNull($hangSanXuatDAO->getByID2($bid)) == false)
        {
            $hangSanXuatDAO->setDelete($bid);
            return true;
        }
        else return false;
    }

    public function unsetDelete($bid)
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        if ($this->isNull($hangSanXuatDAO->getByID2($bid)) == false)
        {
            $hangSanXuatDAO->unsetDelete($bid);
            return true;
        }
        else return false;
    }

    public function update($hangSanXuat)
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        if ($this->isNull($hangSanXuatDAO->getByID2($hangSanXuat->maHangSanXuat)) == false)
        {
            $hangSanXuatDAO->update($hangSanXuat);
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