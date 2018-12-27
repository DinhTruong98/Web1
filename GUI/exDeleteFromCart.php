<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/27/2018
 * Time: 8:54 PM
 */
if (isset($_SESSION['cart']) == true)
{
    $cart = unserialize($_SESSION['cart']);
    $cart->remove($_GET['pid']);
    $_SESSION['cart'] = serialize($cart);
    header("location:index.php");
}

?>