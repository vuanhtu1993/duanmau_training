<?php
function pdo_get_connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "wd18409";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection fail ".$e->getMessage();
    }
}

function pdo_query($sql) {
    try {
        $conn = pdo_get_connection();
        $sttm = $conn->prepare($sql);
        $sttm->execute();
        $rows = $sttm->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } catch (PDOException $e) {
        echo "Something went wrong ".$e->getMessage();
    }
    
}

?>