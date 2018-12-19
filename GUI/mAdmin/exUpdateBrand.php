<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 10:43 PM
 */
if (isset($_POST['bname']) == false)
    header("location:admin.php?a=2");
$bid = $_POST['bid'];
$bname = $_POST['bname'];
$blogo = $_POST['blogo'];
$bixoa = $_POST['bixoa'];

$hangSanXuat = new hangSanXuat();
$hangSanXuat->maHangSanXuat = $bid;
$hangSanXuat->tenHangSanXuat = $bname;
$hangSanXuat->logoURL = $blogo;
$hangSanXuat->biXoa = $bixoa;

$hangSanXuatBUS = new hangSanXuatBUS();
if ($hangSanXuatBUS->update($hangSanXuat) == true)
{
    header("location:admin.php?a=2");
}
else echo "Cập nhật không thành công";
?>