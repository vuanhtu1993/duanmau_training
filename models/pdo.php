<?php

function pdo_get_connection() {
    $host = "mysql:host=localhost;dbname=duanmau/fa2023";
    $username = "root";
    $password = "";
    try {
        $connect = new PDO($host, $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    } catch(PDOException $e) {
        throw $e;
    }
}

function pdo_query($sql) {
    try {
        $connect = pdo_get_connection();
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    } catch(PDOException $e) {
        throw $e;
    }
}

?>