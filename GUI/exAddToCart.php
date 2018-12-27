<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 10:39 PM
 */
if (isset($_SESSION['role']) == false)
    echo "<h1>Bạn cần đăng nhập để mua sản phẩm</h1>";
else if (isset($_GET['pid']) == false)
{
    //header('location:index.php');
}
if (isset($_SESSION['cart']) == false)
{
    $sanPhamBUS = new sanPhamBUS();
    $sanPham = $sanPhamBUS->getByID($_GET['pid']);
    $cart = new gioHang();
    if ($sanPham->soLuongTon <= 0)
    {
        header("location:index.php?a=10");
        return;
    }
    $cart->them($sanPham);
    $_SESSION['cart'] = serialize($cart);
    header('location:index.php');

}
else
{
    //echo "bla bla";
    $sanPhamBUS = new sanPhamBUS();
    $sanPham = $sanPhamBUS->getByID($_GET['pid']);
    if ($sanPham->soLuongTon <= 0)
    {
        header("location:index.php?a=10");
        return;
    }
    $cart = unserialize($_SESSION['cart']);
    $cart->them($sanPham);
    $_SESSION['cart'] = serialize($cart);
    //$cc = unserialize($_SESSION['cart']);
    //var_dump($cc);
    header('location:index.php');
}

?>
