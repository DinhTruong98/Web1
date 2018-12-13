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
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau' AND BiXoa = 0";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            //echo 'Sai tài khoản hoặc mật khẩu';
            return false;
        }
        return true;
    }

    public function loginByAdmin($tenDangNhap, $matKhau)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau' AND BiXoa = 0 AND MaLoaiTaiKhoan = 0";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            //echo 'Sai tài khoản hoặc mật khẩu';
            return false;
        }
        return true;
    }
    public function register($taiKhoan)
    {
        $query = "INSERT INTO taikhoan(TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan) VALUES ('$taiKhoan->tenDangNhap','$taiKhoan->matKhau',N'$taiKhoan->tenHienThi','$taiKhoan->diaChi','$taiKhoan->soDienThoai','$taiKhoan->email',0,1)";
        $result = $this->executeQuery($query);

    }
    public function kiemTraTonTai($tenDangNhap)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap'";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            return false;
        }
        return true;
    }

    public function kiemTaiKhoan($tenDangNhap, $matKhau)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau' AND BiXoa = 0";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            return false;
        }
        return true;
    }
}

?>