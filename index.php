<!-- Đóng vai trò là controller -->
<?php

// HEADER
include './views/header.php';

// action (act)
if(isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    if($act == "product") {
        // In ra man hinh trang chi tiet
        include './views/product.php';
    }
} else {
    include './views/home.php';
}

// FOOTER
include './views/footer.php';
?>