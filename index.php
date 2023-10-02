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
            if(isset($_POST['signup']) && $_POST['signup']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                dang_ky($email, $user, $pass);
                $thong_bao = "Dang ky thanh cong";
                header("location: index.php");
            }
            include './views/auth/signup.php';
            break;
        case "signin":
            if(isset($_POST['signin']) && $_POST['signin']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $taikhoan = dang_nhap($user, $pass);
                if(is_array($taikhoan)) {
                    $thong_bao = "Dang nhap thanh cong";
                    // Luu session
                    $_SESSION['user'] = $taikhoan;
                    if($taikhoan['role'] == 1) {
                        header('location: /admin');
                    } else {
                        header('location: index.php');
                    }
                } else {
                    $thong_bao = "Dang nhap that bai";
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