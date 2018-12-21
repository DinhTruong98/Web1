<div class="container">
    <h3>Thêm mới người dùng:</h3>
    <form action="admin.php?a=106" method="post">
        <input type="text" placeholder="Tên hãng sản xuất" name="bname" required>
        <input type="text" placeholder="Logo URL" name="blogo" required>
        <input type="number" placeholder="Bị xoá? (0 hoặc 1)" name="bixoa" required>
        <input type="hidden" name="bid" value="<?php echo $bid; ?>" required>
        <input type="submit" class="btn btn-success" value="Xác nhận">
    </form>

</div>