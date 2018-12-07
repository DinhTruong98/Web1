<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/7/2018
 * Time: 10:44 PM
 */

?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Đăng nhập</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="index.php?a=101">
                    <div class="card card-container">

                        <p id="profile-name" class="profile-name-card"></p>
                        <form class="form-signin">
                            <span id="reauth-email" class="reauth-email"></span>
                            <input type="text" id="account" class="form-control" placeholder="Vui lòng nhập tài khoản" required name="account" autofocus>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" name="password" required>
                            <br />
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Đăng nhập</button>
                        </form><!-- /form -->

                    </div><!-- /card-container -->

                </form>



            </div>
        </div>
    </div>
</div>
