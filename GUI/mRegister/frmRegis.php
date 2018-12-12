<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/12/2018
 * Time: 11:06 PM
 */


?>

<div class="container">
    <div class="col-sm-6">
    <h1>Đăng kí tài khoản mới</h1><br>

    <form method="post" action="index.php?a=102">
        <input type="text" name="account" placeholder="Tên đăng nhập" required><br />
        <input type="password">
        <input type="password" name="password" placeholder="Mật khẩu" required><br />
        <input type="text" name="displayname" placeholder="Tên hiển thị" required><br />
        <input type="email" name="email" placeholder="email" required><br />
        <input type="tel" name="phonenumber" placeholder="Số điện thoại" required><br />
        <input type="submit" name="login" class="btn-success" value="Đăng kí" required>
    </form>
    </div>
</div>
