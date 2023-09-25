<?php

function loadall_sanpham($keyw = "") {
    $sql = "select * from sanpham where 1";

    if($keyw != "") {
        $sql .= " and name like %$keyw%";
    }

    $sql .= " order by id desc";

    return pdo_query($sql);
}

?>