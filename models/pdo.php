<?php
function pdo_get_connection(){
    $host = "localhost";
    $dbname = "duanmau/fa2023";
    $username = "root";
    $password = "";
    try {
        // connect
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); //3306
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}   

function pdo_query($sql) {
    try {
        $connect = pdo_get_connection();
        $statement = $connect->prepare($sql);
        $statement->execute();
        $rows = $statement->fetchAll();
        return $rows;
    } catch(PDOException $e) {
        throw $e;
    }
}
?>