<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usersearch = $_POST['usersearch'];

    try {
        require_once "dbh.inc.php";

        $namequery = 'SELECT * FROM users WHERE username = :usersearch';

        $namestmt = $pdo->prepare($namequery);
        $namestmt->bindParam(':usersearch', $usersearch);
        $namestmt->execute();
        $nameresult = $namestmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($nameresult)) {
            $id = $nameresult['id'];

            $query = "SELECT * FROM comments WHERE users_id = :id;";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo "<h2>There is no such as account!</h2>";
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../search.php");
}

if (!empty($results)) {
    $_SESSION["username"] = $usersearch;
    $_SESSION["results"] = $results;

    header("Location: ../result.php");
} else {
    echo "<h2>There is no comments!</h2>";
}
