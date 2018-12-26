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
echo $bid;
$sanPhamBUS = new sanPhamBUS();
$sanPhamBUS->setDelete($pid);
header("location:admin.php?a=4");
?>