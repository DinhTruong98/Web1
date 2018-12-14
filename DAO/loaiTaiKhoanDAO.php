<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Thinh
 * Date: 12/13/2018
 * Time: 10:41 PM
 */

class loaiTaiKhoanDAO extends db
{
    public  function getALL()
    {
        $listLoaiTaiKhoan = array();
        $query = "Select MaLoaiTaiKhoan, TenLoaiTaiKhoan from LoaiTaiKhoan";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result))
        {
            $LoaiTaiKhoan = new LoaiTaiKhoan();
            $LoaiTaiKhoan->maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];
            $LoaiTaiKhoan->tenLoaiTaiKhoan= $row["TenLoaiTaiKhoan"];
            $listLoaiTaiKhoan[] = $LoaiTaiKhoan;
        }
        return $listLoaiTaiKhoan;
    }

    public  function getByID($MaloaiTaiKhoan)
    {

        $query = "Select MaLoaiTaiKhoan, TenLoaiTaiKhoan from LoaiTaiKhoan where  MaLoaiTaiKhoan = $MaloaiTaiKhoan";
        $result = $this->executeQuery($query);
        //cắt doi tuong thanh tung dong
        if ($result == null)
            return null;

        $row = mysqli_fetch_array($result);
        $LoaiTaiKhoan = new LoaiTaiKhoan();
        $LoaiTaiKhoan->maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];
        $LoaiTaiKhoan->tenLoaiTaiKhoan= $row["TenLoaiTaiKhoan"];
        $listLoaiTaiKhoan[] = $LoaiTaiKhoan;

        return $LoaiTaiKhoan;
    }

    public function INSERT($LoaiTaiKhoan)
    {
        $sql = "INSERT INTO LoaiTaiKhoan(MaLoaiTaiKhoan, TenLoaiTaiKhoan) values ($LoaiTaiKhoan->MaTenLoaiTaiKhoan, '$LoaiTaiKhoan->TenLoaiTaiKhoan')";
        $this->executeQuery($sql);
    }

    public function  DELETE($LoaiTaiKhoan)
    {
        $sql = "DELETE FROM LoaiTaiKhoan where MaLoaiTaiKhoan = $LoaiTaiKhoan->MaLoaiTaiKhoan";
        $this->executeQuery($sql);
    }

    public function SetDelete($LoaiTaiKhoan)
    {

    }

    public function UnsetDelete($LoaiTaiKhoan)
    {

    }

    public function UPDATE($LoaiTaiKhoan)
    {

    }
}

?>



