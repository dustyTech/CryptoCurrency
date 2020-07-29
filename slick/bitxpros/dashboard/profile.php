<?php
  include_once '../includes/dbh.inc.php';
  session_start();
  ob_start();
  
  if($_SESSION['username']=="") {
      header("Location: ../links/sign-in.php");
  }
  
  
  

?>
<!DOCTYPE html>

<html>

	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no, user-scalable=0"/> <!--320-->

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
    	<!-- link to stylesheet -->
        <link href="../css/dash-style.css" rel="stylesheet" type="text/css"/>
		
		<title> Profile | Bitxpros Trading</title>

		<!-- favicon -->
                <link href="../images/logo-whiterss.png" rel="icon" type="image/x-icon">

    	 <!-- linking jquery -->
    	<script src="../js/jquery-3.2.1.min.js"></script>

    	    <!-- linkig for fontawesome styling -->
    	<link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    	<!-- linking jquery -->
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

	    <!-- including script for sweet.js -->
	    <script src="../js/sweetalert.min.js"></script>
	    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

	    

	</head>
	<body>



		<!-- this is the wrapper section of the dashboard -->

		<section class="container-fluid dash-wrapper">

			<div class="row">

				<!-- ===design of the side bar  -->



				<div class="dash-side-nav"> 
	<div class="dash-logo">
		<a href="../index.php"><img src="../images/logo-whiterss.png" alt="StockTrade Official" > </a>
	</div>
	

	<!-- the nav bar starts here  -->
	<div class="user-dash-side">
			<ul> 
                         <li> <i class="fas fa-tachometer-alt dash-icon" ></i> <a href="index.php"> DashBoard</a></li>
				  <li> <i class="fas fa-user dash-icon"></i> <a href="profile.php"> Profile</a></li>
				<li>  <i class="fas fa-money-check-alt dash-icon"></i><a href="deposit.php">Deposit Funds</a></li>
                                <li> <i class="fa fa-upload dash-icon"></i> <a href="verification.php">Upload </a></li> 
				<li> <i class="fas fa-money-check-alt dash-icon"></i> <a href="withdrawal.php">Withdraw </a></li>
				<li>  <i class="far fa-id-card dash-icon"></i> <a href="wallet.php">Account History </a></li>
                                 <li>  <i class="far fa-id-card dash-icon"></i> <a href="trading_history.php">Trading History </a></li>
				<li> <i class="fas fa-power-off dash-icon"></i><a href="../includes/logout.inc.php"> Logout </a></li>
			</ul>
	</div>
        <script>
//            function change(){
//                var xml;
//                if(window.XMLHttpRequest){
//                    xml = new XMLHttpRequest();
//                }
//                else{
//                    xml = new ActiveObject('Microsoft.XMLHTTP');
//                }
//                
//                xml.onreadystatechange()=function(){
//                    if(xml.readyState == 4 && xml.status=200){
//                        
//                    }
//                }
//                
//                xml.open('POST','updateInbox.php',true);
//                xml.setRequestHeader('Content-type','application/x-www-urlencoded');
//                xml.send();
//            }
        </script>

</div> 
				<!-- end side nav bar  -->



				<!-- the main section area  -->



				<div class="dash-main">



					<div class="dash-main-2">

						<div class="col-img"> <img src=" ../images/hamburger-blk.png"></div>

						<div class=" dash-main-top">

                                                    <h3>Profile</h3>

							

						</div>

						<!-- end  -->

						<div class="col-small-top-icon">

							<div class="dash-min-sme">

								<b><i class="fas fa-power-off dash-icon"></i> <a href="../includes/logout.inc.php" style="color: #fff;">Logout</a></b>

							</div>

							<div class="dash-min-sme">

								<b> <i class="fas fa-home dash-icon"></i> <a href="../index.php" style="color:#fff;position: relative;z-index: 10;"> Go the Website</a> </b>

							</div>

						</div>

						<!-- end row -->

					</div>

					<!-- creating of the min container -->

					<div class="container mt-3">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h3>Acccount Setting</h3>
                                                        <form method="POST" action="">
                                                            <div class="form-group">
                                                              <label for="email">Full name:</label>
                                                              <h5 style="text-align: left !important;"><?php echo $_SESSION['first_name']." ". $_SESSION['last_name'] ?></h5>
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="email">Email address:</label>
                                                              <h5 style="text-align: left !important;"><?php echo $_SESSION['email']?></h5>
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="account_type">Account type:</label>
                                                              <h5 style="text-align: left !important;" id="account_type"><?php echo $_SESSION['account_type']?></h5>
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="date_of_reg">Account type:</label>
                                                              <h5 style="text-align: left !important;" id="account_type"><?php echo $_SESSION['date_of_reg']?></h5>
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="pwd">Password:</label>
                                                              <input type="password" name="current_psw" class="form-control" id="pwd" placeholder="current pasword" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-danger" name="update">Change Password</button>
                                                          </form>
                                                    </div>
                                                </div>
                                        </div>
						<?php
                                                    if(isset($_POST['update'])) {
                                                        $current_psw = mysqli_real_escape_string($conn, $_POST['current_psw']);
                                                     
                                                       $sel="select psw from reg_users where psw='$current_psw' and id='".$_SESSION['id']."'";
                                                        $result = mysqli_query($conn, $sel);
                                                        $resultChecker = mysqli_num_rows($result);
                                                        if($resultChecker < 1) {
                                                          
                                                            echo "<center>
                                <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Incorrect Password! </strong>
                                 </div>
                        </center>";
                                                        }  else {
                                                            header("Location: change_psw.php");
                                                        }
                                                            
                                                        
                                                        
                                                    }
                                                 
                                       
                                                ?>
					<footer class="fixed-bottom">

						<center style="font-family: raleway">Copyright &copy; 2020 bitxpros.com  All rights reserved</center><br />

					</footer>

					 <!--Start of Tawk.to Script-->

				 
				</div>

				<!-- end main container -->



			</div>

			<!-- end the row  -->

		</section>  



		<!-- custom js for the page-->

		<script src="../js/dash-custom.js">

		</script>

		<!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="../js/jquery-ui.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>

</html>



