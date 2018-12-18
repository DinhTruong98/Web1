<?php

class sanPhamBUS
{


    public function getAll()
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getAll()) == false)
        {
            echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
            return $sanPhamDAO->getAll();
        }else
        {
            return $sanPhamDAO->getAll();
        }
    }

    public function searchByName($tenSanPham)
    {
        $sanPhamDAO = new sanPhamDAO();
        if (count($sanPhamDAO->searchByName($tenSanPham)) != 0)
        {
            return $sanPhamDAO->searchByName($tenSanPham);
        }
        else{
            return false;
        }

    }

    public function viewCount($maSanPham, $luotXem)
    {
        $sanPhamDAO = new sanPhamDAO();
        $sanPhamDAO->viewCount($maSanPham, $luotXem);
    }

    public function getByID($pid)
    {
        $sanPhamDAO = new sanPhamDAO();
        return $sanPhamDAO->getByID($pid);
    }

    public function getByTopSold()
    {
        {
            $sanPhamDAO = new sanPhamDAO();
            if ($this->isNull($sanPhamDAO->getBySold()) == false) {

                return $sanPhamDAO->getBySold();
            } else {
                echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
            }
        }
    }

    public function getByTopNew()
    {
        {
            $sanPhamDAO = new sanPhamDAO();
            if ($this->isNull($sanPhamDAO->getNewest()) == false) {

                return $sanPhamDAO->getNewest();
            } else {
                echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
            }
        }
    }


    public function getByBrand($brandID)
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getByBrand($brandID)) == false)
        {

            return $sanPhamDAO->getByBrand($brandID);
        }else
        {
            echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
        }
    }

    public function getByType($type)
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getByType($type)) == false)
        {
            return $sanPhamDAO->getByType($type);
        }else
        {
            return false;
        }
    }

    function isNull($list)
    {
        if (count($list) == 0)
            return true;
        return false;
    }
}

?>