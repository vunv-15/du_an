<?php 

class HomeController
{
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }

    public function home(){
        echo "Đây là Home 1234";
    }

    public function trangChu(){
        echo "Đây là trang chủ của tôi";
    }

    public function danhSachSanPham(){
        $listProduct = $this->modelSanPham->getAllProduct();
        // var_dump($listProduct);die();
        require_once './views/listProduct.php';
    }

}