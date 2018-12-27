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
        <th>Ngày lập</th>
        <th>Tổng thành tiền</th>
        <th>Người mua</th>
        <th>Tình trạng</th>
        <th>Xoá</th>
        <th>Cập nhật</th>
        <th>Chi tiết</th>
    </tr>
    <?php

    $tinhTrangBUS1 = new tinhTrangBUS();
    $ltt = $tinhTrangBUS1->getAll();
    $donDatHangBUS = new donDatHangBUS();
    $listDonDatHang = $donDatHangBUS->getAll();
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
        echo "<td>$taiKhoan->tenHienThi</td>";
        echo "<td>$tinhTrang->tenTinhTrang</td>";
        echo "<td><a href='admin.php?a=127&oid=$donDatHang->maDonDatHang'>Xoá</a></td>";
        echo "<td>";
        echo "<form action='admin.php?a=128' method='post'>";
        echo "<select name='tt'>";
        foreach ($ltt as $tt)
        {
            echo "<option value='$tt->maTinhTrang'>$tt->tenTinhTrang</option>";
        }
        echo "</select>";
        echo "<input type='hidden' name='oid' value='$donDatHang->maDonDatHang'>";
        echo "<input type='submit' class='btn btn-success' value='Xác nhận'>";
        echo "</form>";
        echo "</td>";
        echo "<td><a href='admin.php?a=13&oid=$donDatHang->maDonDatHang'>Chi tiết</a></td>";
        echo "</tr>";
    }

    ?>

</table>
<form action="" method="get">

</form>