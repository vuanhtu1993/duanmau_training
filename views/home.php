<main class="catalog  mb ">

    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>

        <article class="items">
            <?php foreach($list_sanpham as $sp) {
                // var_dump($sp);
                $sp_img = "img/".$sp['img'];
                echo '
                <div class="box_items">
                    <div class="box_items_img">
                        <img src="'.$sp_img.'" alt="">
                        <div class="add" href="">ADD TO CART</div>
                    </div>
                    <a class="item_name" href="">'.$sp['name'].'</a>
                    <p class="price">'.$sp['price'].'</p>
                </div>';
            } ?>
            <div class="box_items">
                <div class="box_items_img">
                    <img src="" alt="">
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href="">iphone 15</a>
                <p class="price">1200</p>
            </div>
            <div class="box_items">
                <div class="box_items_img">
                    <img src="" alt="">
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href="">iphone 15</a>
                <p class="price">1200</p>
            </div>
            <div class="box_items">
                <div class="box_items_img">
                    <img src="" alt="">
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href="">iphone 15</a>
                <p class="price">1200</p>
            </div>
            <div class="box_items">
                <div class="box_items_img">
                    <img src="" alt="">
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href="">iphone 15</a>
                <p class="price">1200</p>
            </div>
            <div class="box_items">
                <div class="box_items_img">
                    <img src="" alt="">
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href="">iphone 15</a>
                <p class="price">1200</p>
            </div>
            <div class="box_items">
                <div class="box_items_img">
                    <img src="" alt="">
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href="">iphone 15</a>
                <p class="price">1200</p>
            </div>
        </article>
    </div>
    <?php include 'sidebar.php' ?>

</main>