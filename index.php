<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models
require_once './models/Student.php';
require_once './models/SanPham.php';

// Route
$act = $_GET['act'] ?? '/';
// if($_GET['act']){
//     $act = $_GET['act'];
// }else{
//     $act = '/';
// }

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->home(),

    'trangChu' => (new HomeController())->trangChu(),
    // BASE_URL/?act=trangChu

    'danh-sach-san-pham' => (new HomeController())->danhSachSanPham()
    // BASE_URL/?act=danh-sach-san-pham
};