<script>
    $(document).ready(function () {
        //alert("asdasd");
        // function tru(id) {
        //     var soluong = $('#item_'+id).val();
        //     alert("asdasd");
        //     if (soluong>0)
        //     {
        //
        //         $('#item_'+id).val(soluong - 1);
        //     }
        // }
        // function truu() {
        //     alert("asdasd");
        // }


        $('.btnTru').click(function () {
            var maSanPham = $(this).attr('data-itemid');
            var soLuong = $('#item_'+maSanPham).val();
            //alert(soLuong);
            if (soLuong>1)
            {
                $('#item_'+maSanPham).val(parseInt(soLuong)-1);
                //alert("")
            }
        });
        $('.btnCong').click(function () {
            var maSanPham = $(this).attr('data-itemid');
            var soLuong = $('#item_'+maSanPham).val();
            //alert(soLuong);
            if (soLuong<10)
            {
                $('#item_'+maSanPham).val(parseInt(soLuong)+1);
                //alert("")
            }
        });
    });
</script>

<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 10:40 PM
 */

$tongSoTien = 0;
    if (isset($_SESSION['cart']) == false)
        echo "<h1>Bạn chưa có sản phẩm nào trong giỏ hàng</h1>";

    else {
    $cart = unserialize($_SESSION['cart']);
    //var_dump($cart);
    $tongSoTien = $cart->tongSoTien;
}
?>
<?php
if (isset($_SESSION['cart']) == true) {
    echo "<h2>Danh sách sản phẩm trong giỏ hàng</h2>";
}
?>
<form action="index.php?a=8" method="post">
    <table class='table table-striped'>
        <thead class='thead-dark'>
        <tr>
            <?php
            if (isset($_SESSION['cart']) == true) {
                echo "<th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>";
            }
            ?>

        </tr>
        </thead>

        <?php

        ?>

        <?php
        if (isset($_SESSION['cart']) == true) {
            foreach ($cart->listSanPham as $item) {
                $sanPham = $item->sanPham;
                echo "<tr>
                    <td>$sanPham->maSanPham</td>
                    <td>$sanPham->tenSanPham</td>
                    <td>$sanPham->giaSanPham</td>
                    <td>
                    <button type='button' data-itemid='$sanPham->maSanPham' class='btnTru'><span class='glyphicon glyphicon-minus'></span></button>
                    <input type='number' name='soluong' value='$item->soLuong' id='item_$sanPham->maSanPham' readonly='readonly'>
                    <button data-itemid='$sanPham->maSanPham' class='btnCong' type='button'><span class='glyphicon glyphicon-plus'></span></button>
                    </td>
                    <td><a class='btn btn-danger' href='index.php?a=106&pid=$sanPham->maSanPham'>Xoá</a></td>
                </tr>";
                //var_dump($cart);
            }
        }
        ?>
        <tr>
            <td></td>
            <td><h4>Tổng số tiền: <?php echo $tongSoTien;?></h4></td>
            <td></td>
            <td></td>;


        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <?php
                if (isset($_SESSION['cart']) == true) {
                    echo "<input type='submit' class='btn btn-warning' value='Thanh toán'></td>";
                }
                ?>

        </tr>
    </table>
</form>
