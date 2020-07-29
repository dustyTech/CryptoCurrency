<?php
    include_once '../includes/dbh.inc.php';

        if(isset($_POST['send_mail'])) {
          $contact_name = mysqli_real_escape_string($conn, $_POST['contact_name']);
          $contact_email = mysqli_real_escape_string($conn, $_POST['contact_email']);
          $contact_subject = mysqli_real_escape_string($conn, $_POST['contact_subject']);
          $contact_message = mysqli_real_escape_string($conn, $_POST['contact_message']);
          $contact_phone = mysqli_real_escape_string($conn, $_POST['contact_phone']);
          $date_send = date("Y/m/d");

          $sql = "INSERT INTO contact_us(contact_name, contact_email, contact_subject, contact_phone, contact_message, date_send)
          VALUES('$contact_name', '$contact_email', '$contact_subject', '$contact_phone', '$contact_message', '$date_send')";

          mysqli_query($conn, $sql);

          //header("location: indexp.php?mail=sent_successfully");
      }
      
    //delete record
    if (isset($_GET['delContact'])) {
        $id = $_GET['delContact'];
        mysqli_query($conn, "DELETE FROM contact_us WHERE id=$id");
        header("Location: ../admin/contact_mail.php");
    }
     
      
     //retrieve client details from data base
     $sqlRetrieve = 'SELECT * FROM contact_us';
     $result = mysqli_query($conn, $sqlRetrieve);
     $resultChecker = mysqli_num_rows($result);
   
 ?>
                        
