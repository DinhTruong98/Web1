
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
    <?php

    $sanPhamBUS = new sanPhamBUS();

    $listSanPham = $sanPhamBUS->getAll();
    foreach ($listSanPham as $sanPham)
    {
        $hangSanXuatBUS = new hangSanXuatBUS();
        $hangSanXuat = $hangSanXuatBUS->getByID($sanPham->maHangSanXuat);
        $loaiSanPhamBUS = new loaiSanPhamBUS();
        $loaiSanPham = $loaiSanPhamBUS->getByTID($sanPham->maLoaiSanPham);
        echo ("<p><b>Mã SP: </b>$sanPham->maSanPham ||<b>Tên: </b> $sanPham->tenSanPham ||<b>Hãng SX: </b> $hangSanXuat->tenHangSanXuat || <b>Loại sản phẩm: </b> $loaiSanPham->tenLoaiSanPham || Bị khoá: $sanPham->biXoa  || <a href='admin.php?a=117&pid=$sanPham->maSanPham'>Xoá</a> - <a href='admin.php?a=119&pid=$sanPham->maSanPham'>Khoá</a> - <a href='admin.php?a=120&pid=$sanPham->maSanPham'>Mở khoá</a> - <a href='admin.php?a=12&pid=$sanPham->maSanPham'>Cập nhật</a></p><hr />");
    }
    ?>

</div>
