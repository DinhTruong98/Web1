<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/12/2018
 * Time: 11:05 PM
 */

    if (isset($_POST['account']) == true)
    {
        $taiKhoan = new taiKhoan();
        $taiKhoan->tenDangNhap = $_POST['account'];
        $taiKhoan->matKhau = $_POST['password'];
        $taiKhoan->tenHienThi = $_POST['displayname'];
        $taiKhoan->email = $_POST['email'];
        $taiKhoan->soDienThoai = $_POST['phonenumber'];
        $taiKhoan->diaChi = $_POST['address'];
        $taiKhoanBUS = new taiKhoanBUS();
        if($taiKhoanBUS->register($taiKhoan) == true)
        {
            echo 'Đăng kí thành công, vui lòng đăng nhập';
        }
        else
        {
            echo 'Đăng kí thất bại, có thể tài khoản đã bị trùng hoặc thông tin không hợp lệ, vui lòng kiểm tra lại';
            echo $taiKhoan->tenDangNhap;
        }
    }
?>