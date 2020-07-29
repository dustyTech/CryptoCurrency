<?php
   session_start();
    ob_start();
    
    include_once '../includes/dbh.inc.php';
    
    include_once '../includes/delete_client.php';
    
 
    $sql = 'SELECT * FROM investment_mini';
    $result = mysqli_query($conn, $sql);
    $resultChecker = mysqli_num_rows($result);
    
     $sql1 = 'SELECT * FROM investment_silver';
      $result1 = mysqli_query($conn, $sql1);
    $resultChecker1 = mysqli_num_rows($result1);
    
     $sql2 = 'SELECT * FROM investment_gold';
      $result2 = mysqli_query($conn, $sql2);
    $resultChecker2 = mysqli_num_rows($result2);
    
      $sql3 = 'SELECT * FROM investment_platinum';
      $result3 = mysqli_query($conn, $sql3);
    $resultChecker3 = mysqli_num_rows($result3);
    
     $sql4 = 'SELECT * FROM investment_super';
      $result4 = mysqli_query($conn, $sql4);
    $resultChecker4 = mysqli_num_rows($result4);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin C Panel | CapitalTradingFx Trading </title>
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
                <center>
                    <h3> INVESTMENT PLANS </h3>
                </center>
            
             <center>
                 <span><b> INVESTMENT MINI PACKAGE </b></span>
                </center>
            <a href="investment_mini.php" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Mini Plan
              </a>
                <div class="table-responsive">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr>
                             <th>S/N</th>
                            <th>Mini_Names</th>
                            <th>Prices</th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACTION
                            </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker > 0) {
                                $count=1;
                                while($row = mysqli_fetch_assoc($result)) {
                                  $client_id = $row['id'];
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['plan_name1']?></td>
                            <td><?php echo $row['price1']?></td>
                            <td>  
                            <center>  
                                <a href='../includes/delete_plan.php?del=<?php echo $row['id']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a>
                                <a id="" href='<?php echo "investment_mini.php?client=".$row['id']?>' target='_self' type='button' class='btn btn-info' style='margin-right: 5px'><i class='fas fa-pen'></i></a>
                            </center>
                            </td>   
                        </tr>
                       
                 
                   <?php
                  
                        $count++;
                        }
                   }
                  ?>
                    </tbody>
                </table>
                </div>
               
            
             <center>
                 <span><b> INVESTMENT SILVER PACKAGE </b></span>
                </center>
            <a href="investment_silver.php" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Silver Plan
              </a>
                <div class="table-responsive">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr>
                             <th>S/N</th>
                            <th>Mini_Names</th>
                            <th>Prices</th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACTION
                            </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker1 > 0) {
                                $count=1;
                                while($row1 = mysqli_fetch_assoc($result1)) {
                                  $client_id = $row1['id'];
                        ?>
                        <tr>
                   
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row1['plan_name1']?></td>
                            <td><?php echo $row1['price1']?></td>
                            <td>  
                            <center>  
                                <a href='../includes/delete_plan.php?del1=<?php echo $row1['id']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a>
                                <a id="" href='<?php echo "investment_silver.php?client=".$row1['id']?>' target='_self' type='button' class='btn btn-info' style='margin-right: 5px'><i class='fas fa-pen'></i></a>
                            </center>
                            </td>   
                        </tr>
                       
                 
                   <?php
                  
                        $count++;
                        }
                   }
                  ?>
                    </tbody>
                </table>
                </div>
            
             <center>
                 <span><b> INVESTMENT GOLD PACKAGE </b></span>
                </center>
            <a href="investment_gold.php" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Gold Plan
              </a>
                <div class="table-responsive">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr>
                             <th>S/N</th>
                            <th>Mini_Names</th>
                            <th>Prices</th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACTION
                            </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker2 > 0) {
                                $count=1;
                                while($row2 = mysqli_fetch_assoc($result2)) {
                                  $client_id = $row2['id'];
                        ?>
                        <tr>
                   
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row2['plan_name1']?></td>
                            <td><?php echo $row2['price1']?></td>
                            <td>  
                            <center>  
                                <a href='../includes/delete_plan.php?del2=<?php echo $row2['id']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a>
                                <a id="" href='<?php echo "investment_gold.php?client=".$row2['id']?>' target='_self' type='button' class='btn btn-info' style='margin-right: 5px'><i class='fas fa-pen'></i></a>
                            </center>
                            </td>   
                        </tr>
                       
                 
                   <?php
                  
                        $count++;
                        }
                   }
                  ?>
                    </tbody>
                </table>
                </div>
            
              <center>
                 <span><b> INVESTMENT PLATINUM PACKAGE </b></span>
                </center>
            <a href="investment_platinum.php" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Platinum Plan
              </a>
                <div class="table-responsive">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr>
                             <th>S/N</th>
                            <th>Mini_Names</th>
                            <th>Prices</th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACTION
                            </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker3 > 0) {
                                $count=1;
                                while($row3 = mysqli_fetch_assoc($result3)) {
                                  $client_id = $row3['id'];
                        ?>
                        <tr>
                   
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row3['plan_name1']?></td>
                            <td><?php echo $row3['price1']?></td>
                            <td>  
                            <center>  
                                <a href='../includes/delete_plan.php?del3=<?php echo $row3['id']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a>
                                <a id="" href='<?php echo "investment_platinum.php?client=".$row3['id']?>' target='_self' type='button' class='btn btn-info' style='margin-right: 5px'><i class='fas fa-pen'></i></a>
                            </center>
                            </td>   
                        </tr>
                       
                 
                   <?php
                  
                        $count++;
                        }
                   }
                  ?>
                    </tbody>
                </table>
                </div>
           
               <center>
                 <span><b> INVESTMENT SUPER PACKAGE </b></span>
                </center>
            <a href="investment_super.php" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Super Plan
              </a>
                <div class="table-responsive">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr>
                             <th>S/N</th>
                            <th>Mini_Names</th>
                            <th>Prices</th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACTION
                            </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker4 > 0) {
                                $count=1;
                                while($row4 = mysqli_fetch_assoc($result4)) {
                                  $client_id = $row4['id'];
                        ?>
                        <tr>
                   
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row4['plan_name1']?></td>
                            <td><?php echo $row4['price1']?></td>
                            <td>  
                            <center>  
                                <a href='../includes/delete_plan.php?del4=<?php echo $row4['id']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a>
                                <a id="" href='<?php echo "investment_super.php?client=".$row4['id']?>' target='_self' type='button' class='btn btn-info' style='margin-right: 5px'><i class='fas fa-pen'></i></a>
                            </center>
                            </td>   
                        </tr>
                       
                 
                   <?php
                  
                        $count++;
                        }
                   }
                  ?>
                    </tbody>
                </table>
                </div>
           
            </div>
        </div>
        
       
    </body>
</html>
