<?php
/**
 * Created by PhpStorm.
 * User: CD
 * Date: 2019-01-29
 * Time: 14:12
 */

session_start();
include 'DAO/db.php';
include 'DTO/hangSanXuat.php';
include 'DTO/loaiSanPham.php';
include 'DTO/sanPham.php';
include 'DTO/taiKhoan.php';
include 'DTO/donDatHang.php';
include 'DTO/tinhTrang.php';
include 'DTO/chiTietDonDatHang.php';

include 'DAO/hangSanXuatDAO.php';
include 'DAO/loaiSanPhamDAO.php';
include 'DAO/sanPhamDAO.php';
include 'DAO/taiKhoanDAO.php';
include 'DAO/donDatHangDAO.php';
include 'DAO/tinhTrangDAO.php';
include 'DAO/chiTietDonDatHangDAO.php';

include 'BUS/hangSanXuatBUS.php';
include 'BUS/loaiSanPhamBUS.php';
include 'BUS/sanPhamBUS.php';
include 'BUS/taiKhoanBUS.php';
include 'BUS/donDatHangBUS.php';
include 'BUS/tinhTrangBUS.php';
include 'BUS/chiTietDonHangBUS.php';

?>

<?php
if(isset($_SESSION['role']) == false)
{
    header("location:index.php");
}
else if ($_SESSION['role'] != 'member')
{
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Chào mừng đến với MOBILESHOP.COM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./GUI/css/bootstrap.min.css">
    <script src="GUI/jquery/jquery.min.js"></script>
    <script src="GUI/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="GUI/css/myStyle.css">
    <script src="GUI/js/myScript.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div class="header">

    <?php
    include 'GUI/pHeader.php';
    ?>
</div>
<div class="container">
    <?php
    $a = 1;
    if (isset($_GET['a']) == true)
        $a = $_GET['a'];

    switch ($a)
    {
        case 1:
            include 'GUI/mShop/index.php';
            break;
        case 2:
            include 'GUI/mShop/frmAddProduct.php';
            break;
        case 102:
            include 'GUI/mShop/exAddProduct.php';
            break;
        default:
            include 'GUI/mShop/index.php';
            break;
    }
    ?>
</div>
<?php
include 'GUI/pFooter.php';
?>
</body>
</html>
