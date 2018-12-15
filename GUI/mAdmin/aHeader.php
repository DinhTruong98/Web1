<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/15/2018
 * Time: 6:42 PM
 */

?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">MOBILESHOP.COM</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Trở về trang chủ</a></li>

            <?php //dưới dây là config cho menu hãng sản xuất ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hãng sản xuất<span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php
                    $hangSanXuatBUS = new hangSanXuatBUS();
                    $listHangSanXuat = $hangSanXuatBUS->getAll();

                    foreach ($listHangSanXuat as $hangSanXuat)
                    {
                        echo "<li><a href='index.php?a=3&brand=$hangSanXuat->maHangSanXuat'>$hangSanXuat->tenHangSanXuat</a></li>";
                    }
                    ?>
                </ul>
            </li>


            <?php //dưới dây là config cho menu loại sản phẩm ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Loại sản phẩm <span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php
                    $loaiSanPhamBUS = new loaiSanPhamBUS();
                    $listLoaiSanPham = $loaiSanPhamBUS->getAll();

                    foreach ($listLoaiSanPham as $loaiSanPham)
                    {
                        echo "<li><a href='index.php?a=2&type=$loaiSanPham->maLoaiSanPham'>$loaiSanPham->tenLoaiSanPham</a></li>";
                    }
                    ?>
                </ul>
            </li>

        </ul>
    </div>
</nav>

