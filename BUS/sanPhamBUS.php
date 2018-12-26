<?php

class sanPhamBUS
{


    public function getAll()
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getAll()) == false)
        {
            return $sanPhamDAO->getAll();
        }else
        {
            echo "<h1>Sản phẩm đang tạm hết hàng</h1>";
            return $sanPhamDAO->getAll();
        }
    }

    public function getAvailable()
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getAvailable()) == false)
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

    public function getRelative($sanPham)
    {
        {
            $sanPhamDAO = new sanPhamDAO();
            if ($this->isNull($sanPhamDAO->getRelative($sanPham)) == false) {

                return $sanPhamDAO->getRelative($sanPham);
            } else {
                echo "<h1>Không thể tìm thấy sản phẩm liên quan</h1>";
            }
        }
    }

    public function delete($pid)
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getByID2($pid)) == true){
            return false;
        }else
        {
            $sanPhamDAO->delete($pid);
            return true;
        }

    }

    public function insert($sanPham)
    {
        $sanPhamDAO = new sanPhamDAO();
        if ($this->isNull($sanPhamDAO->getByName($sanPham->tenSanPham)) == false)
        {
            return false;
        }
        else {
            $sanPhamDAO->insert($sanPham);
            if ($this->isNull($sanPhamDAO->getByName($sanPham->tenSanPham)) == false) {
                return true;
            } else return false;
        }
    }

    public function setDelete($maSanPham)
    {
        $sanPhamDAO = new sanPhamDAO();
        $sanPhamDAO->setDelete($maSanPham);
    }

    public function unsetDelete($maSanPham)
    {
        $sanPhamDAO = new sanPhamDAO();
        $sanPhamDAO->unsetDelete($maSanPham);
    }

    public function update($sanPham)
    {
        $sanPhamDAO = new sanPhamDAO();
        $sanPhamDAO->update($sanPham);
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

    public function search($key)
    {
        $sanPhamDAO = new sanPhamDAO();
        return $sanPhamDAO->search($key);
    }

    function isNull($list)
    {
        if (count($list) == 0)
            return true;
        return false;
    }
}

?>