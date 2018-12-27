
<div class="container">

    <form method="post" action="admin.php?a=126">
        <a href="admin.php?a=11" class="btn btn-primary">
            + Thêm sản phẩm mới
        </a> Hoặc
        <input type="text" name="key" placeholder="Tên sản phẩm cần tìm kiếm" required />
        <input type="submit" class="btn btn-primary" value="Tìm kiếm" required />
    </form>

    <h3>Danh sách sản phẩm :</h3>
    <hr/>



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
        $listSanPham = $sanPhamBUS->getAll();
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

</div>
