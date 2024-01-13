<?php
function getAllProducts() {
    $sql = "select * from sanpham where 1";
    $products = pdo_query($sql);
    return $products;
}

?>