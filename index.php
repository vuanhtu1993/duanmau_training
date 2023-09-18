<!-- Đóng vai trò Controller -->
<?php
// HEADER
include './views/header.php';

if(isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    // Điều hướng trang
    switch($act) {
        case "product":
            include './views/product-detail.php';
            break;
    }
} else {
    include './views/home.php';
}

// FOOTER
include './views/footer.php';
?>