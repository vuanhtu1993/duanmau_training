<div class="boxright">

    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <?php if(isset($_SESSION['user'])) {
            $taikhoan = $_SESSION['user'];
            echo "Xin chao".$taikhoan['user'];
        } ?>
        <div class="box_content form_account">
            <form action="index.php?act=signin" method="POST">
                <h4>Tên đăng nhập</h4><br>
                <input type="text" name="user">
                <h4>Mật khẩu</h4><br>
                <input type="password" name="pass"><br>
                <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                <br><input type="submit" value="Đăng nhập" name="signin">
                <li class="form_li"><a href="#">Quên mật khẩu</a></li>
                <li class="form_li"><a href="?act=signup">Đăng kí thành viên</a></li>
            </form>
        </div>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <li><a href="">Đồng hồ </a></li>
                <li><a href="">Laptop</a></li>
                <li><a href="">Điện thoại</a></li>
                <li><a href="">Ipad</a></li>
                <li><a href="">Tivi</a></li>
            </ul>
        </div>
        <div class="box_search">
            <form action="#" method="POST">
                <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
        </div>
    </div>
</div>