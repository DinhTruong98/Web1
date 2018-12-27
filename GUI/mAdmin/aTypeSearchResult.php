<?php
if (isset($_POST['key']) == false)
    header("location:admin.php?a=6");
$key = $_POST['key'];
echo "<h1>kết quả tìm kiếm cho từ khoá: $key</h1>";
// = new sanPhamBUS();

?>
<table class="table">
    <tr>
        <th>Mã loại sản phẩm </th>
        <th>Tên loại sản phẩm</th>
        <th>Bị khoá</th>
        <th>Xoá</th>
        <th>Khoá</th>
        <th>Mở khoá</th>
        <th>Cập nhật</th>
    </tr>
    <?php

    $loaiSanPhamBUS = new loaiSanPhamBUS();
    $listLoaiSanPham = $loaiSanPhamBUS->search($key);
    foreach ($listLoaiSanPham as $loaiSanPham)
    {
        echo "<tr>";
        echo "<td>$loaiSanPham->maLoaiSanPham</td>";
        echo "<td>$loaiSanPham->tenLoaiSanPham</td>";
        echo "<td>$loaiSanPham->biXoa</td>";
        echo "<td><a href='admin.php?a=108&tid=$loaiSanPham->maLoaiSanPham'>Xoá</a>></td>";
        echo "<td><a href='admin.php?a=109&tid=$loaiSanPham->maLoaiSanPham'>Khoá</a></td>";
        echo "<td><a href='admin.php?a=110&tid=$loaiSanPham->maLoaiSanPham'>Mở khoá</a></td>";
        echo "<td><a href='admin.php?a=8&tid=$loaiSanPham->maLoaiSanPham'>Cập nhật</a></td>";
        echo "</tr>";
    }

    ?>

</table>
