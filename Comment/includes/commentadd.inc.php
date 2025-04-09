<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {    
    $comment = $_POST['comment'];
    $id = $_SESSION['usrid'];
    
    try {
        require_once 'dbh.inc.php';

        $query = 'INSERT INTO comments(comment_text, users_id) VALUES (?, ?)';

        $stmt = $pdo->prepare($query);
        $stmt->execute([$comment, $id]);

        header('Location: ../account.php');
        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
} else {
    header('Location: ../account.php');
}
