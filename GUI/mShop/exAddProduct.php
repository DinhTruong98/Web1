<?php
/**
 * Created by PhpStorm.
 * User: CD
 * Date: 2018-12-21
 * Time: 15:51
 */

if (isset($_POST['pname']) == false)
    header("location:Shop.php?a=1");
$sanPham = new sanPham();
$sanPham->tenSanPham = addslashes(stripcslashes($_POST['pname']));
$sanPham->hinhURL = addslashes(stripcslashes($_POST['ppicture']));
$sanPham->giaSanPham = addslashes(stripcslashes($_POST['pprice']));
$sanPham->soLuongTon = addslashes(stripcslashes($_POST['pleft']));
$sanPham->moTa = addslashes(stripcslashes($_POST['pdetail']));
$sanPham->maHangSanXuat = addslashes(stripcslashes($_POST['pbrand']));
$sanPham->maLoaiSanPham = addslashes(stripcslashes($_POST['ptype']));
$uid = $_SESSION['account'];

//var_dump($sanPham);

$sanPhamBUS = new sanPhamBUS();
if($sanPhamBUS->insertByUser($sanPham, $uid) == true)
{
    header("location:Shop.php?a=1");
}else
    echo 'Thêm không thành công, vui lòng kiểm tra lại tên, có thể bị trùng';
echo '<br></br><a href="admin.php?a=4" class="btn btn-danger">Click vào đây để trở về</a>';

?>

