<?php
/**
 * Created by PhpStorm.
 * User: CD
 * Date: 2018-12-21
 * Time: 15:51
 */

if (isset($_POST['uname']) == false)
    header("location:admin.php?a=2");
$taiKhoan = new taiKhoan();
$taiKhoan->tenDangNhap = $_POST['uname'];
$taiKhoan->matKhau = $_POST['upwd'];
$taiKhoan->email = $_POST['umail'];
$taiKhoan->soDienThoai = $_POST['uphone'];
$taiKhoan->diaChi = $_POST['uaddress'];
$taiKhoan->tenHienThi = $_POST['udisplay'];
$taiKhoan->maLoaiTaiKhoan = $_POST['urole'];

//var_dump($taiKhoan);
$taiKhoanBUS = new taiKhoanBUS();
if($taiKhoanBUS->updateByAdmin($taiKhoan) == true)
{
    header("location:admin.php?a=6");
}else
    echo 'Thêm không thành công, vui lòng kiểm tra lại tên, có thể bị trùng';
echo '<br></br><a href="admin.php?a=6" class="btn btn-danger">Click vào đây để trở về</a>';
?>
