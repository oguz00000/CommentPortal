<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    try {
        require_once "dbh.inc.php";

        $namequery = 'SELECT * FROM users WHERE username = :username';
        $pwdquery = 'SELECT * FROM users WHERE pwd = :pwd';

        $namestmt = $pdo->prepare($namequery);
        $namestmt->bindParam(':username', $username);
        $namestmt->execute();
        $nameresult = $namestmt->fetch(PDO::FETCH_ASSOC);

        $pwdstmt = $pdo->prepare($pwdquery);
        $pwdstmt->bindParam(':pwd', $pwd);
        $pwdstmt->execute();
        $pwdresult = $pwdstmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

if ($nameresult == $pwdresult && !empty($nameresult)) {
    $_SESSION['usrnm'] = $nameresult['username'];
    $_SESSION['usrid'] = $nameresult['id'];

    header('Location: ../account.php');
} else {
    echo "<h2>There is no such as account!</h2>";
}
