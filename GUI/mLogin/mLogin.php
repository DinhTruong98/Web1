<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/12/2018
 * Time: 10:11 PM
 */
    if(isset($_SESSION["account"]) == true)
    {
        include 'GUI/mLogin/frmAccount.php';
    }
    else
    {
        include 'GUI/mLogin/frmLogin.php';
    }

?>