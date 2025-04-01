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

        h1 {
            margin: 170px 0 15px 525px;
        }

        form {
            width: 210px;
            margin-left: 470px;
        }

        input {
            outline: 0;
            width: 205px;
            height: 30px;
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

        .signup-hyperlink {
            margin: 20px 0 15px 485px;
        }

        button:hover {
            background: green;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form action="includes/account.inc.php" method="post">
        <input required type="text" name="username" placeholder="Username">
        <input required type="text" name="password" placeholder="Password">
        <button>Submit</button>
    </form>
    
    <div class="signup-hyperlink">
        <a href='/InsertUser/index.php'>If you're not be registered.</a>
    </div>
</body>

</html>