<!-- Đóng vai trò là controller -->
<?php
// HEADER
include './views/header.php';

// Router
if(isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    if($act == "product") {
        include './views/product-detail.php';
    }
} else {
    include './views/home.php';
}

// FOOTER
include './views/footer.php';
?>