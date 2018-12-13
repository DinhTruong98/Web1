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

        if ($taiKhoanDAO->kiemTaiKhoan($taiKhoan, $matKhau) == false)
        {
            //echo 'Tài khoản không tồn tại';
            return false;
        }
        return true;
    }

    public function loginByAdmin($taiKhoan, $matKhau)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        if ($taiKhoanDAO->loginByAdmin($taiKhoan, $matKhau) == true)
        {
            return true;
        }else return false;
    }

    public function register($taiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        if ($taiKhoanDAO->kiemTraTonTai($taiKhoan->tenDangNhap) == true)
        {
            return false;

        }
        else
        {
            $taiKhoanDAO->register($taiKhoan);
            if ($taiKhoanDAO->kiemTraTonTai($taiKhoan->tenDangNhap) == true)
            {
                return true;
            }else return false;
        }
    }
}

?>