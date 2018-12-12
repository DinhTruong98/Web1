<?php
if (isset($_POST['account']) == true) {
    $acc = $_POST['account'];
    $pass = $_POST['password'];
    $taiKhoanBUS = new taiKhoanBUS();

    if($taiKhoanBUS->loginByAdmin($acc, $pass) == true)
    {
        $_SESSION['account'] = $acc;
        header("location: GUI/admin.php");
    }else
        if($taiKhoanBUS->login($acc, $pass) == true)
        {
            $_SESSION['account'] = $acc;
            header("location: index.php");
        }
}
?>

