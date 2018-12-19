<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/19/2018
 * Time: 10:17 PM
 */
if (isset($_GET['bid']) == false)
    header("location:admin.php?a=2");
$bid = $_GET['bid'];
$hangSanXuatBUS = new hangSanXuatBUS();
$hangSanXuat = $hangSanXuatBUS->getByID($bid);

?>

<div class="container">
    <h3>Thông tin hiện tại:</h3>
    <p>Mã hãng: <?php echo $hangSanXuat->maHangSanXuat?></p>
    <p>Tên hãng: <?php echo $hangSanXuat->tenHangSanXuat?></p>
    <p>Link logo hãng: <?php echo $hangSanXuat->logoURL?> (nếu trống thì chưa đặt)</p>
    <p>Bị xoá?: <?php echo $hangSanXuat->biXoa?></p>
    <h3>Cập nhật:</h3>
    <form action="admin.php?a=106" method="post">
        <input type="text" placeholder="Tên hãng sản xuất" name="bname" required>
        <input type="text" placeholder="Logo URL" name="blogo" required>
        <input type="number" placeholder="Bị xoá? (0 hoặc 1)" name="bixoa" required>
        <input type="hidden" name="bid" value="<?php echo $bid; ?>" required>
        <input type="submit" class="btn btn-success" value="Xác nhận">
    </form>

</div>
