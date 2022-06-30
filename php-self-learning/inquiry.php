<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Page</title>
</head>
<body>
    <h3>Inquiry Page</h3>

    <form action="inquiry_form.php" method="POST">
        Name (10 characters): <br><input type="text" name="name-form" maxlength="10" required><br>
        Email: <br><input type="text" name="email-form" maxlength="256"><br>
        Inquiry: <br>
        <textarea name="inquiry-form" cols="50" rows="10"></textarea><br>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>