<?php

if (isset($_GET['pid']) == false)
    header("location:admin.php?a=4");
$pid = $_GET['pid'];
$sanPhamBUS = new sanPhamBUS();
$sanPham = $sanPhamBUS->getByID($pid);
//var_dump($taiKhoan);
$hangSanXuatBUS = new hangSanXuatBUS();
$listHangSanXuat = $hangSanXuatBUS->getAll();
$loaiSanPhamBUS = new loaiSanPhamBUS();
$listLoaiSanPham = $loaiSanPhamBUS->getAll();
?>

<div class="container">
    <h3>Cập nhật cho sản phẩm <?php echo "$sanPham->tenSanPham"?>:</h3>
    <form action="admin.php?a=122" method="post">
        <input type="text" placeholder="<?php echo "$sanPham->tenSanPham"?>" name="pname" required> <i>Tên sản phẩm</i>
        <br /><br />
        <input type="text" placeholder="<?php echo "$sanPham->hinhURL"?>" name="ppicture" required><i>URL hình sản phẩm</i>
        <br /><br />
        <input type="text" placeholder="<?php echo "$sanPham->giaSanPham"?>" name="pprice" required><i>Giá sản phẩm</i>
        <br /><br />
        <input type="text" placeholder="<?php echo "$sanPham->soLuongTon"?>" name="pleft" required> <i>Số sản phẩm còn lại</i>
        <br /><br />
        <input type="text" placeholder="<?php echo "$sanPham->moTa"?>" name="pdetail" required> <i>Mô tả về sản phẩm</i>
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
        <input type="hidden" name="pid" value="<?php echo $pid;?>">

        <input type="submit" class="btn btn-success" value="Xác nhận">
    </form>

</div>