
<div class="container">

    <form method="post" action="admin.php?a=101">
        <input type="text" name="bid" placeholder="Tên hãng sản xuất" required />
        <input type="submit" class="btn btn-primary" value="Thêm" required />
    </form>

<p>Danh sách hãng sản xuất :</p>
    <?php

        $hangSanXuatBUS = new hangSanXuatBUS();
        $listHangSanXuat = $hangSanXuatBUS->getAll();
        foreach ($listHangSanXuat as $hangSanXuat)
        {
            echo ("<p>$hangSanXuat->maHangSanXuat - $hangSanXuat->tenHangSanXuat - <a href='#'>Xoá</a> - <a href='#'>Khoá</a> - <a href='#'>Cập nhật</a></p>");
        }
    ?>

</div>