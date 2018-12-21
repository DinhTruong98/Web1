<div class="container">
    <h3>Thêm mới người dùng:</h3>
    <form action="admin.php?a=112" method="post">
        <input type="text" placeholder="Tên đăng nhập" name="uname" required>
        <br /><br />
        <input type="text" placeholder="Mật khẩu" name="upwd" required>
        <br /><br />
        <input type="text" placeholder="Tên hiển thị" name="udisplay" required>
        <br /><br />
        <input type="text" placeholder="Số điện thoại" name="uphone" required>
        <br /><br />
        <input type="text" placeholder="Email" name="umail" required>
        <br /><br />
        <input type="address" placeholder="Địa chỉ" name="uaddress" required>
        <br /><br />
        <input type="number" placeholder="Loại tài khoản" name="urole" required> <i>*nhập: 0 - Người quản trị, 1 - khách hàng</i>
        <br /><br />


        <input type="submit" class="btn btn-success" value="Xác nhận">
    </form>

</div>