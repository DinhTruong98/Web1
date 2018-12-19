<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 9:27 PM
 */

if (isset($_GET['bid']) == false)
    header("location:admin.php?a=2");
$bid = $_GET['bid'];
//echo $bid;
$hangSanXuatBUS = new hangSanXuatBUS();
if($hangSanXuatBUS->delete($bid) == true)
{
    header("location:admin.php?a=2");
}else
    echo 'Xoá không thành công, vui lòng kiểm tra lại';
echo '<br></br><a href="admin.php?a=2" class="btn btn-danger">Click vào đây để trở về</a>';

?>