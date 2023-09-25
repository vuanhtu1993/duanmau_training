<?php

function loadall_sanpham($keyword = "") {
    $sql = "select * from sanpham where 1";
    if ($keyword != "") {
        $sql .= ' and name like "%'.$keyword.'%"';
    }
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

?>