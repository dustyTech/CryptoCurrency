<?php
 include_once 'dbh.inc.php';

      //delete record
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($conn, "DELETE FROM investment_mini WHERE id=$id");
        header("Location: ../admin/investment_plans.php");
    }elseif (isset($_GET['del1'])) {
        $id1 = $_GET['del1'];
        mysqli_query($conn, "DELETE FROM investment_silver WHERE id=$id1");
        header("Location: ../admin/investment_plans.php");
}elseif (isset($_GET['del2'])) {
        $id2 = $_GET['del2'];
        mysqli_query($conn, "DELETE FROM investment_gold WHERE id=$id2");
        header("Location: ../admin/investment_plans.php");
}elseif (isset($_GET['del3'])) {
        $id3 = $_GET['del3'];
        mysqli_query($conn, "DELETE FROM investment_platinum WHERE id=$id3");
        header("Location: ../admin/investment_plans.php");
}elseif (isset($_GET['del4'])) {
        $id4 = $_GET['del4'];
        mysqli_query($conn, "DELETE FROM investment_super WHERE id=$id4");
        header("Location: ../admin/investment_plans.php");
}