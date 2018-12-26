<?php
    $hangSanXuatBUS = new hangSanXuatBUS();
    $listHangSanXuat = $hangSanXuatBUS->getAll();
    $loaiSanPhamBUS = new loaiSanPhamBUS();
    $listLoaiSanPham = $loaiSanPhamBUS->getAll();
?>

<div class="container">
    <h3>Thêm mới sản phẩm mới:</h3>
    <form action="admin.php?a=118" method="post">
        <input type="text" placeholder="Tên sản phẩm" name="pname" required>
        <br /><br />
        <input type="text" placeholder="URL hình ảnh" name="ppicture" required>
        <br /><br />
        <input type="text" placeholder="Giá" name="pprice" required>
        <br /><br />
        <input type="text" placeholder="Số lượng tồn" name="pleft" required>
        <br /><br />
        <input type="text" placeholder="Mô tả" name="pdetail" required>
        <br /><br />
        <select name="pbrand">
            <?php
                foreach ($listHangSanXuat as $hangSanXuat)
                {
                    echo "<option value='$hangSanXuat->maHangSanXuat'>$hangSanXuat->tenHangSanXuat</option>";
                }
            ?>
        </select>
        <br /><br />
        <select name="ptype">
            <?php
            foreach ($listLoaiSanPham as $loaiSanPham)
            {
                echo "<option value='$loaiSanPham->maLoaiSanPham' name='ptype'>$loaiSanPham->tenLoaiSanPham</option>";
            }
            ?>
        </select>        <br /><br />


        <input type="submit" class="btn btn-success" value="Xác nhận">
    </form>

</div>