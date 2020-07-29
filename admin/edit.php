<?php
    session_start();
    ob_start();
    
    $client = $_GET['client'];
    
     if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
  
    include_once '../includes/dbh.inc.php';
    $sql = "SELECT * FROM reg_users where id='$client'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result);
    
//    $sql2="select * from history where id='$client' order by history_id desc";
//    $result2 = mysqli_query($conn, $sql2);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="Cater Allen awarded Best Financial Service Provider 2018. We have over 200 years of experience working with financial advisers and intermediaries in the UK." />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#022151">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        
         
        <title>Account Information</title>
     
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <!-- Favicon -->
    <link rel="icon" type="image/png" href="../../img/icon.png" />
     <link href="../dashboard/dash_style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="../images/logo-whiterss.png" style="width: 200px; height: 64px;" alt="logo"> </a>
             <a href="admin_cpanel.php" style="color:#2548af; text-decoration: none;">
                <i class="fas fa-home"></i> 
                <span  style="text-decoration: underline;">ADMIN SECTION</span>
            </a>
        </nav>
                    <div class="container-fluid mt-5">
                          <a href="setting.php" class="btn btn-primary" style="float:right !important; margin-left: 10px;">
                    <i class="fas fa-cogs"></i>
                    Setting
                </a>
                <a href="log_out.php" class="btn btn-danger" style="float:right !important;">
                    Log out
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                    </div>
                        <br>
                        <br>
<?php
   if(isset($_POST['update'])) {
   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $country = mysqli_real_escape_string($conn, $_POST['country']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $psw = mysqli_real_escape_string($conn, $_POST['psw']);
   $re_psw = mysqli_real_escape_string($conn, $_POST['re_psw']);
   $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
   $account_type = mysqli_real_escape_string($conn, $_POST['account_type']);
   $wallet_balance = mysqli_real_escape_string($conn, $_POST['wallet_balance']);
   $email_verified = mysqli_real_escape_string($conn, $_POST['email_verified']);
  
   
   $query = "UPDATE reg_users SET first_name='$first_name', last_name='$last_name', email='$email', country='$country', psw='$psw', re_psw='$re_psw', phone_no='$phone_no', account_type='$account_type', wallet_balance='$wallet_balance', email_verified='$email_verified' WHERE id='$client'";
   
   $result = mysqli_query($conn, $query);
   
   if ($result) {
       header("Location: edit.php?client=".$client);
        echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Account Information successfully Updated</strong><a href ='admin_cpanel.php'> Click here to return to Cpanel</a>
                                 </div>
                        </center>";
        }
        else{
                echo "<center>
                                <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> There is an error somewhere</strong><a href ='admin_cpanel.php'> Click here to return to Cpanel</a>
                                 </div>
                        </center>";
        }
                
   
   }
   ?>
        <div class="container-fluid mx-auto mt-5">
            <h3 class="text-center" style="color: #336699">Edit User Info for <i><?php echo $row['first_name']. ' '. $row['last_name'] ?></i></h3>
                     <div class="col-md-8 mx-auto">
                                    <div class="col-md-12 my-2 text-center">
                                        <img style="width: 200px; height: 200px; border-radius:20px; margin: 0 auto !important;"  src="<?php echo '../profile_pics/'.$row['photo']?>">                 
                                    </div>  
                                       <form  method="post">    
                                <br> 
                                 
                               
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="margin-right: 5px;"></i>
                                            First Name:
                                        </span>
                                    </div>
                                    <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="margin-right: 5px;"></i>
                                            Last Name:
                                        </span>
                                    </div>
                                    <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="margin-right: 5px;"></i>
                                            Email:
                                        </span>
                                    </div>
                                    <input type="text" name="email" value="<?php echo $row['email'] ?>"class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="margin-right: 5px;"></i>
                                            Country:
                                        </span>
                                    </div>
                                    <input type="text" name="country" value="<?php echo $row['country'] ?>"class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                
                                
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Password:
                                        </span>
                                    </div>
                                    <input type="text" name="psw" value="<?php echo $row['psw'] ?>" class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                  <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                           Confirm Password:
                                        </span>
                                    </div>
                                    <input type="text" name="re_psw" value="<?php echo $row['re_psw'] ?>" class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                               
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Phone Number:
                                        </span>
                                    </div>
                                    <input type="text" name="phone_no" value="<?php echo $row['phone_no'] ?>" class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                           Account Type:
                                        </span>
                                    </div>
                                    <input type="text" name="account_type" value="<?php echo $row['account_type'] ?>" class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Wallet Balance:
                                        </span>
                                    </div>
                                    <input type="text" name="wallet_balance" value="<?php echo $row['wallet_balance'] ?>" class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <br>
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Email Verified:
                                        </span>
                                    </div>
                                    <input type="text" name="email_verified" value="<?php echo $row['email_verified'] ?>" class="form-control" required style="margin-top: 0em; padding: 5px; border: 2px solid #e2e2e2;">
                                </div>
                                <div class="text-center">
                                   <input type="submit" name="update" style="font-weight: bold; font-size: 24px; margin-top: 20px;" class="btn btn-primary" value="Update">    
                               </div>
                                <br>
                               
                                </form>
                                
        <!-- *********************************************** -->                        
    
      <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                  'use strict';
                  window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                      form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      }, false);
                    });
                  }, false);
                })();
                
                function move() {
                    alert()
                var elem = document.getElementById("myBar");   
                   
                var width = 0;
                var id = setInterval(frame, 500);
                function frame() {
                  if (width >= 100) {
                    clearInterval(id);
                  } else {
                    width++; 
                    elem.style.width = width + '%'; 
                    elem.innerHTML = width * 1  + '%';
                  }
                }
              }
                </script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
