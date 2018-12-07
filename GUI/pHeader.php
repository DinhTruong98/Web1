

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">MOBILESHOP.COM</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Trang chủ</a></li>

            <?php
            include 'pSearch.php';
            ?>


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


        <?php
        if (isset($_POST['account']) == true)
            echo "<li><a href=''#'><span class=\"glyphicon glyphicon-user\"></span> Đăng kí</a></li>";
        ?>


        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-log-in" ></span> Đăng nhập</a></li>

            <?php
                include 'GUI/pLogin.php';
            ?>
        </ul>
    </div>
</nav>
