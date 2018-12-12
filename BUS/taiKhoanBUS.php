<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/7/2018
 * Time: 11:29 PM
 */

class taiKhoanBUS
{
    public function login($taiKhoan, $matKhau)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        if ($taiKhoanDAO->login($taiKhoan, $matKhau) == true)
        {
            return true;
        }else return false;
    }

    public function loginByAdmin($taiKhoan, $matKhau)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        if ($taiKhoanDAO->loginByAdmin($taiKhoan, $matKhau) == true)
        {
            return true;
        }else return false;
    }
}

?>