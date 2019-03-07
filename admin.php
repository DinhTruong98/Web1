
<?php
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
else if ($_SESSION['role'] != 'admin')
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
    include 'GUI/mAdmin/aHeader.php';
    ?>
</div>


<h1></h1>
<div class="container">
    <?php
    $a = 1;
    if (isset($_GET['a']) == true)
        $a = $_GET['a'];

    switch ($a)
    {
        case 1:
            include 'GUI/mAdmin/aIndex.php';
            break;
        case 2:
            include 'GUI/mAdmin/aBrandList.php';
            break;
        case 3:
            include 'GUI/mAdmin/aTypeList.php';
            break;
        case 4:
            include 'GUI/mAdmin/aProductList.php';
            break;
        case 5:
            include 'GUI/mAdmin/aOrderList.php';
            break;
        case 6:
            include 'GUI/mAdmin/aAccountList.php';
            break;
        case 7:
            include 'GUI/mAdmin/frmUpdateBrand.php';
            break;
        case 8:
            include 'GUI/mAdmin/frmUpdateType.php';
            break;
        case 9:
            include 'GUI/mAdmin/frmAddAccount.php';
            break;
        case 10:
            include 'GUI/mAdmin/frmUpdateAccount.php';
            break;
        case 11:
            include 'GUI/mAdmin/frmAddProduct.php';
            break;
        case 12:
            include 'GUI/mAdmin/frmUpdateProduct.php';
            break;
        case 13:
            include 'GUI/mAdmin/aOrderDetail.php';
            break;
        case 101:
            include 'GUI/mAdmin/exAddBrand.php';
            break;
        case 102:
            include 'GUI/mAdmin/exDeleteBrand.php';
            break;
        case 103:
            include 'GUI/mAdmin/exSetDeleteBrand.php';
            break;
        case 104:
            include 'GUI/mAdmin/exUnsetDeleteBrand.php';
            break;
        case 105:
            include 'GUI/mAdmin/exUnsetDeleteBrand.php';
            break;
        case 106:
            include 'GUI/mAdmin/exUpdateBrand.php';
            break;
        case 107:
            include 'GUI/mAdmin/exAddType.php';
            break;
        case 108:
            include 'GUI/mAdmin/exDeleteType.php';
            break;
        case 109:
            include 'GUI/mAdmin/exSetDeleteType.php';
            break;
        case 110:
            include 'GUI/mAdmin/exUnsetDeleteType.php';
            break;
        case 111:
            include 'GUI/mAdmin/exUpdateType.php';
            break;
        case 112:
            include 'GUI/mAdmin/exAddAccount.php';
            break;
        case 113:
            include 'GUI/mAdmin/exDeleteAccount.php';
            break;
        case 114:
            include 'GUI/mAdmin/exSetDeleteAccount.php';
            break;
        case 115:
            include 'GUI/mAdmin/exUnsetDeleteAccount.php';
            break;
        case 116:
            include 'GUI/mAdmin/exUpdateAccount.php';
            break;
        case 117:
            include 'GUI/mAdmin/exDeleteProduct.php';
            break;
        case 118:
            include 'GUI/mAdmin/exAddProduct.php';
            break;
        case 119:
            include 'GUI/mAdmin/exSetDeleteProduct.php';
            break;
        case 120:
            include 'GUI/mAdmin/exUnsetDeleteProduct.php';
            break;
        case 121:
            include 'GUI/mAdmin/exDeleteProduct.php';
            break;
        case 122:
            include 'GUI/mAdmin/exUpdateProduct.php';
            break;
        case 123:
            include 'GUI/mAdmin/aAccountSearchResult.php';
            break;
        case 124:
            include 'GUI/mAdmin/aTypeSearchResult.php';
            break;
        case 125:
            include 'GUI/mAdmin/aBrandSearchResult.php';
            break;
        case 126:
            include 'GUI/mAdmin/aProductSearchResult.php';
            break;
        case 127:
            include 'GUI/mAdmin/exDeleteOrder.php';
            break;
        case 128:
            include 'GUI/mAdmin/exUpdateStatus.php';
            break;
    }

    ?>
</div>
<?php
include 'GUI/pFooter.php';
?>
</body>
</html>