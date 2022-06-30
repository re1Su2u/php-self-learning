<?php
    include "db.php";

    session_start();

    $sessionid = session_id();

    $posted_id = $_POST["name-form"];
    $posted_email = $_POST["email-form"];
    $posted_inquiry = $_POST["inquiry-form"];


    echo "<script> location.href='inquiry.php' </script>";
?>