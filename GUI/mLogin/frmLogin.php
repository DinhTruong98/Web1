<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/12/2018
 * Time: 10:12 PM
 */

?>
<ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in" ></span> Đăng nhập</a></li>
</ul>


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Đăng nhập vào tài khoản của bạn</h1><br>
            <form method="post" action="index.php?a=101">
                <input type="text" name="account" placeholder="Tên đăng nhập" required>
                <input type="password" name="password" placeholder="Mật khẩu">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login" required>
            </form>

            <div class="login-help">
                <a href="#">Đăng kí</a> - <a href="#">Quên mật khẩu?</a>
            </div>
        </div>
    </div>
</div>