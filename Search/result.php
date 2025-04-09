<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/result.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php
    session_start();

    $results = $_SESSION["results"];
    $usrnm = $_SESSION["username"];
    ?>

    <div class="result-box">
        <h3><?php echo count($results) . " results have found for " . $usrnm ?></h3>

        <?php foreach ($results as $row) { ?>
            <div class="row-box">
                <?php echo $row['comment_text'] ?><br>
                <span><?php echo $row['created_at'] ?></span>
            </div>
        <?php } ?>
    </div>
</body>

</html>