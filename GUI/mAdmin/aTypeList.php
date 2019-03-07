
<div class="container">

    <div class="col-sm-3">
        <form method="post" action="admin.php?a=107">
            <input type="text" name="tname" placeholder="Tên loại sản phẩm" required />
            <input type="submit" class="btn btn-primary" value="Thêm" required />
        </form>
    </div>


    <form method="post" action="admin.php?a=124">
        <input type="text" name="key" placeholder="Tên loại sản phẩm" required />
        <input type="submit" class="btn btn-primary" value="Tìm kiếm" required />
    </form>


    <h3>Danh sách loại sản phẩm:</h3>
    <h5><i>Lưu ý: chỉ được xoá khi không còn sản phẩm nào thuộc loại sản phẩm này</i></h5>
    <hr/>

</div>


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
    $listLoaiSanPham = $loaiSanPhamBUS->getAll();
    foreach ($listLoaiSanPham as $loaiSanPham)
    {
        echo "<tr>";
        echo "<td>$loaiSanPham->maLoaiSanPham</td>";
        echo "<td>$loaiSanPham->tenLoaiSanPham</td>";
        echo "<td>$loaiSanPham->biXoa</td>";
        echo "<td><a href='admin.php?a=108&tid=$loaiSanPham->maLoaiSanPham'>Xoá</a></td>";
        echo "<td><a href='admin.php?a=109&tid=$loaiSanPham->maLoaiSanPham'>Khoá</a></td>";
        echo "<td><a href='admin.php?a=110&tid=$loaiSanPham->maLoaiSanPham'>Mở khoá</a></td>";
        echo "<td><a href='admin.php?a=8&tid=$loaiSanPham->maLoaiSanPham'>Cập nhật</a></td>";
        echo "</tr>";
    }

    ?>

</table>