<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/7/2018
 * Time: 11:14 PM
 */

class taiKhoanDAO extends db
{
    public function getAll()
    {

    }

    public function login($tenDangNhap, $matKhau)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau'";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            echo 'Sai tài khoản hoặc mật khẩu';
            return false;
        }
        return true;
    }
}

?>