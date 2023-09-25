<main class="catalog  mb ">

    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>

        <div class="items">
            <?php foreach($list_sanpham as $sp) {
                extract($sp);
                $sp_image = "img/$img";
                echo '
                <div class="box_items">
                    <div class="box_items_img">
                        <img src="'.$sp_image.'" alt="">
                        <div class="add" href="">ADD TO CART</div>
                    </div>
                    <a class="item_name" href="">'.$name.'</a>
                    <p class="price">'.$price.'$</p>
                </div>';
                // var_dump($sp);
            } ?>

        </div>
    </div>
    <?php include 'sidebar.php' ?>

</main>