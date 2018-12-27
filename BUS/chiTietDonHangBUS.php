<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/27/2018
 * Time: 5:54 PM
 */

class chiTietDonHangBUS
{
    public function getAll()
    {
        $chiTietDH = new chiTietDonDatHangDAO();
        return $chiTietDH->getAll();
    }
    public function getByOID($oid)
    {
        $chiTietDH = new chiTietDonDatHangDAO();
        return $chiTietDH->getByOID($oid);
    }
    public function insert($chiTietDonHang)
    {
        $chiTietDH = new chiTietDonDatHangDAO();
        $chiTietDH->insert($chiTietDonHang);
    }
}