<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/27/2018
 * Time: 9:06 PM
 */
if (isset($_SESSION['cart']) == false)
    header("location:index.php");

else {
$cart = unserialize($_SESSION['cart']);
    $tongSoTien = $cart->tongSoTien;
}
?>
<h2>Thông tin đơn hàng</h2>
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
    if (isset($_SESSION['cart']) == true) {
        foreach ($cart->listSanPham as $item) {
            $sanPham = $item->sanPham;
            //var_dump($item);
            echo "<tr>
                    <td>$sanPham->maSanPham</td>
                    <td>$sanPham->tenSanPham</td>
                    <td>$sanPham->giaSanPham</td>
                    <td>$item->soLuong</td>
                </tr>";
            //var_dump($cart);
        }
    }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>

    </tr>
</table>
<h4>Tổng số tiền: <?php echo $tongSoTien;?></h4>
<h2>Thông tin thanh toán</h2>
<div style="text-align: center;"><a href="index.php?a=107" class="btn btn-success" style="display: block;">Xác nhận</a></div>
<br/>

