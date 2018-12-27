<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/27/2018
 * Time: 8:06 PM
 */

class cartItem
{
    var $soLuong;
    var $sanPham;

    public function __construct($sanPham)
    {
        $this->soLuong = 1;
        $this->sanPham = $sanPham;
    }

}
?>