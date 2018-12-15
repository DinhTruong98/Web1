
<?php
session_start();
include 'DAO/db.php';
include 'DTO/hangSanXuat.php';
include 'DTO/loaiSanPham.php';
include 'DTO/sanPham.php';
include 'DTO/taiKhoan.php';

include 'DAO/hangSanXuatDAO.php';
include 'DAO/loaiSanPhamDAO.php';
include 'DAO/sanPhamDAO.php';
include 'DAO/taiKhoanDAO.php';

include 'BUS/hangSanXuatBUS.php';
include 'BUS/loaiSanPhamBUS.php';
include 'BUS/sanPhamBUS.php';
include 'BUS/taiKhoanBUS.php';

?>

<?php
if(isset($_SESSION['role']) == false)
    {
        header("location:index.php?a=404");
    }
else if ($_SESSION['role'] != 'admin')
    {
        header("location:index.php?a=404");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang quản trị MOBILESHOP.COM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="GUI/css/myStyle.css">
    <script src="GUI/js/myScript.js"></script>
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
    }

    ?>
</div>
<?php
include 'GUI/pFooter.php';
?>
</body>
</html>