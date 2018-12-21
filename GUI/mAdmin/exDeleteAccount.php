<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 9:27 PM
 */

if (isset($_GET['uid']) == false)
    header("location:admin.php?a=6");
$uid = $_GET['uid'];
//echo $bid;
$taiKhoanBUS = new taiKhoanBUS();
$taiKhoanBUS->detele($uid);
header("location:admin.php?a=6");

?>