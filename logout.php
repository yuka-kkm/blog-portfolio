<?php

    session_start();

    // Remove All Session Variables
    session_unset();

    // Destroy The Session
    session_destroy();

    header("location: login.php");
    exit;

?>