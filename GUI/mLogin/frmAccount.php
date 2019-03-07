<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/12/2018
 * Time: 10:12 PM
 */

$uid = $_SESSION['account'];
$role = $_SESSION['role'];
//if (isset(unserialize($_SESSION['cart'])) ==
$soLuong = 0;

if (isset($_SESSION['cart']) == true) {
    $cart = unserialize($_SESSION['cart']);
    $soLuong = $cart->soLuong;
}

//var_dump($cart->soLuong);
?>
<ul class="nav navbar-nav navbar-right">
    <li><a href="index.php?a=11"> Hi, <?php echo $_SESSION['account'];?></a></li>
    <?php
    if($role == 'admin')
        echo "<li><a href='admin.php'> Trang quản trị</a></li>";
    ?>

    <?php
    if($role == 'member')
        echo "<li><a href='Shop.php'>Shop của tôi</a></li>";
    ?>
    <li><a href="index.php?a=7"><span class="badge badge-success" style="background-color: #5cb85c"> <?php  echo $soLuong; ?> </span> Giỏ</a></li>
    <li><a href="index.php?a=102">Đăng Xuất</a></li>
</ul>

