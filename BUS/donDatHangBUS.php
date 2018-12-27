<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/27/2018
 * Time: 4:50 PM
 */

class donDatHangBUS
{
    public function getAll()
    {
        $donDatHangDAO = new donDatHangDAO();
        return $donDatHangDAO->getAll();
    }

    public function getByID($oid)
    {
        $donDatHangDAO = new donDatHangDAO();
        //var_dump($donDatHangDAO->getByID($oid));

        return $donDatHangDAO->getByID($oid);
    }

    public function updateStatus($maTinhTrang, $maDonHang)
    {
        $donDatHangDAO = new donDatHangDAO();
        $donDatHangDAO->updateStatus($maTinhTrang,$maDonHang);
    }

    public function getByUserID($uid)
    {
        $donDatHangDAO = new donDatHangDAO();
        return $donDatHangDAO->getByUserID($uid);
    }

    public function insert($ddh)
    {
        $donDatHangDAO = new donDatHangDAO();
        $donDatHangDAO->insert($ddh);
    }

    public function delete($oid)
    {
        $donDatHangDAO = new donDatHangDAO();
        $chiTietDHDAO = new chiTietDonDatHangDAO();
        $chiTietDHDAO->deteleByOID($oid);
        $donDatHangDAO->delete($oid);
    }
}