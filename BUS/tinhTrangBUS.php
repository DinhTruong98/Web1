<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/27/2018
 * Time: 5:06 PM
 */
class tinhTrangBUS extends db
{
    public function getAll()
    {
        $tinhTrangDAO = new tinhTrangDAO();
        return $tinhTrangDAO->getAll();
    }

    public function delete()
    {

    }

    public function getByID($id)
    {
        $tinhTrangDAO = new tinhTrangDAO();
        return $tinhTrangDAO->getByID($id);
    }
}
?>