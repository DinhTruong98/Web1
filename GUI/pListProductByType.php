<div class="container"
<dl>

    <?php
    /**
     * Created by PhpStorm.
     * User: D
     * Date: 12/6/2018
     * Time: 7:24 PM
     */
    if (isset($_GET['type']) == false)
    {
        header('location:index.php');
    }
    else
    {
        $typeID = $_GET['type'];
        $sanPhamBUS = new sanPhamBUS();
        $listSanPham = $sanPhamBUS->getByType($typeID);
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
    }

    ?>


</dl>
</div>

