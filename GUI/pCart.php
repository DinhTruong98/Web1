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
var_dump($cart->listSanPham);
foreach ($cart->listSanPham as $sanPham)
{
    echo $sanPham->tenSanPham;
}
}

?>