<?php
// MODEL SANPHAM
function loadall_sanpham() {
    $sql = "select * from sanpham where 1 order by id desc";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

?>