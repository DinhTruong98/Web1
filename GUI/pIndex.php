<div class="container"


<dl>
    <?php
        $sanPhamBUS = new sanPhamBUS();
        $listSanPham = $sanPhamBUS->getAll();
        foreach ($listSanPham as $sanPham)
        {
            echo "    
    <dd>
        <div class='card' style='width: 26rem;'>
            <img class='card-img-top' src='$sanPham->hinhURL' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'><b>$sanPham->tenSanPham</b></h5>
                <p class='card-text'>$sanPham->moTa</p>
                <a href='#' class='btn btn-success'>Thêm vào giỏ</a>
                <br />
                <a href='#' class='btn'>Xem chi tiết</a>
            </div>
        </div>
    </dd>";
        }
    ?>

</dl>
</div>

<?php
?>