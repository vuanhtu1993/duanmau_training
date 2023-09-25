<?php

function pdo_get_connection() {
    $host = "mysql:host=localhost;dbname=duanmau/fa2023";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO($host, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        throw $e;
    }
}

function pdo_query($sql) {
    try {
        $conn = pdo_get_connection();
        $stat = $conn->prepare($sql);
        $stat->execute();
        $rows = $stat->fetchAll();
        return $rows;

    } catch(PDOException $e) {
        throw $e;
    }
}

?>