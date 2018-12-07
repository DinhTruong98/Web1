<?php
if (isset($_POST['account'])== true) {
    $acc = $_POST['account'];
    $pass = $_POST['password'];
    $taiKhoanBUS = new taiKhoanBUS();

    if($taiKhoanBUS->login($acc, $pass) == true)
    {
        $session['account'] = $acc;

    }
}
?>

<h1><a href="./index.php">Click vào đây để tiếp tục</a></h1>
