<?php
    session_start();

    unset($_SESSION);
    session_regenerate_id(true);
    session_destroy();

    echo "<script> location.href='login.php' </script>";
?>