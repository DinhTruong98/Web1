<?php

if (isset($_GET['uid']) == false)
    header("location:admin.php?a=6");
$uid = $_GET['uid'];
$taiKhoanBUS = new taiKhoanBUS();
$taiKhoan = $taiKhoanBUS->getByID($uid);
//var_dump($taiKhoan);
?>

<div class="container">
    <h3>Cập nhật thông tin cho người dùng '<?php echo $taiKhoan->tenDangNhap;?>':</h3>
    <form action="admin.php?a=116" method="post">
        <input type="text" placeholder="<?php echo $taiKhoan->tenDangNhap;?>"  readonly> <i>Tên đăng nhập - không được sửa</i>
        <br /><br />
        <input type="text" placeholder="Mật khẩu" readonly> <i>Mật khẩu - không được sửa</i>
        <br /><br />
        <input type="text" placeholder="<?php echo $taiKhoan->tenHienThi;?>" name="udisplay" required> <i>Tên hiển thị</i>
        <br /><br />
        <input type="text" placeholder="<?php echo $taiKhoan->soDienThoai;?>" name="uphone" required> <i>Số điện thoại</i>
        <br /><br />
        <input type="text" placeholder="<?php echo $taiKhoan->email;?>" name="umail" required> <i>Email</i>
        <br /><br />
        <input type="text" placeholder="<?php echo $taiKhoan->diaChi;?>" name="uaddress" required> <i>Địa chỉ</i>
        <br /><br />
        <input type="number" placeholder="<?php echo $taiKhoan->maLoaiTaiKhoan;?>" name="urole" required> <i>*nhập: 0 - Người quản trị, 1 - khách hàng</i>
        <br /><br />
        <input type="hidden" name="uid" value="<?php echo $taiKhoan->maTaiKhoan;?>">

        <input type="submit" class="btn btn-success" value="Xác nhận">
    </form>

</div>