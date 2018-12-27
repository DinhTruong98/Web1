<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 10:40 PM
 */

    if (isset($_SESSION['cart']) == false)
        echo "<h1>Bạn chưa có sản phẩm nào trong giỏ hàng</h1>";

    else {
    $cart = unserialize($_SESSION['cart']);
    //var_dump($cart->listSanPham);
    foreach ($cart->listSanPham as $sanPham)
    {
        //echo $sanPham->tenSanPham;
    }
    //$listSanPham = array_unique($cart->listSanPham->maSanPham);
}
?>
<form>
    <table class='table'>
        <thead class='thead-dark'>
        <tr>
            <?php
            if (isset($_SESSION['cart']) == true) {
                echo "<th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>";
            }
            ?>

        </tr>
        </thead>

        <?php

        ?>

        <?php
        if (isset($_SESSION['cart']) == true) {
            foreach ($cart->listSanPham as $sanPham) {
                echo "<tr>
                    <td>$sanPham->maSanPham</td>
                    <td>$sanPham->tenSanPham</td>
                    <td>$sanPham->giaSanPham</td>
                    <td><input type='number' name='soluong' required></td>
                    
                </tr>";

            }
        }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <?php
                if (isset($_SESSION['cart']) == true) {
                    echo "<input type='submit' class='btn btn-warning' value='Đặt ngay'></td>";
                }
                ?>

        </tr>
    </table>
</form>

