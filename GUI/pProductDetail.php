

<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/7/2018
 * Time: 8:18 PM
 */
    if (isset($_GET['pid']) == false)
    {
        header('location:index.php');
    }
    $pid = $_GET['pid'];

    $sanPhamBUS = new sanPhamBUS();
    $sanPham = $sanPhamBUS->getByID($pid);
    $hangSanXuatBUS = new hangSanXuatBUS();
    $hangSanXuat = $hangSanXuatBUS->getByID($sanPham->maHangSanXuat);
    $loaiSanPhamBUS = new loaiSanPhamBUS();
    $loaiSanPham = $loaiSanPhamBUS->getByTID($sanPham->maLoaiSanPham);
    $sanPhamBUS->viewCount($sanPham->maSanPham, $sanPham->soLuotXem);

    echo "
    <div class='container'>
    <div class='col-sm-6'>
        <img src='$sanPham->hinhURL' style='width:100%' style='height:100%'>
    </div>
    
    <div class='col-sm-6'>
    <h2>Chi tiết sản phẩm</h2>

    <table class='table'>
        <thead class='thead-dark'>
        <tr>
            <th>Tên sản phẩm</th>
            <td>$sanPham->tenSanPham</td>
        </tr>
        </thead>
        <tr>
            <th>Mã sản phẩm</th>
            <td>$sanPham->maSanPham</td>
        </tr>
        <tr>
            <th>Giá</th>
            <td>$sanPham->giaSanPham $</td>
        </tr>
        <tr>
            <th>Số lượng còn lại</th>
            <td>$sanPham->soLuongTon</td>
        </tr>
        <tr>
            <th>Số lượt xem</th>
            <td>$sanPham->soLuotXem</td>
        </tr>
        <tr>
            <th>Ngày nhập</th>
            <td>$sanPham->ngayNhap</td>
        </tr>
        <tr>
            <th>Hãng sản xuất</th>
            <td>$hangSanXuat->tenHangSanXuat</td>
        </tr>
        <tr>
            <th>Loại sản phẩm</th>
            <td>$loaiSanPham->tenLoaiSanPham</td>
        </tr>
    </table>
        </div>
    </div>
    <div align='center'>
        <a href='index.php?a=104&pid=$sanPham->maSanPham' class='btn btn-success'><span class='glyphicon glyphicon-shopping-cart'></span> Thêm vào giỏ</a>
    </div>
            
            <h2>Mô tả về sản phẩm</h2>
    <h4>$sanPham->moTa</h4>
    <hr />
    ";



?>

<dl>
    <dt><h2>Sản phẩm cùng loại được xem nhiều nhất</h2></dt>
    <?php
    $sanPhamBUS = new sanPhamBUS();
    $sanPham1 = $sanPhamBUS->getByID($pid);
    $listSanPham = $sanPhamBUS->getRelative($sanPham1);
    //var_dump($listSanPham);
    foreach ($listSanPham as $sanPham)
    {
        echo "    
    <dd>
        <div class='card' style='width: 20rem;'>
            <div class='div-list-img'><img class='list-img' src='$sanPham->hinhURL' alt='Card image cap'></div>
            <div class='card-body'>
                <h5 class='card-title'><b>$sanPham->tenSanPham</b></h5>
                <p class='card-text'><b>Giá: </b>$sanPham->giaSanPham $</p>
                <a href='index.php?a=104&pid=$sanPham->maSanPham' class='btn btn-success'>Thêm vào giỏ</a>
                <br />
                <a href='index.php?a=4&pid=$sanPham->maSanPham' class='btn'>Xem chi tiết</a>
            </div>
        </div>
    </dd>";
    }
    ?>
