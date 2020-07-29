
<hmtl>
  <head>
       <meta charset="UTF-8">
        <title> Verify Account | Bitxpros Trading </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link href="../images/logo-whiterss.png" rel="icon" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <style>
        .bg-light {
            background: #091b27 !important;
        }
       
        </style>
    </head>
    
    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="../images/logo-whiterss.png" class="brand" alt="logo"> </a>
        </nav>
        
<?php
    include_once '../includes/dbh.inc.php';
    session_start();
    $token = $_GET['token'];
    
    $sql = "UPDATE reg_users SET email_verified='1' WHERE token='$token'";
    
   if (mysqli_query($conn, $sql)) {
       echo '<h1> Your email has been verified <a href="sign-in.php">Click on this link to log you into your account</a></h1>';
   }else {
       echo 'failed';
   }
 

?>

</body>
</html>