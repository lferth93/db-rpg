<?php
$conn_local = null;

function get_conn() {
    $servername = "db";
    $username = "yun";
    $password = "tianming";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=rpg", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>