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
$sanPhamBUS = new sanPhamBUS();

$listSanPham = $sanPhamBUS->search($key);


?>

<table class="table">
    <tr>
        <th>Mã sản phẩm </th>
        <th>Tên sản phẩm</th>
        <th>Hãng sản xuất</th>
        <th>Loại sản phẩm</th>
        <th>Bị khoá</th>
        <th>Xoá</th>
        <th>Khoá</th>
        <th>Mở khoá</th>
        <th>Cập nhật</th>
    </tr>
    <?php

    $sanPhamBUS = new sanPhamBUS();
    $listSanPham = $sanPhamBUS->search($key);
    foreach ($listSanPham as $sanPham)
    {
        $hangSanXuatBUS = new hangSanXuatBUS();
        $hangSanXuat = $hangSanXuatBUS->getByID($sanPham->maHangSanXuat);
        $loaiSanPhamBUS = new loaiSanPhamBUS();
        $loaiSanPham = $loaiSanPhamBUS->getByTID($sanPham->maLoaiSanPham);
        echo "<tr>";
        echo "<td>$sanPham->maSanPham</td>";
        echo "<td>$sanPham->tenSanPham</td>";
        echo "<td>$hangSanXuat->tenHangSanXuat</td>";
        echo "<td>$loaiSanPham->tenLoaiSanPham</td>";
        echo "<td>$sanPham->biXoa</td>";
        echo "<td><a href='admin.php?a=117&pid=$sanPham->maSanPham'>Xoá</a></td>";
        echo "<td><a href='admin.php?a=119&pid=$sanPham->maSanPham'>Khoá</a></td>";
        echo "<td><a href='admin.php?a=120&pid=$sanPham->maSanPham'>Mở khoá</a></td>";
        echo "<td><a href='admin.php?a=12&pid=$sanPham->maSanPham'>Cập nhật</a></td>";
        echo "</tr>";
    }

    ?>

</table>