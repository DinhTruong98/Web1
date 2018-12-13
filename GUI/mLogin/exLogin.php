<?php
if (isset($_POST['account']) == true) {
    $acc = $_POST['account'];
    $pass = $_POST['password'];
    $taiKhoanBUS = new taiKhoanBUS();

    if($taiKhoanBUS->loginByAdmin($acc, $pass) == true)
    {
        $_SESSION['account'] = $acc;
        echo "<a class='h1' href='index.php'>Đăng nhập thành công click vào đây để trở về trang chủ</a>";
    }else
        if($taiKhoanBUS->login($acc, $pass) == true)
        {
            $_SESSION['account'] = $acc;
            echo "<a class='h1' href='index.php'>Đăng nhập thành công click vào đây để trở về trang chủ</a>";
            //header("index.php");
        }else
        {
            echo 'Sai tài khoản hoặc mật khẩu, vui lòng kiểm tra lại';
        }
}
?>

