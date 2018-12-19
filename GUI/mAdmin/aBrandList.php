
<div class="container">

    <form method="post" action="admin.php?a=101">
        <input type="text" name="bid" placeholder="Tên hãng sản xuất" required />
        <input type="submit" class="btn btn-primary" value="Thêm" required />
    </form>

<h3>Danh sách hãng sản xuất :</h3>
    <h5><i>Lưu ý: chỉ được xoá khi không còn sản phẩm nào thuộc nhà sản xuất này</i></h5>
    <hr/>
    <?php

        $hangSanXuatBUS = new hangSanXuatBUS();
        $listHangSanXuat = $hangSanXuatBUS->getAll();
        foreach ($listHangSanXuat as $hangSanXuat)
        {
            echo ("<p>$hangSanXuat->maHangSanXuat || $hangSanXuat->tenHangSanXuat || Bị khoá: $hangSanXuat->biXoa  || <a href='admin.php?a=102&bid=$hangSanXuat->maHangSanXuat'>Xoá</a> - <a href='admin.php?a=103&bid=$hangSanXuat->maHangSanXuat'>Khoá</a> - <a href='admin.php?a=104&bid=$hangSanXuat->maHangSanXuat'>Mở khoá</a> - <a href='admin.php?a=7&bid=$hangSanXuat->maHangSanXuat'>Cập nhật</a></p><hr />");
        }
    ?>

</div>