<?php
$dbusername = "root";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", $dbusername);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
