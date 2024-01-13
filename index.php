<!-- Đóng vai trò là controller -->
<?php
// Model
include("./models/pdo.php");
include("./models/sanpham.php");

$products = getAllProducts();
var_dump($products);
die;

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