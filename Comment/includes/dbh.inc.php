<?php
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testdb', $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
