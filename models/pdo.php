<?php
function pdo_get_connection(){
    $host = "localhost";
    $dbname = "duanmau/fa2023";
    $username = "root";
    $password = "";
    try {
        // connect
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); //3306
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}   

function pdo_query($sql) {
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $connect = pdo_get_connection();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch(PDOException $e) {
        throw $e;
    } finally {
        unset($connect);
    }
}   

function pdo_query_one($sql) {
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $connect = pdo_get_connection();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    } catch(PDOException $e) {
        throw $e;
    } finally {
        unset($connect);
    }
}

?>