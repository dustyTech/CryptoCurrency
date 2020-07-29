<?php
    session_start();
    ob_start();
    
    $client = $_GET['client'];
    
    include_once '../includes/dbh.inc.php';
    $sql = "SELECT * FROM reg_users where id='$client'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result);
    
    $sql2="select * from history where id='$client' order by history_id desc";
    $result2 = mysqli_query($conn, $sql2);
    
    
    $sql3="select * from trading_history where trade_id='$client' order by id desc";
    $result3 = mysqli_query($conn, $sql3);
    
   // $resultChecker = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Member Profile | Bitxpros Trading </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="shortcut icon" type="image/png" href="../images/logo-whiterss.png"/>
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
            <a href="../index.php" class="navbar-brand"><img src="../images/logo-whiterss.png" style="width: 200px; height: 64px;" alt="logo"> </a>
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
                    <h3 class="mt-5 text-danger"> USER'S PROFILE</h3>
                    <h3> <?php echo  $row['first_name'] . " " .  $row['last_name']?> </h3>
                    
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="">
                                    <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                                       <thead>
                                           <tr><div style="background-color: #007bff; text-transform: uppercase; color: #fff;">User Info</div></tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                               <td>Name:</td>
                                               <td><?php echo  $row['first_name'] . " " .  $row['last_name']?> </td>
                                           </tr>
                                           <tr>
                                               <td>Email:</td>
                                               <td><?php echo  $row['email']?> </td>
                                           </tr>
                                           <tr>
                                               <td>Phone no:</td>
                                               <td><?php echo $row['phone_no']?></td>
                                           </tr>
                                           <tr>
                                               <td>Country:</td>
                                               <td><?php echo  $row['country']?></td>
                                           </tr>
                                           <tr>
                                               <td>Date Registered:</td>
                                               <td><?php echo  $row['date_of_reg']?></td>
                                           </tr>
                                           <tr>
                                               <td>Last Login:</td>
                                               <td><?php echo  $row['last_login']?></td>
                                           </tr>
                                           <tr>
                                               <td>Wallet Balance</td>
                                               <td><?php echo "$" . $row['wallet_balance']?></td>
                                           </tr>
                                       </tbody>
                                    </table>
                            </div>
                            <h3 class="mt-5" style="text-transform: uppercase; font-weight: 300;">Enter amount below </h3>
                            <form method="post">
                                <div class="form-group">
                                    <input type="number" name="amount" class="form-control" placeholder="Enter amount">
                                    
                                    <button type="submit" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Wallet Balance
                                    </button>
                                    <button type="submit" href="" class="btn btn-danger mt-3" name="minus" style="margin-bottom: 10px;">
                                         <i class="fa fa-minus"></i>
                                        Subtract from Wallet Balance
                                    </button>
                              </div>
                            </form>
                            
                            <?php
                                //random id values
                                $trans_id = strtotime('now');
                            
                                if(isset($_POST['plus'])){
                                    $amount = $_POST['amount'];
                                    $total = $amount + $row['wallet_balance'];
                                    $sqlplus = "UPDATE reg_users SET wallet_balance='$total' WHERE id='$client'";
                                    $current_time = strtotime("now");
                                    $date = date("jS M, Y h:ia", $current_time);                                    
                                    mysqli_query($conn, $sqlplus);
                                    $q1="insert into history values('NULL', '$trans_id', '$client','$date','$amount','deposit', 'complete')";
                                    mysqli_query($conn, $q1);
                                    echo "<center>
                                <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Deposit successfully added! </strong>
                                 </div>
                        </center>";
                                    header("Location: member_profile.php?client=".$client);
                                }
                                
                                if(isset($_POST['minus'])){
                                    $amount = $_POST['amount'];
                                    $total = $row['wallet_balance'] - $amount;
                                    $sqlplus = "UPDATE reg_users SET wallet_balance='$total' WHERE id='$client'";
                                    $current_time = strtotime("now");
                                    $date = date("jS M, Y h:ia", $current_time);                                      
                                    mysqli_query($conn, $sqlplus);
                                    $q2="insert into history values('NULL', '$trans_id', '$client','$date','$amount','withdrawal', 'complete')";
                                    mysqli_query($conn, $q2);      
                                
                                    header("Location: member_profile.php?client=".$client);
                                }
                            
                            ?>
                            
                        </div>
                        <div class="col-md-6">
                                     <div class="">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr><div style="background-color: #dc3545; text-transform: uppercase; color: #fff;">Wallet History</div></tr>
                     </thead>
                      <thead>
                        <tr>
                            <th>DATE</th>
                            <th>TRANSACTION ID</th>
                            <th>TYPE</th>
                            <th>AMOUNT</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        <?php
                            while($row2 = mysqli_fetch_array($result2)){
                        ?>
                        <tr>
                            <td><?php echo $row2['date'];  ?></td>
                            <td><?php echo $row2['trans_id'];  ?></td>
                            <td><?php echo $row2['type'];  ?></td>
                            <td><?php echo $row2['amount'];  ?></td>
                            <td><?php echo $row2['status'];  ?></td>
                        
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                            
                            
                        </div>
                    </div>
                </center>
        </div>
        
        
        <hr>
        
          <center style="clear:both;">
                    <h3 class="mt-5 text-danger"> TRADING HISTORY</h3>
                    <h3> <?php echo  $row['first_name'] . " " .  $row['last_name']?> </h3>
                    
                    <div class="row mt-5">
                        <div class="col-md-6 p-5">
                            <div class="">
                                    <h3 class="mt-5" style="text-transform: uppercase; font-weight: 200;">Enter Trade History below </h3>
                            <form method="post">
                                <div class="form-group">
                                     <label>Asset</label>
                                    <input type="text" name="asset" class="form-control" placeholder="Enter Asset"><br><br>
                                     <label>Trade</label>
                                    <input type="number" name="trade" class="form-control" placeholder="Enter Trade"><br><br>
                                    <label>Opens</label>
                                    <input type="datetime-local" name="opens" class="form-control" placeholder="Enter Opens"><br><br>
                                     <label>Closes</label>
                                    <input type="datetime-local" name="closes" class="form-control" placeholder="Enter Closes"><br><br>
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="status" disabled selected>Status</option>
                                        <option value="up">up</option>
                                        <option value="down">down</option>
                                    </select><br><br>
                                     <label>Payout</label>
                                    <input type="number" name="payout" class="form-control" placeholder="Payout">
                                    
                                    
                                    <button type="submit" class="btn btn-primary mt-3" name="submit" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Submit
                                    </button>
                                   
                              </div>
                            </form>
                            
                            </div>
                            
                            
                             <?php
                                //random id values
                                $trans_id = strtotime('now');
                            
                                if(isset($_POST['submit'])){
                                    $asset = mysqli_real_escape_string($conn, $_POST['asset']);
                                    $trade = mysqli_real_escape_string($conn, $_POST['trade']);
                                    $opens = mysqli_real_escape_string($conn, $_POST['opens']);
                                    $closes = mysqli_real_escape_string($conn, $_POST['closes']);
                                    $status = mysqli_real_escape_string($conn, $_POST['status']);
                                    $payout = mysqli_real_escape_string($conn, $_POST['payout']);
                                  
                                    $q1="insert into trading_history (trade_id, asset, trade, opens, closes, status, payout ) values('$client', '$asset', '$trade','$opens','$closes','$status', '$payout')";
                                    mysqli_query($conn, $q1);
                                    
                                    echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Deposit successfully added! </strong>
                                 </div>
                        </center>";
                                    header("Location: member_profile.php?client=".$client);
                                }
                      
                            
                            ?>
                            
                          </div>
                          <div class="col-md-6">
                                     <div class="">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr><div style="background-color: #dc3545; text-transform: uppercase; color: #fff;">Wallet History</div></tr>
                     </thead>
                      <thead>
                        <tr>
                            <th>ASSET</th>
                            <th>TRADE</th>
                            <th>OPENS</th>
                            <th>CLOSES</th>
                            <th>STATUS</th>
                            <th>PAYOUT</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        <?php
                            while($row3 = mysqli_fetch_array($result3)){
                        ?>
                        <tr>
                            <td><?php echo $row3['asset'];  ?></td>
                            <td><?php echo $row3['trade'];  ?></td>
                            <td><?php echo $row3['opens'];  ?></td>
                            <td><?php echo $row3['closes'];  ?></td>
                            <td><?php if($row3['status']=="up"){
                                            echo "<span class='fa fa-caret-up' style ='font-size: 30px; color: green;'></span>";
                                        }
                                        else{
                                            echo "<span class= 'fa fa-caret-down' style ='font-size: 30px; color: red; ' ></span>";
                                        }
                            ?></td>
                            <td><?php echo $row3['payout'];  ?></td>
                        
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                  
                              </div> 
                    </div>
                </center>
    </body>
</html>
