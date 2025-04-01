<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_SESSION['usrnm'];
    $id = $_SESSION['usrid'];
    $comment = $_POST['comment'];

    try {
        require_once 'dbh.inc.php';

        $query = 'INSERT INTO comments(username, comment_text, users_id) VALUES (?, ?, ?)';

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $comment, $id]);

        header('Location: ../account.php');
        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
} else {
    header('Location: ../account.php');
}
