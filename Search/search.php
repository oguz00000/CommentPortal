<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/search.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="form-container">
        <h1>Search</h1>
        <hr>
        <form class="search-bar" action="includes/search.inc.php" method="post">
            <div class="form-group">
                <label for="usersearch">Username</label>
                <input required type="username" class="form-control" name="usersearch" placeholder="Username">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
    </div>
</body>

<script src="js/bootstrap.min.js"></script>

</html>