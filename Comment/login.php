<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="form-container">
        <h1>Login</h1>
        <hr>
        <form action="includes/account.inc.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input required type="username" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
        <center>
            <a href='/Signup/signup.php' class="badge badge-primary">If you're not be registered.</a>
        </center>

    </div>
</body>

<script src="js/bootstrap.min.js"></script>

</html>