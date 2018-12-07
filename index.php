
<?php
include 'DAO/db.php';
include 'DTO/hangSanXuat.php';
include 'DTO/loaiSanPham.php';
include 'DTO/sanPham.php';

include 'DAO/hangSanXuatDAO.php';
include 'DAO/loaiSanPhamDAO.php';
include 'DAO/sanPhamDAO.php';

include 'BUS/hangSanXuatBUS.php';
include 'BUS/loaiSanPhamBUS.php';
include 'BUS/sanPhamBUS.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chào mừng đến với MOBILESHOP.COM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/myStyle.css">
    <script src="js/myScript.js"></script>
</head>

<body>
    <div class="header">

        <?php
            include 'GUI/pHeader.php';
        ?>
    </div>
    <div class="banner">
        <?php
        include 'GUI/pBanner.php';
        ?>
        <br />
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
                include 'GUI/pIndex.php';
                break;
            case 2:
                include 'GUI/pListProductByType.php';
                break;
            case 3:
                include 'GUI/pListProductByBrand.php';
                break;
            case 4:
                include 'GUI/pProductDetail.php';
                break;
        }

        ?>
    </div>
</body>
</html>