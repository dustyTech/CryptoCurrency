<?php
    session_start();
    ob_start();
    
    $client = $_GET['client'];
    
    include_once '../includes/dbh.inc.php';
   
    
   
    
    $sql3="select * from investment_platinum where id='$client'";
    $result3 = mysqli_query($conn, $sql3);
    
  
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
                    <h3 class="mt-5 text-danger"> INVESTMENT PLATINUM</h3>
                    
                    <div class="row mt-5">
                        <div class="col-md-6 p-5">
                            <div class="">
                                
                                   <form method="post">
                                <div class="form-group">
                                    <label>Platinum Package Name</label>
                                   
                                    <input type="text" name="mini_name1" class="form-control" placeholder="Enter name1" autocomplete="on"  ><br><br>
                                     <label>Prices</label>
                                    <input type="number" name="price1" class="form-control" placeholder="Enter price1"><br><br>
                                    <button type="submit" class="btn btn-primary mt-3" name="submit" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Edit
                                    </button>
                                      <button type="submit" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Platinum Plan
                                         </button>
             <?php
                                //random id values
                                $trans_id = strtotime('now');
                            
                                if(isset($_POST['plus'])){
                                    $mini_name1 = mysqli_real_escape_string($conn, $_POST['mini_name1']);
                                    $price1 = mysqli_real_escape_string($conn, $_POST['price1']);
                                    
                                      $sql = "SELECT * FROM investment_platinum WHERE plan_name1='$mini_name1'";
                                    $result = mysqli_query($conn, $sql);
                                    $resultChecker = mysqli_num_rows($result);
//                                   $sqlplus = "UPDATE investment_mini SET plan_name1='$mini_name1', price1 = '$price1' WHERE id='$client'";
//                                    mysqli_query($conn, $sqlplus);
                                    
                                    if($resultChecker > 0) {
       
                                        echo "<center>
                                                     <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                             <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                             <strong> Plan Already added! </strong>
                                                      </div>
                                             </center>";

                                    }
                                    else {
                                    $q1="insert into investment_platinum (plan_name1, price1 ) values('$mini_name1', '$price1')";
                                    mysqli_query($conn, $q1);
//                                    
                                    echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Plan successfully added! </strong>
                                 </div>
                        </center>";
                                    header("Location: investment_plans.php?client=".$client);
                                }
                      
                                }
                            ?>
          
                                   
                              </div>
                            </form>
                            
                            </div>
                            
                            
                             <?php
                                //random id values
                                $trans_id = strtotime('now');
                            
                                if(isset($_POST['submit'])){
                                    $mini_name1 = mysqli_real_escape_string($conn, $_POST['mini_name1']);
                                    $price1 = mysqli_real_escape_string($conn, $_POST['price1']);
                                 
                                   $sqlplus = "UPDATE investment_platinum SET plan_name1='$mini_name1', price1 = '$price1' WHERE id='$client'";
                                    mysqli_query($conn, $sqlplus);
//                                    $q1="insert into investment_plans (plan_name1, price1, plan_name2, price2, plan_name3, price3, plan_name4, price4, plan_name5, price5) values('$mini_name1', '$price1', '$mini_name2','$price2','$mini_name3','$price3', '$mini_name4', '$price4', '$mini_name5', '$price5')";
//                                    mysqli_query($conn, $q1);
//                                    
                                    echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Plan successfully added! </strong>
                                 </div>
                        </center>";
                                    header("Location: investment_plans.php?client=".$client);
                                }
                      
                            
                            ?>
                            
                          </div>
                          
                </div>
                  
                              </div> 
                  
    </body>
</html>
