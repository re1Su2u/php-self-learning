<?php
    include "db.php";

    session_start();

    $sessionid = session_id();

    $posted_id = $_POST["name-form"];
    $posted_email = $_POST["email-form"];
    $posted_inquiry = $_POST["inquiry-form"];

    $sql_insert_inquiry_info = "INSERT INTO inquiry VALUE ('$posted_id', '$posted_email', '$posted_inquiry');";
    $result_insert_sql = $con->query($sql_insert_inquiry_info);

    if ($result_insert_sql) {
        echo "<script> location.href='top.php' </script>";
    } else {
        echo "<script> location.href='inquiry.php' </script>";
    }

?>