<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $usersearch = $_POST['usersearch'];

        try {
            require_once "dbh.inc.php";
            $query = "SELECT * FROM comments WHERE username = :usersearch;";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":usersearch", $usersearch);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    } else {
        header("Location: ../index.php");
    }

    echo "<div style='width: 300px; 
                      padding: 20px; 
                      background: lightgray; 
                      border-radius: 5px;'>";
    echo "<h3 style='color: blue;'>" . count($results) .
        " results have found for " . $usersearch . ".</h3>";

    if (empty($results)) {
        echo "<p>There were no results!</p>";
    } else {
        foreach ($results as $row) {
            echo "<div style='width: 200px;
                              line-height: 20px;
                              border-radius: 5px;
                              margin-bottom: 10px;
                              padding: 10px;
                              background-color: lightseagreen;'>";
            echo $row['comment_text'] . "<br>";
            echo "<span style='margin-top: 10px; 
                               color: yellow;'>" . $row['created_at'] . "</span>";
            echo "</div>";
        }
    }

    echo "</div>";
    ?>
</body>

</html>