<?php

if (isset($_GET['oid']) == false)
    header("location:admin.php?a=5");
$oid = $_GET['oid'];

$chiTietDHBUS = new chiTietDonHangBUS();
$listChiTietDH = $chiTietDHBUS->getByOID($oid);
$donHangBUS = new donDatHangBUS();
$donHang = $donHangBUS->getByID($oid);
//var_dump($donHang);
?>

<h2>Hoá đơn mua hàng</h2>
<h4>Mã đơn hàng: <?php echo $oid;?></h4>
<table class="table">
    <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
    </tr>

        <?php
        foreach ($listChiTietDH as $chiTietDH)
        {
            $sanPhamBUS = new sanPhamBUS();
            $sanPham = $sanPhamBUS->getByID($chiTietDH->maSanPham);
            echo "<tr>
        <td>$sanPham->tenSanPham</td>
        <td>$chiTietDH->soLuong</td>
        <td>$sanPham->giaSanPham</td>
        </tr>";
        }
        ?>
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th></th>
        <th>Tổng thành tiền</th>
        <th><?php echo $donHang->tongThanhTien;?></th>
    </tr>


    </tr>

</table>
<button class="btn btn-warning" onclick="window.print()">In hoá đơn</button>