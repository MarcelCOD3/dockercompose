<?php
$servername = "database";
$username = "root";
$password = "";
$dbname = "draftoDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    global $db;
    $db = $conn;
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}