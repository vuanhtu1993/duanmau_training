<?php
function loadall_sanpham() {
    $sql = "select * from sanpham where 1";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}
?>