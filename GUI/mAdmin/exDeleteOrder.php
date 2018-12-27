<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 9:27 PM
 */

if (isset($_GET['oid']) == false)
    header("location:admin.php?a=2");
$oid = $_GET['oid'];
//echo $bid;
$donDatHangBUS = new donDatHangBUS();
$donDatHangBUS->delete($oid);
header("location:admin.php?a=5");

?>