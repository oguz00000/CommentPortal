<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <h1>Signup</h1>
    <form action="includes/formhandler.inc.php" method="post">
        <input required type="text" name="nickname" class="entry" placeholder="Username"><br>
        <input required type="text" name="password" class="entry" placeholder="Password"><br>
        <input required type="text" name="email" class="entry" placeholder="E-mail"><br>
        <input type="submit" name="button1" id="button1" value="Submit" />
    </form>
</body>

</html>