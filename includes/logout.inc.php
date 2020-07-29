<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../links/sign-in.php");
    exit();
