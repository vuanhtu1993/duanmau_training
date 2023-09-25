<!-- Vai trò controller - logic -->
<!-- Điều hướng trang -->
<?php
// MODELS
include './models/pdo.php';
include './models/sanpham.php';
// HEADER
include './views/header.php';

$list_sanpham = loadall_sanpham();
// MAIN
if(isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch($act) {
        case "product":
            include './views/product.php';
            break;
        default:
            include './views/home.php';
            break;
    }
    
} else {
    include './views/home.php';
}

// FOOTER
include './views/footer.php';
?>