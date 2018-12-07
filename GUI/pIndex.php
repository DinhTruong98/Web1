<div class="container"

<dl>
    <dt><h1>Sản phẩm mới nhất</h1></dt>
    <?php
        $sanPhamBUS = new sanPhamBUS();
        $listSanPham = $sanPhamBUS->getByTopNew();
        foreach ($listSanPham as $sanPham)
        {
            echo "    
    <dd>
        <div class='card' style='width: 20rem;'>
            <div class='div-list-img'><img class='list-img' src='$sanPham->hinhURL' alt='Card image cap'></div>
            <div class='card-body'>
                <h5 class='card-title'><b>$sanPham->tenSanPham</b></h5>
                <p class='card-text'><b>Giá: </b>$sanPham->giaSanPham $</p>
                <a href='#' class='btn btn-success'>Thêm vào giỏ</a>
                <br />
                <a href='index.php?a=4&pid=$sanPham->maSanPham' class='btn'>Xem chi tiết</a>
            </div>
        </div>
    </dd>";
        }
    ?>

</dl>
<div class ="clearfix"></div>>
<dl>
    <dt><h1>Sản phẩm bán chạy nhất</h1></dt>
    <?php
    $sanPhamBUS = new sanPhamBUS();
    $listSanPham = $sanPhamBUS->getByTopSold();
    foreach ($listSanPham as $sanPham)
    {
        echo "    
    <dd>
        <div class='card' style='width: 20rem;'>
            <div class='div-list-img'><img class='list-img' src='$sanPham->hinhURL' alt='Card image cap'></div>
            <div class='card-body'>
                <h5 class='card-title'><b>$sanPham->tenSanPham</b></h5>
                <p class='card-text'><b>Giá: </b>$sanPham->giaSanPham $</p>
                <a href='#' class='btn btn-success'>Thêm vào giỏ</a>
                <br />
                <a href='index.php?a=4&pid=$sanPham->maSanPham' class='btn'>Xem chi tiết</a>
            </div>
        </div>
    </dd>";
    }
    ?>

</dl>
</div>
<div></div>
<?php
?>