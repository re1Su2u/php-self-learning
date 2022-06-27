<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h3>Login Page</h3>

    <form action="login_form.php" method="POST">
        ID      : <input type="text" name="id-form"><br>
        Password: <input type="text" name="pass-form"><br>
        <input type="submit" value="Login">
    </form>
    <br>
    <p>If you don't have an account...</p>
    <a href="register.php">To register page</a>
    <br><br>
    <a href="../index.php">To index page</a>
    <br>
    <a href="session/session.php">To session page</a>
    
</body>
</html>