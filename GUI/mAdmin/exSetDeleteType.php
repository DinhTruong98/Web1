<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 9:27 PM
 */

if (isset($_GET['tid']) == false)
    header("location:admin.php?a=3");
$tid = $_GET['tid'];
//echo $bid;
$loaiSanPhamBUS = new loaiSanPhamBUS();
if($loaiSanPhamBUS->setDelete($tid) == true)
{
    header("location:admin.php?a=3");
}else
    echo 'Xoá không thành công, vui lòng kiểm tra lại';
echo '<br></br><a href="admin.php?a=3" class="btn btn-danger">Click vào đây để trở về</a>';

?>