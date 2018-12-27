
<div class="container">
    <form method="post" action="admin.php?a=123">
        <a href="admin.php?a=9" class="btn btn-primary">
            + Thêm người dùng mới
        </a> Hoặc
        <input type="text" name="key" placeholder="Tên tài khoản cần tìm kiếm" required />
        <input type="submit" class="btn btn-primary" value="Tìm kiếm" required />
    </form>
    <h3>Danh sách tài khoản:</h3>
    <h5><i>Lưu ý: </i></h5>
    <hr/>
    <table class="table">
        <tr>
            <th>Mã tài khoản </th>
            <th>Tên đăng nhập</th>
            <th>Bị khoá</th>
            <th>Loại tài khoản</th>
            <th>Xoá</th>
            <th>Khoá</th>
            <th>Mở khoá</th>
            <th>Cập nhật</th>
        </tr>
            <?php

            $taiKhoanBUS = new taiKhoanBUS();
            $listTaiKhoan = $taiKhoanBUS->getAll();
            foreach ($listTaiKhoan as $taiKhoan)
            {
                echo "<tr>";
                echo "<td>$taiKhoan->maTaiKhoan</td>";
                echo "<td>$taiKhoan->tenDangNhap</td>";
                echo "<td>$taiKhoan->biXoa</td>";
                echo "<td>$taiKhoan->maLoaiTaiKhoan</td>";
                echo "<td><a href='admin.php?a=113&uid=$taiKhoan->maTaiKhoan'>Xoá</a></td>";
                echo "<td><a href='admin.php?a=114&uid=$taiKhoan->maTaiKhoan'>Khoá</a></td>";
                echo "<td><a href='admin.php?a=115&uid=$taiKhoan->maTaiKhoan'>Mở khoá</a></td>";
                echo "<td><a href='admin.php?a=10&uid=$taiKhoan->maTaiKhoan'>Cập nhật</a></td>";
                echo "</tr>";
            }

            ?>

    </table>


</div>