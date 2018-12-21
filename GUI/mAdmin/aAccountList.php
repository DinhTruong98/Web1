
<div class="container">
    <a href="admin.php?a=9" class="btn btn-primary">
        + Thêm người dùng mới
    </a>

    <h3>Danh sách tài khoản:</h3>
    <h5><i>Lưu ý: </i></h5>
    <hr/>
    <?php

    $taiKhoanBUS = new taiKhoanBUS();
    $listTaiKhoan = $taiKhoanBUS->getAll();
    foreach ($listTaiKhoan as $taiKhoan)
    {
        echo ("<p>$taiKhoan->maTaiKhoan || $taiKhoan->tenDangNhap || Bị khoá: $taiKhoan->biXoa  || Loại tài khoản: $taiKhoan->maLoaiTaiKhoan || <a href='admin.php?a=102&bid=$hangSanXuat->maHangSanXuat'>Xoá</a> - <a href='admin.php?a=103&bid=$hangSanXuat->maHangSanXuat'>Khoá</a> - <a href='admin.php?a=104&bid=$hangSanXuat->maHangSanXuat'>Mở khoá</a> - <a href='admin.php?a=7&bid=$hangSanXuat->maHangSanXuat'>Cập nhật</a></p><hr />");
    }
    ?>

</div>