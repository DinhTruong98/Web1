<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/7/2018
 * Time: 11:29 PM
 */

class taiKhoanBUS
{
    public function getAll()
    {
        $taiKhoanDAO = new taiKhoanDAO();
        return $taiKhoanDAO->getAll();
    }

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

    public function insert($taiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        if ($taiKhoanDAO->kiemTraTonTai($taiKhoan->tenDangNhap) == false)
        {
            $taiKhoanDAO->insert($taiKhoan);
            if ($taiKhoanDAO->kiemTraTonTai($taiKhoan->tenDangNhap) == true)
                return true;
            else return false;
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

    public function updateByAdmin($taiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        $taiKhoanDAO->updateByAdmin($taiKhoan);
        return true;
    }

    public function getByID($uid)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        return $taiKhoanDAO->getByID($uid);
    }

    public function detele($maTaiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        $taiKhoanDAO->delete($maTaiKhoan);
    }

    public function search($key)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        return $taiKhoanDAO->search($key);
    }

    public function setDelete($maTaiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        $taiKhoanDAO->setDelete($maTaiKhoan);
    }

    public function unsetDelete($maTaiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        $taiKhoanDAO->unsetDelete($maTaiKhoan);
    }

    public function setToMember($maTaiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        $taiKhoanDAO->setToMember($maTaiKhoan);
    }

    public function setToAdmin($maTaiKhoan)
    {
        $taiKhoanDAO = new taiKhoanDAO();
        $taiKhoanDAO->setToAdmin($maTaiKhoan);
    }
}

?>