<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 5:02 PM
 */
if (isset($_POST['key']) == false)
    header("location:admin.php?a=6");
$key = $_POST['key'];
echo "<h1>kết quả tìm kiếm cho từ khoá: $key</h1>";
$taiKhoanBUS = new taiKhoanBUS();
$listTaiKhoan = $taiKhoanBUS->search($key);
?>

<table class="table">
    <tr>
        <th>Mã tài khoản </th>
        <th>Tên đăng nhập</th>
        <th>Bị khoá</th>
        <th>Loại tài khoản</th>
        <th>Xoá</th>
        <th>Khoá</th>
        <th>Mở khoá</th>
        <th>Cập nhật</th>
    </tr>
    <?php

    $taiKhoanBUS = new taiKhoanBUS();
    $listTaiKhoan = $taiKhoanBUS->search($key);
    foreach ($listTaiKhoan as $taiKhoan)
    {
        echo "<tr>";
        echo "<td>$taiKhoan->maTaiKhoan</td>";
        echo "<td>$taiKhoan->tenDangNhap</td>";
        echo "<td>$taiKhoan->biXoa</td>";
        echo "<td>$taiKhoan->maLoaiTaiKhoan</td>";
        echo "<td><a href='admin.php?a=113&uid=$taiKhoan->maTaiKhoan'>Xoá</a></td>";
        echo "<td><a href='admin.php?a=114&uid=$taiKhoan->maTaiKhoan'>Khoá</a></td>";
        echo "<td><a href='admin.php?a=115&uid=$taiKhoan->maTaiKhoan'>Mở khoá</a></td>";
        echo "<td><a href='admin.php?a=10&uid=$taiKhoan->maTaiKhoan'>Cập nhật</a></td>";
        echo "</tr>";
    }

    ?>

</table>
