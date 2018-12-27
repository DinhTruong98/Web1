<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/7/2018
 * Time: 11:14 PM
 */

class taiKhoanDAO extends db
{
    public function getAll()
    {
        $listTaiKhoan = array();
        $query = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan FROM taikhoan";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result)) {
            $taiKhoan = new taiKhoan();
            $taiKhoan->maTaiKhoan = $row["MaTaiKhoan"];
            $taiKhoan->tenDangNhap = $row["TenDangNhap"];
            $taiKhoan->matKhau = $row["MatKhau"];
            $taiKhoan->tenHienThi = $row["TenHienThi"];
            $taiKhoan->diaChi = $row["DiaChi"];
            $taiKhoan->soDienThoai = $row["DienThoai"];
            $taiKhoan->email = $row["Email"];
            $taiKhoan->biXoa = $row["BiXoa"];
            $taiKhoan->maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];

            $listTaiKhoan[] = $taiKhoan;

        }
        return $listTaiKhoan;
    }

    public function getAvailable()
    {
        $listTaiKhoan = array();
        $query = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan FROM taikhoan WHERE BiXoa = 0";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result)) {
            $taiKhoan = new taiKhoan();
            $taiKhoan->maTaiKhoan = $row["MaTaiKhoan"];
            $taiKhoan->tenDangNhap = $row["TenDangNhap"];
            $taiKhoan->matKhau = $row["MatKhau"];
            $taiKhoan->tenHienThi = $row["TenHienThi"];
            $taiKhoan->diaChi = $row["DiaChi"];
            $taiKhoan->soDienThoai = $row["DienThoai"];
            $taiKhoan->email = $row["Email"];
            $taiKhoan->biXoa = $row["BiXoa"];
            $taiKhoan->maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];

            $listTaiKhoan[] = $taiKhoan;

        }
        return $listTaiKhoan;
    }


    public function getByID($uid)
    {

        $taiKhoan = new taiKhoan();
        $query = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan FROM taikhoan WHERE BiXoa = 0 AND MaTaiKhoan = $uid";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result)) {
            $taiKhoan = new taiKhoan();
            $taiKhoan->maTaiKhoan = $row["MaTaiKhoan"];
            $taiKhoan->tenDangNhap = $row["TenDangNhap"];
            $taiKhoan->matKhau = $row["MatKhau"];
            $taiKhoan->tenHienThi = $row["TenHienThi"];
            $taiKhoan->diaChi = $row["DiaChi"];
            $taiKhoan->soDienThoai = $row["DienThoai"];
            $taiKhoan->email = $row["Email"];
            $taiKhoan->biXoa = $row["BiXoa"];
            $taiKhoan->maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];

        }
        return $taiKhoan;
    }

    public function getByUsername($uname)
    {

        $taiKhoan = new taiKhoan();
        $query = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan FROM taikhoan WHERE BiXoa = 0 AND TenDangNhap = '$uname'";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result)) {
            $taiKhoan = new taiKhoan();
            $taiKhoan->maTaiKhoan = $row["MaTaiKhoan"];
            $taiKhoan->tenDangNhap = $row["TenDangNhap"];
            $taiKhoan->matKhau = $row["MatKhau"];
            $taiKhoan->tenHienThi = $row["TenHienThi"];
            $taiKhoan->diaChi = $row["DiaChi"];
            $taiKhoan->soDienThoai = $row["DienThoai"];
            $taiKhoan->email = $row["Email"];
            $taiKhoan->biXoa = $row["BiXoa"];
            $taiKhoan->maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];

        }
        return $taiKhoan;
    }

    public function login($tenDangNhap, $matKhau)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau' AND BiXoa = 0";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            //echo 'Sai tài khoản hoặc mật khẩu';
            return false;
        }
        return true;
    }

    public function loginByAdmin($tenDangNhap, $matKhau)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau' AND BiXoa = 0 AND MaLoaiTaiKhoan = 0";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            //echo 'Sai tài khoản hoặc mật khẩu';
            return false;
        }
        return true;
    }
    public function register($taiKhoan)
    {
        $query = "INSERT INTO taikhoan(TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan) VALUES ('$taiKhoan->tenDangNhap','$taiKhoan->matKhau',N'$taiKhoan->tenHienThi','$taiKhoan->diaChi','$taiKhoan->soDienThoai','$taiKhoan->email',0,1)";
        $result = $this->executeQuery($query);

    }



    public function kiemTraTonTai($tenDangNhap)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap'";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            return false;
        }
        return true;
    }

    public function kiemTraTonTaiByDisplayName($tenHienThi)
    {
        $query = "SELECT * FROM taikhoan WHERE TenHienThi = '$tenHienThi'";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            return false;
        }
        return true;
    }

    public function kiemTaiKhoan($tenDangNhap, $matKhau)
    {
        $query = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau' AND BiXoa = 0";
        $result = $this->executeQuery($query);
        if (mysqli_num_rows($result) == 0)
        {
            return false;
        }
        return true;
    }

    public function insert($TaiKhoan)
    {
        $sql = "INSERT INTO TaiKhoan(TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, MaLoaiTaiKhoan, BiXoa) 
        values ('$TaiKhoan->tenDangNhap', '$TaiKhoan->matKhau', '$TaiKhoan->tenHienThi', '$TaiKhoan->diaChi',
        '$TaiKhoan->soDienThoai', '$TaiKhoan->email', $TaiKhoan->maLoaiTaiKhoan, $TaiKhoan->biXoa)";
        $this->executeQuery($sql);
        echo $sql;
    }

    public function setToMember($maTaiKhoan)
    {
        $query = "UPDATE taikhoan SET MaLoaiTaiKhoan=1 WHERE MaTaiKhoan=$maTaiKhoan";
        $this->executeQuery($query);
    }

    public function setToAdmin($maTaiKhoan)
    {
        $query = "UPDATE taikhoan SET MaLoaiTaiKhoan=0 WHERE MaTaiKhoan=$maTaiKhoan";
        $this->executeQuery($query);
    }

    public function delete($maTaiKhoan)
    {
        $sql = "DELETE FROM TaiKhoan where MaTaiKhoan = $maTaiKhoan";
        $this->executeQuery($sql);

    }

    public function setDelete($maTaiKhoan)
    {
        $sql = "UPDATE taikhoan SET BiXoa=1 WHERE MaTaiKhoan = $maTaiKhoan";
        $this->executeQuery($sql);
        echo $sql;
    }

    public function search($key)
    {
        $listTaiKhoan = array();
        $query = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan FROM taikhoan WHERE TenDangNhap LIKE '%$key%'";
        $result = $this->executeQuery($query);
        while ($row = mysqli_fetch_array($result)) {
            $taiKhoan = new taiKhoan();
            $taiKhoan->maTaiKhoan = $row["MaTaiKhoan"];
            $taiKhoan->tenDangNhap = $row["TenDangNhap"];
            $taiKhoan->matKhau = $row["MatKhau"];
            $taiKhoan->tenHienThi = $row["TenHienThi"];
            $taiKhoan->diaChi = $row["DiaChi"];
            $taiKhoan->soDienThoai = $row["DienThoai"];
            $taiKhoan->email = $row["Email"];
            $taiKhoan->biXoa = $row["BiXoa"];
            $taiKhoan->maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];

            $listTaiKhoan[] = $taiKhoan;

        }
        return $listTaiKhoan;
    }

    public function unsetDelete($maTaiKhoan)
    {
        $sql = "UPDATE taikhoan SET BiXoa=0 WHERE MaTaiKhoan = $maTaiKhoan";
        $this->executeQuery($sql);
    }

    public function updateByAdmin($taiKhoan)
    {
        $query = "UPDATE taikhoan SET TenHienThi = '$taiKhoan->tenHienThi', Email = '$taiKhoan->email', DienThoai = '$taiKhoan->soDienThoai', DiaChi = '$taiKhoan->diaChi', MaLoaiTaiKhoan = $taiKhoan->maLoaiTaiKhoan WHERE MaTaiKhoan = $taiKhoan->maTaiKhoan";
        $this->executeQuery($query);
        //echo $query;
    }

    public function UPDATE($TaiKhoan)
    {

    }
}

?>