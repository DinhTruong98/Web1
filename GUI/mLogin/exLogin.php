<?php
if (isset($_POST['account']) == true) {
    $acc = addslashes(stripcslashes($_POST['account']));
    $pass = addslashes(stripcslashes($_POST['password']));
    $taiKhoanBUS = new taiKhoanBUS();

    if($taiKhoanBUS->loginByAdmin($acc, $pass) == true)
    {
        $_SESSION['account'] = $acc;
        $_SESSION['role'] = 'admin';
        echo "<a class='h1' href='index.php'>Đăng nhập thành công click vào đây để trở về trang chủ</a>";
    }else
        if($taiKhoanBUS->login($acc, $pass) == true)
        {
            $_SESSION['account'] = $acc;
            $_SESSION['role'] = 'member';
            echo "<a class='h1' href='index.php'>Đăng nhập thành công click vào đây để trở về trang chủ</a>";
            //header("index.php");
        }else
        {
            echo 'Sai tài khoản hoặc mật khẩu, vui lòng kiểm tra lại';
        }
}
?>

