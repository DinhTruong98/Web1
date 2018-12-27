<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 5:18 PM
 */

if (isset($_POST['key']) == false)
    header("location:admin.php?a=6");
$key = $_POST['key'];
echo "<h1>kết quả tìm kiếm cho từ khoá: $key</h1>";
//$hangSanXuatBUS = new hangSanXuatBUS();
//$listHangSanXuat = $hangSanXuatBUS->search($key);

?>

<table class="table">
    <tr>
        <th>Mã hãng sản xuất </th>
        <th>Tên hãng sản xuất</th>
        <th>Bị khoá</th>
        <th>Xoá</th>
        <th>Khoá</th>
        <th>Mở khoá</th>
        <th>Cập nhật</th>
    </tr>
    <?php

    $hangSanXuatBUS = new hangSanXuatBUS($key);
    $listHangSanXuat = $hangSanXuatBUS->getAll();
    foreach ($listHangSanXuat as $hangSanXuat)    {
        echo "<tr>";
        echo "<td>$hangSanXuat->maHangSanXuat</td>";
        echo "<td>$hangSanXuat->tenHangSanXuat</td>";
        echo "<td>$hangSanXuat->biXoa</td>";
        echo "<td><a href='admin.php?a=102&bid=$hangSanXuat->maHangSanXuat'>Xoá</a></td>";
        echo "<td><a href='admin.php?a=103&bid=$hangSanXuat->maHangSanXuat'>Khoá</a></td>";
        echo "<td><a href='admin.php?a=104&bid=$hangSanXuat->maHangSanXuat'>Mở khoá</a></td>";
        echo "<td><a href='admin.php?a=7&bid=$hangSanXuat->maHangSanXuat'>Cập nhật</a></td>";
        echo "</tr>";
    }

    ?>

</table>
