<?php
    include_once 'dbh.inc.php';
    
    //retrive client details from database
    $sql = 'SELECT * FROM users';
    $result = mysqli_query($conn, $sql);
    $resultChecker = mysqli_num_rows($result);
    
    
