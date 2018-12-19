<?php
/**
 * Created by PhpStorm.
 * User: CD
 * Date: 2018-12-18
 * Time: 21:53
 */
if (isset($_POST['bid']) == false)
    header("location:admin.php?a=2");
$brandName = $_POST['bid'];

$hangSanXuatBUS = new hangSanXuatBUS();
if($hangSanXuatBUS->insert($brandName) == true)
{
    header("location:admin.php?a=2");
}else
    echo 'Thêm không thành công, vui lòng kiểm tra lại tên, có thể bị trùng';
    echo '<br></br><a href="admin.php?a=2" class="btn btn-danger">Click vào đây để trở về</a>';
?>