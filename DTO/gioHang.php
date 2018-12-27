<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 10:20 PM
 */

class gioHang
{
    var $listSanPham;
    var $tongSoTien;
    var $soLuong;
    public function them($sanPham)
    {
        $this->soLuong++;
        $this->tongSoTien =  $this->tongSoTien + $sanPham->giaSanPham;
        foreach ($this->listSanPham as $item)
        {
            if($item->sanPham->maSanPham == $sanPham->maSanPham){
                $item->soLuong ++;
                return;
            }
        }
        $this->listSanPham[strval($sanPham->maSanPham)] = new cartItem($sanPham);
    }

    public function remove($maSanPham)
    {
        $item = $this->listSanPham[$maSanPham];
        if ($item == null)
        {
            return;
        }
        $this->soLuong = $this->soLuong - $item->soLuong;
        $this->tongSoTien = $this->tongSoTien - ($item->soLuong * $item->sanPham->giaSanPham);
        unset($this->listSanPham[$maSanPham]);
    }

    public function count()
    {
        $n = count($this->listSanPham);
        return $n;
    }

//    public function update($soLuongMoi, $item)
//    {
//        $item = $this->listSanPham[$maSanPham];
//        if ($item == null)
//        {
//            return;
//        }
//        $this->soLuong = $this->soLuong - $item->soLuong;
//        $this->tongSoTien = $this->tongSoTien - ($item->soLuong * $item->sanPham->giaSanPham);
//    }

    public function xoa()
    {

    }

    public function __construct()
    {
        $this->listSanPham = array();
        $this->tongSoTien = 0;
        $this->soLuong = 0;
    }
}