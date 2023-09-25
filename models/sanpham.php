<?php

function loadall_sanpham($keyword = "") {
    $sql = "select * from sanpham where 1 order by id desc";
    if ($keyword != "") {
        $sql .= 'where name like %'.$keyword.'%';
    }
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

?>