<!-- Đóng vai trò là controller -->
<?php
// Header
include("./views/header.php");

// Content
// Logic điều hướng
if(isset($_GET["act"]) && $_GET["act"] != ""){
    if($_GET['act'] == "product"){
        include("./views/product.php");
    }
} else {
    include("./views/home.php");
}

// Footer
include("./views/footer.php");
?>