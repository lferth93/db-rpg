<?php
$servername = "localhost:3035";
$username = "yun";
$password = "tianming";
$dbname = "rpg";
$conn_local = null;

function get_conn(){
    if ($conn_local == null){
        phpinfo();
        $conn_local = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    return $conn_local;
}
?>