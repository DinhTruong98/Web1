
<div class="container">

    <form method="post" action="admin.php?a=107">
        <input type="text" name="tname" placeholder="Tên loại sản phẩm" required />
        <input type="submit" class="btn btn-primary" value="Thêm" required />
    </form>

    <h3>Danh sách loại sản phẩm:</h3>
    <h5><i>Lưu ý: chỉ được xoá khi không còn sản phẩm nào thuộc loại sản phẩm này</i></h5>
    <hr/>
    <?php

    $loaiSanPhamBUS = new loaiSanPhamBUS();
    $listLoaiSanPham = $loaiSanPhamBUS->getAll();
    foreach ($listLoaiSanPham as $loaiSanPham)
    {
        echo ("<p>$loaiSanPham->maLoaiSanPham || $loaiSanPham->tenLoaiSanPham || Bị khoá: $loaiSanPham->biXoa  || <a href='admin.php?a=108&tid=$loaiSanPham->maLoaiSanPham'>Xoá</a> - <a href='admin.php?a=109&tid=$loaiSanPham->maLoaiSanPham'>Khoá</a> - <a href='admin.php?a=110&tid=$loaiSanPham->maLoaiSanPham'>Mở khoá</a> - <a href='admin.php?a=8&tid=$loaiSanPham->maLoaiSanPham'>Cập nhật</a></p><hr />");
    }
    ?>

</div>