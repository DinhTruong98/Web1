<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 9:27 PM
 */

if (isset($_GET['pid']) == false)
    header("location:admin.php?a=4");
$pid = $_GET['pid'];
//echo $bid;
$sanPhamBUS = new sanPhamBUS();
if($sanPhamBUS->delete($pid) == true)
{
    header("location:admin.php?a=4");
}else
    echo 'Xoá không thành công, vui lòng kiểm tra lại';
echo '<br></br><a href="admin.php?a=4" class="btn btn-danger">Click vào đây để trở về</a>';

?>