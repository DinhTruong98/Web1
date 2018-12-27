
<div class="container">

    <div class="col-sm-3">
        <form method="post" action="admin.php?a=101">
            <input type="text" name="bid" placeholder="Tên hãng sản xuất" required />
            <input type="submit" class="btn btn-primary" value="Thêm" required />
        </form>
    </div>


    <form method="post" action="admin.php?a=125">
        <input type="text" name="key" placeholder="Tên hãng sản xuất" required />
        <input type="submit" class="btn btn-primary" value="Tìm kiếm" required />
    </form>




    <h3>Danh sách hãng sản xuất :</h3>
    <h5><i>Lưu ý: chỉ được xoá khi không còn sản phẩm nào thuộc nhà sản xuất này</i></h5>
    <hr/>

</div>

<table class="table">
    <tr>
        <th>Mã hãng sản xuất </th>
        <th>Tên hãng sản xuất</th>
        <th>Bị khoá</th>
        <th>Xoá</th>
        <th>Khoá</th>
        <th>Mở khoá</th>
        <th>Cập nhật</th>
    </tr>
    <?php

    $hangSanXuatBUS = new hangSanXuatBUS();
    $listHangSanXuat = $hangSanXuatBUS->getAll();
    foreach ($listHangSanXuat as $hangSanXuat)    {
        echo "<tr>";
        echo "<td>$hangSanXuat->maHangSanXuat</td>";
        echo "<td>$hangSanXuat->tenHangSanXuat</td>";
        echo "<td>$hangSanXuat->biXoa</td>";
        echo "<td><a href='admin.php?a=102&bid=$hangSanXuat->maHangSanXuat'>Xoá</a></td>";
        echo "<td><a href='admin.php?a=103&bid=$hangSanXuat->maHangSanXuat'>Khoá</a></td>";
        echo "<td><a href='admin.php?a=104&bid=$hangSanXuat->maHangSanXuat'>Mở khoá</a></td>";
        echo "<td><a href='admin.php?a=7&bid=$hangSanXuat->maHangSanXuat'>Cập nhật</a></td>";
        echo "</tr>";
    }

    ?>

</table>