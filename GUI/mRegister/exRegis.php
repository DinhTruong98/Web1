<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/12/2018
 * Time: 11:05 PM
 */
//var_dump($_POST);
if(($_POST['g-recaptcha-response']).count() <= 0){
    echo ("Captcha không đúng, vui lòng kiểm tra lại");
}else
{
    $response = $_POST['g-recaptcha-response'];
    $result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfQyYoUAAAAALfg7Mt8AhukdprfFEuEV93HOiPe&response=".$response."&remoteip=".$_SERVER['REMOTE_ADDR']);
    if ($result.succsess == false)
    {
        echo ("Captcha không đúng, vui lòng kiểm tra lại");
    }
    else{
        if (isset($_POST['account']) == true)
        {
            $taiKhoan = new taiKhoan();
            $taiKhoan->tenDangNhap =    addslashes($_POST['account']);
            $taiKhoan->matKhau = password_hash(addslashes(stripcslashes($_POST['password'])), PASSWORD_DEFAULT);
            $taiKhoan->tenHienThi =     addslashes($_POST['displayname']);
            $taiKhoan->email =          addslashes($_POST['email']);
            $taiKhoan->soDienThoai =    addslashes($_POST['phonenumber']);
            $taiKhoan->diaChi =         addslashes($_POST['address']);
            $taiKhoanBUS =              new taiKhoanBUS();
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
    }
}

?>
