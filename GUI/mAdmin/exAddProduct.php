<?php
/**
 * Created by PhpStorm.
 * User: CD
 * Date: 2018-12-21
 * Time: 15:51
 */

if (isset($_POST['pname']) == false)
    header("location:admin.php?a=4");
$sanPham = new sanPham();
$sanPham->tenSanPham = $_POST['pname'];
$sanPham->hinhURL = $_POST['ppicture'];
$sanPham->giaSanPham = $_POST['pprice'];
$sanPham->soLuongTon = $_POST['pleft'];
$sanPham->moTa = $_POST['pdetail'];
$sanPham->maHangSanXuat = $_POST['pbrand'];
$sanPham->maLoaiSanPham = $_POST['ptype'];

var_dump($sanPham);

$sanPhamBUS = new sanPhamBUS();
if($sanPhamBUS->insert($sanPham) == true)
{
    header("location:admin.php?a=4");
}else
    echo 'Thêm không thành công, vui lòng kiểm tra lại tên, có thể bị trùng';
echo '<br></br><a href="admin.php?a=4" class="btn btn-danger">Click vào đây để trở về</a>';

?>

