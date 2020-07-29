<?php
 include_once 'dbh.inc.php';

      //delete record
    if (isset($_GET['del'])) {
        $client = $_GET['del'];
        mysqli_query($conn, "DELETE FROM history WHERE id='$client' order by history_id desc  ");
        header("Location: ../admin/member_profile.php?client");
    }
//