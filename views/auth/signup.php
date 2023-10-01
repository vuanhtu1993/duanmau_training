<!-- END HEADER -->
<main class="catalog  mb ">

    <div class="boxleft">

        <div class="box_title">Đăng ký thành viên</div>
        <div class="box_content form_account">
            <form action="index.php?act=signup" method="post">
                <div>
                    <p class="text-left">Email</p>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="text-left">
                    Tên đăng nhập
                    <input type="text" name="user"  placeholder="username">
                </div>
                <div class="text-left">
                    Mật khẩu
                    <input type="password" name="pass"  placeholder="password">
                </div>
                <input type="submit" value="Đăng ký" name="signup">
                <input type="reset" value="Nhập lại">
                <?php if(isset($thong_bao)) {
                    echo $thong_bao;
                }?>
            </form>
        </div>

    </div>
    <?php
    include "views/sidebar.php";
    ?>

</main>