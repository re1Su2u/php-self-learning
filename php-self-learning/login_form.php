<?php
    include "db.php";

    session_start();

    $sessionid = session_id();

    $posted_id = $_POST["id-form"];
    $posted_password = $_POST["pass-form"];

    $sql_select_id = "SELECT id FROM user_info WHERE id = '$posted_id'";
    $result_select_id = $con->query($sql_select_id);

    #$id = $result_select_id;

    if ($result_select_id->num_rows > 0) {
        $id = $result_select_id->fetch_assoc()["id"];

        $sql_select_password = "SELECT id FROM user_info WHERE `password` = '$posted_password'";
        $result_select_password = $con->query($sql_select_password);

        if ($result_select_password->num_rows > 0) {
            $_SESSION['id'] = $posted_id;
            echo "<script> location.href='top.php';</script>";
        } else {
            echo "<script> location.href='login.php';</script>";
        }
    } else {
        echo "<script> location.href='login.php';</script>"; 
    }

    /*
    TODO: what I want to add
    Session system ->
    1. Login and insert user(session ID) and last-login-time
    2. Update last-login-time every same user change page
    3. if 5 or some minutes passed from last-login-time,
       session is expired
    */

?>