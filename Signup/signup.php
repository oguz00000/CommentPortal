<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/signup.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="form-container">
        <h1>Signup</h1>
        <hr>
        <form action="includes/signup.inc.php" method="post">
            <div class="form-group">
                <label for="nickname">Username</label>
                <input required type="username" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input required type="email" class="form-control" name="email" class="entry" placeholder="E-mail">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
    </div>
</body>

<script src="js/bootstrap.min.js"></script>

</html>