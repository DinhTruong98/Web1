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
    public function getByID($BID)
    {
        $hangSanXuatDAO = new hangSanXuatDAO();
        return $hangSanXuatDAO->getByID($BID);
    }

}

?>