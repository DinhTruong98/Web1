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
                echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
                return $sanPhamDAO->getBySold();
            } else {
                return $sanPhamDAO->getBySold();
            }
        }
    }

    public function getByTopNew()
    {
        {
            $sanPhamDAO = new sanPhamDAO();
            if ($this->isNull($sanPhamDAO->getNewest()) == false) {
                echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
                return $sanPhamDAO->getNewest();
            } else {
                return $sanPhamDAO->getNewest();
            }
        }
    }


    public function getByBrand($brandID)
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getByBrand($brandID)) == false)
        {
            echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
            return $sanPhamDAO->getByBrand($brandID);
        }else
        {
            return $sanPhamDAO->getByBrand($brandID);
        }
    }

    public function getByType($type)
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getByType($type)) == false)
        {
            echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
            $sanPhamDAO->getByType($type);
        }else
        {
            return $sanPhamDAO->getByType($type);
        }
    }

    function isNull($list)
    {
        if (count($list) == 0)
            return false;
        return true;
    }
}

?>