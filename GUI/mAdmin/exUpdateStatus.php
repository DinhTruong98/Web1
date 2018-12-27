<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/28/2018
 * Time: 12:39 AM
 */
if(isset($_POST['tt']) == false)
    header("location: admin.php?a=5");
$trangThai = $_POST['tt'];
$oid = $_POST['oid'];

$donDatHangBUS = new donDatHangBUS();
$donDatHangBUS->updateStatus($trangThai,$oid);
header("location: admin.php?a=5");
?>