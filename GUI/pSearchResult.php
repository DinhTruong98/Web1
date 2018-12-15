<div class="container"
<dl>
    <?php

    if (isset($_POST['key']) == false)
    {
        header('location:index.php');
    }
    else
    {
        $key = $_POST['key'];
        $sanPhamBUS = new sanPhamBUS();
        $listSanPham = $sanPhamBUS->searchByName($key);
        if (($sanPhamBUS->searchByName($key)) == false)
        {
            echo '<h1>Không thể tìm thấy sản phẩm</h1>';
        }
        else
        foreach ($listSanPham as $sanPham)
        {
            echo "    
    <dd>
        <div class='card' style='width: 26rem;'>
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
    }

    ?>


</dl>
</div>