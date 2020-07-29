<?php
    session_start();
    ob_start();
    
//    $client = $_GET['client'];
    
    include_once '../includes/dbh.inc.php';
   
    
   
    
    $sql3="select * from bitcoinadd ";
    $result3 = mysqli_query($conn, $sql3);
     $row = mysqli_fetch_array($result3);
  
   // $resultChecker = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Investment Mini | CapitalProFx Trading </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="shortcut icon" type="image/png" href="../images/favico.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
         <style>
             .bg-light {
            background: #091b27 !important;
        }
        
        footer {
            background: #1b1b1b;
        }

        .footer p {
            font-size: 16px;
            letter-spacing: 1px;
            color: #ccc;
        }
        .up{
            width: 20px;
        }
        </style>
    </head>
    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="../images/logo-whiters.png" style="width: 200px; height: 64px;" alt="logo"> </a>
             <a href="admin_cpanel.php" style="color:white; text-decoration: none;">
                <i class="fas fa-home"></i> 
                <span  style="text-decoration: underline;">ADMIN SECTION</span>
            </a>
        </nav>
        <div class="container-fluid mt-5">
            <a href="admin_cpanel.php" class="btn btn-primary">
                    <i class="fa fa-angle-left"></i>
                     Go back to Admin Section
                </a>
              <a href="setting.php" class="btn btn-primary" style="float:right !important; margin-left: 10px;">
                    <i class="fas fa-cogs"></i>
                    Setting
                </a>
                <a href="log_out.php" class="btn btn-danger" style="float:right !important;">
                    Log out
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            <br>
            <br>
                
        
          <center style="clear:both;">
                    <h3 class="mt-5 text-danger"> BITCOIN ADDRESS</h3>
                    
                    <div class="row mt-5">
                        <div class="col-md-6 p-5">
                            <div class="">
                               <p><?php echo $row['address']?></p>  
                                                                        
                                   <form method="post">
                                <div class="form-group">
                                    <label>Btc Address</label>
                                   
                                    <input type="text" name="mini_name1" class="form-control" placeholder="Enter name1" autocomplete="on"  ><br><br>
                                     <button type="submit" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Edit
                                    </button>
                                     
             <?php
                                //random id values
                                $trans_id = strtotime('now');
                            
                                if(isset($_POST['plus'])){
                                    $mini_name1 = mysqli_real_escape_string($conn, $_POST['mini_name1']);
                                    
                                    
                                      $sql = "SELECT * FROM bitcoinadd WHERE address='$mini_name1'";
                                    $result = mysqli_query($conn, $sql);
                                    $resultChecker = mysqli_num_rows($result);
                                  $sqlplus = "UPDATE bitcoinadd SET address='$mini_name1'";
                                    mysqli_query($conn, $sqlplus);
                                    
                                    if($resultChecker > 0) {
       
                                        echo "<center>
                                                     <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                             <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                             <strong> Address Already added! </strong>
                                                      </div>
                                             </center>";

                                    }
                                    else {
                                    $q1="insert into bitcoinadd values('$mini_name1')";
                                    mysqli_query($conn, $q1);
//                                    
                                    echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Plan successfully added! </strong>
                                 </div>
                        </center>";
                                    header("Location: bitcoinadd.php?client=".$client);
                                }
                      
                                }
                            ?>
          
                                   
                              </div>
                            </form>
                            
                            </div>
                            
                            
                            
                          </div>
                          
                </div>
                  
                              </div> 
                  
    </body>
</html>
