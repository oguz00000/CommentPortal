<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/account.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php session_start(); ?>

    <center>
        <h3>Welcome <?php echo $_SESSION['usrnm']; ?></h3>
        <hr>
    </center>

    <div class="form-container">
        <form action="includes/commentadd.inc.php" method="post">
            <div class="form-group">
                <label for="comment">Comment Area</label>
                <textarea required  rows="4" class="form-control" name="comment" placeholder="You can add comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href='/CommentPortal/login.php' class="badge badge-primary">Return to login page.</a>
    </div>
</body>

<script src="js/bootstrap.min.js"></script>

</html>