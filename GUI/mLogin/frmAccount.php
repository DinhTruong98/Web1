<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/12/2018
 * Time: 10:12 PM
 */

$uid = $_SESSION['account'];
?>
<ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span>Hi, <?php echo $_SESSION['account'];?></a></li>
    <li><a href="index.php?a=102"><span class="glyphicon glyphicon-log-out"></span> Đăng Xuất</a></li>
</ul>
