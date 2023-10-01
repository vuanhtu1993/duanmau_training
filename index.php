<!-- Vai trò controller - logic -->
<!-- Điều hướng trang -->
<?php
session_start();
include './models/pdo.php';
include './models/sanpham.php';
include './models/taikhoan.php';
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
        case "signup":
            if(isset($_POST["signup"]) && $_POST["signup"]) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                create_taikhoan($email,$user, $pass);
                $thong_bao = "Đăng ký thành công";
            }
            include './views/auth/signup.php';
            break;
        case "signin":
            if(isset($_POST['signin']) && $_POST['signin']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $current_user = check_user($user, $pass);
                if(is_array($current_user)) {
                    $_SESSION['user'] = $current_user;
                    $thong_bao = "Dang nhap thanh cong";
                    header('location: index.php');
                } else {
                    $thong_bao = "Thong tin dang nhap khong chinh xac";
                }
            }
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