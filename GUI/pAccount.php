<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/15/2018
 * Time: 7:19 PM
 */

?>
<table class="table">
    <tr>
        <th>Mã đơn hàng </th>
        <th>Ngày mua</th>
        <th>Tổng thành tiền</th>
        <th>Tình trạng</th>
        <th>Chi tiết</th>
    </tr>
    <?php

    $userBUS = new taiKhoanBUS();
    $username = $_SESSION['account'];
    $user = $userBUS->getByUsername($username);

    $tinhTrangBUS1 = new tinhTrangBUS();
    $ltt = $tinhTrangBUS1->getAll();
    $donDatHangBUS = new donDatHangBUS();
    $listDonDatHang = $donDatHangBUS->getByUserID($user->maTaiKhoan);
    foreach ($listDonDatHang as $donDatHang)
    {
        $taiKhoanBUS = new taiKhoanBUS();
        $taiKhoan = $taiKhoanBUS->getByID($donDatHang->maTaiKhoan);
        $tinhTrangBUS = new tinhTrangBUS();
        $tinhTrang = $tinhTrangBUS->getByID($donDatHang->maTinhTrang);
        echo "<tr>";
        echo "<td>$donDatHang->maDonDatHang</td>";
        echo "<td>$donDatHang->ngayLap</td>";
        echo "<td>$donDatHang->tongThanhTien</td>";
        echo "<td>$tinhTrang->tenTinhTrang</td>";

        echo "<td><a href='index.php?a=12&oid=$donDatHang->maDonDatHang'>Chi tiết</a></td>";
        echo "</tr>";
    }

    ?>

</table>
<form action="" method="get">

</form>
