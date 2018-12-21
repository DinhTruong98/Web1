<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 10:17 PM
 */
if (isset($_GET['tid']) == false)
    header("location:admin.php?a=3");
$tid = $_GET['tid'];
$loaiSanPhamBUS = new loaiSanPhamBUS();
$loaiSanPham = $loaiSanPhamBUS->getByTID($tid);

?>

<div class="container">
    <h3>Thông tin hiện tại:</h3>
    <p>Mã loại: <?php echo $loaiSanPham->maLoaiSanPham?></p>
    <p>Tên loại: <?php echo $loaiSanPham->tenLoaiSanPham?></p>
    <p>Bị xoá?: <?php echo $loaiSanPham->biXoa?></p>
    <h3>Cập nhật:</h3>
    <form action="admin.php?a=111" method="post">
        <input type="text" placeholder="Tên loại sản phẩm" name="tname" required>
        <input type="number" placeholder="Bị xoá? (0 hoặc 1)" name="bixoa" required>
        <input type="hidden" name="tid" value="<?php echo $tid; ?>" required>
        <input type="submit" class="btn btn-success" value="Xác nhận">
    </form>

</div>