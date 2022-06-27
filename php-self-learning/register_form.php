<?php
    include "db.php";

    session_start();

    $posted_id = $_POST["id-form"];
    $posted_password = $_POST["pass-form"];

    $sql_select_id = "SELECT id FROM user_info WHERE id = '$posted_id'";
    $result_select_id = $con->query($sql_select_id);

    if ($result_select_id->num_rows == 0) {
        $sql_register_id_password = "INSERT INTO user_info (`id`, `password`) VALUE ('$posted_id', '$posted_password');";

        if ($con->query($sql_register_id_password)) {
            echo "<script> location.href='login.php' </script>";
        } else {
            echo "It goes wrong..";
        }

    } else {
        echo "<script> location.href='register.php' </script>";
        echo "<p>This ID has already registered. You should try an other one.</p>";
    }


?>