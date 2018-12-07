<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 11/30/2018
 * Time: 6:24 PM
 */

class db
{
    var $db_host = "localhost";
    var $db_username = "root";
    var $db_password = "";
    var $db_name = "1660105_quanlysanpham";

    public function executeQuery($query)
    {
        $conn = mysqli_connect($this->db_host, $this->db_username,$this->db_password, $this->db_name) or die("cant connect to database");
        mysqli_query($conn,"set names 'utf8'");
        $result = mysqli_query($conn,$query);
        return $result;
    }
}