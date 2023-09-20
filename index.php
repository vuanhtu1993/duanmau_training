<!-- Vai trò controller - logic -->
<!-- Điều hướng trang -->
<?php
// HEADER
include './views/header.php';

// MAIN
if(isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch($act) {
        case "product":
            include './views/product.php';
            break;
        default:
            include './views/home.php';
    }
    
} else {
    include './views/home.php';
}

// FOOTER
include './views/footer.php';
?>