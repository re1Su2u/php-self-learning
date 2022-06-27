<?php
    session_start();

    echo $_SESSION["uid"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h3>Session page</h3>

    <form action="session_form.php" method="POST">
        ID      : <input type="text" name="id-form"><br>
        Password: <input type="text" name="pass-form"><br>
        <input type="submit" value="Login">
    </form>

    <?php 
        if (isset($_SESSION)) {
            echo "True";
        } else {
            echo "False";
        }
    ?>

</body>
</html>