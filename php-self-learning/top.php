<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top page</title>
</head>
<body>
    <h2>Top Page</h2>
    <h4>Welcome to php learing site!</h4>
    <?php
        echo 'User: ' .$_SESSION['id'];
    ?> <br>

    <a href="inquiry.php">To inquiry page</a><br>
    <a href="blog.php">To blog page</a><br>
    <br>
    <form action="logout_form.php">
        <input type="submit" value="Logout">
    </form>

    
</body>
</html>