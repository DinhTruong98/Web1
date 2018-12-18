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
            <a class="navbar-brand" href="admin.php">Trang quản trị</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Trở về trang chủ</a></li>

            <?php //dưới dây là config cho menu hãng sản xuất ?>
            <li class="dropdown"><a class="" data-toggle="" href="admin.php?a=2">Quản lí hãng sản xuất<span
                        class=""></span></a>
            </li>


            <?php //dưới dây là config cho menu loại sản phẩm ?>
            <li class="dropdown"><a class="" data-toggle="" href="admin.php?a=3">Quản lí loại sản phẩm <span
                        class=""></span></a>
            </li>

            <li class="dropdown"><a class="" data-toggle="" href="admin.php?a=4">Quản lí sản phẩm <span
                        class=""></span></a>
            </li>
            <?php //dưới dây là config cho menu loại sản phẩm ?>
            <li class="dropdown"><a class="" data-toggle="" href="admin.php?a=5">Quản lí đơn đặt hàng <span
                        class=""></span></a>
            </li>
            <?php //dưới dây là config cho menu loại sản phẩm ?>
            <li class="dropdown"><a class="" data-toggle="" href="admin.php?a=6">Quản lí người dùng <span
                        class=""></span></a>
            </li>

        </ul>
    </div>
</nav>

