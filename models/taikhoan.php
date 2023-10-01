<?php

function create_taikhoan($email, $user, $pass) {
    $sql = "insert into taikhoan(email, user, pass) values ('$email','$user', '$pass')";
    pdo_execute($sql);
}

function check_user($user, $pass) {
    $sql = 'select * from taikhoan where user="'.$user.'" and pass="'.$pass.'" ';
    return pdo_query_one($sql);
}

?>