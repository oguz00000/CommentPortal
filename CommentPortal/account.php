<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            user-select: none;
        }

        body {
            background: rgb(174, 174, 174);
        }

        h2 {
            margin: 30px 0 110px 480px;
        }

        h1 {
            margin: 0 0 10px 470px;
        }

        form {
            width: 210px;
            margin-left: 470px;
        }

        textarea {
            outline: 0;
            width: 205px;
            height: 80px;
            margin-bottom: 10px;
            padding-left: 5px;
            font-size: 15px;
            border: 3px solid rgb(154, 154, 255);
            border-radius: 5px;
        }

        button {
            border: 0;
            width: auto;
            height: 30px;
            padding: 0 10px;
            margin-left: 70px;
            text-align: center;
            font-size: 17px;
            background: rgb(154, 154, 255);
            border-radius: 5px;
            transition-duration: 1s;
        }

        .login-hyperlink {
            margin: 20px 0 15px 505px;
        }

        button:hover {
            background: green;
        }
    </style>
</head>

<body>
    <h2>Welcome <?php session_start();
                echo $_SESSION['usrnm']; ?></h2>
    <h1>Add Comment</h1>
    <form action="includes/commentadd.inc.php" method="post">
        <textarea required name="comment" placeholder="You can add comment"></textarea>
        <button class="submit">Submit</button>
    </form>

    <div class="login-hyperlink">
        <a href='/CommentPortal/login.php'>Return to login page</a>
    </div>
</body>

</html>