<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <form class="search-bar" action="includes/search.php" method="post">
        <label for="">You can search</label><br>
        <input type="text" name="usersearch" placeholder="Search...">
        <input type="submit" value="submit">
    </form>
</body>

</html>