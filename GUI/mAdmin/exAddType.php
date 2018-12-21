<?php

    if (isset($_POST['tname']) == false)
        header("location:admin.php?a=3");
    $typeName = $_POST['tname'];
    //echo $typeName;
    $loaiSanPhamBUS = new loaiSanPhamBUS();
    if($loaiSanPhamBUS->insert($typeName) == true)
    {
        header("location:admin.php?a=3");
    }else
        echo 'Thêm không thành công, vui lòng kiểm tra lại tên, có thể bị trùng';
    echo '<br></br><a href="admin.php?a=3" class="btn btn-danger">Click vào đây để trở về</a>';

?>
