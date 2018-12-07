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
            echo 'Dang nhap thanh cong';
            return true;
        }else return false;
    }
}

?>