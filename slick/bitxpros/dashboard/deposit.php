<?php
    include_once '../includes/dbh.inc.php';
      session_start();
        ob_start();
  
    if($_SESSION['username']=="") {
      header("Location: ../links/sign-in.php");
    
  }
  
  $sql4 = "SELECT * FROM bitcoinadd";
  $result2 = mysqli_query($conn, $sql4);
  $row = mysqli_fetch_array($result2);
  
  
?>
<!DOCTYPE html>

<html>

	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no, user-scalable=0"/> <!--320-->

	    <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
         
    	<!-- link to stylesheet -->
    	<link rel="stylesheet" type="text/css" href="../css/dash-style.css">
		
		<title> Deposit | Bitxpros Trading</title>

		<!-- favicon -->
                <link href="../images/logo-whiterss.png" rel="icon" type="image/x-icon">

    	  <!-- linking jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    	    <!-- linkig for fontawesome styling -->
    	<link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

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
	

</div> 
				<!-- end side nav bar  -->



				<!-- the main section area  -->



				<div class="dash-main">



					<div class="dash-main-2">

						<div class="col-img"> <img src=" ../images/hamburger-blk.png"></div>

						<div class=" dash-main-top">

							<h3>Deposit Funds  </h3>

							

						</div>

						<!-- end  -->

						<div class="col-small-top-icon">

							<div class="dash-min-sme">

								<b><i class="fas fa-power-off dash-icon"></i> <a href="../includes/logout.inc.php" style="color: #fff;">Logout</a></b>

							</div>



							<div class="dash-min-sme">

								<b> <i class="fas fa-home dash-icon"></i> <a href="../index.php" style="color:#fff;position: relative;z-index: 10;"> GO TO WEBSITE</a> </b>

							</div>

						</div>

						<!-- end row -->

					</div>

					<!-- creating of the min container -->

					<div class="container col-deposit " >

						<div class="col-lg-12 col-deposit-2">

							<b>Select Your Payment Method:</b>

							<div class="clear-fix"></div>



							<div class="accordion" id="accordionExample">

							  <div class="card">

							    <div class="card-header" id="headingOne">

							      <h2 class="mb-0">

							        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

							          <img src="../images/bitcoin_logo.png">

							        </button>

							      </h2>

							    </div>



							    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

							      <div class="card-body ash">

							        <p> <b>Pay in the desired amount in the Bitcoin wallet below. Copy your wallet address below.</b></p>

							        <br />

							        <center>

							     

							        	<p class="text-left"> Official Bitcoin Wallet Address:</p>

							        	<!-- ================================================== -->

							           <span id="myInput"><?php echo $row['address']?></span>
                                                                       
							        	<br />

							        	<br />

											<button type="button" onclick="myFunction()" class="btn btn-primary btn-lg" id="copy-btn">Copy text</button>



											<script>

											function myFunction() {

											  var copyText = document.getElementById("myInput");

											  copyText.select();

											  document.execCommand("copy");

											  

												}

												$(document).ready(function(){

													$('#copy-btn').click(function(){

														swal({

															text: 'Bitcoin Wallet Address Copied',

															icon: 'success'

														});

													});

												});

											</script>

										

																		        	

							        </center>

							        

							      </div>

							    </div>

							  </div>

							  <!-- end one card -->

							  <div class="card">

							    <div class="card-header" id="headingTwo">

							      <h2 class="mb-0">

							        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

							          <img src="../images/credit_card.png">

							        </button>

							      </h2>

							    </div>

							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

							      <div class="card-body">



							       <p>

							       <b> 
									Contact contactus@bitxpros.com for a more detailed description.<br />

									Your account will be credited once your payment is confirmed. 

									If you encounter any issue while funding your account, <br />Please contact

									contactus@bitxpros.com for assistance.</b>	

									<br />Contact 

									<a href="mailto:contactus@bitxpros.com "> contactus@bitxpros.com</a>

							       </p>

							      </div>

							    </div>

							  </div>

							  <div class="card">

							    <div class="card-header" id="headingThree">

							      <h2 class="mb-0">

							        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

							          <img src="../images/west.png">

							        </button>

							      </h2>

							    </div>

							    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

							      <div class="card-body">

							       <p>

							       <b> 

									Contact contactus@bitxpros.com for a more detailed description.<br />

									Your account will be credited once your payment is confirmed. 

									If you encounter any issue while funding your account, <br />Please contact

									contactus@bitxpros.com for assistance.</b>	

									<br />Contact 

									<a href="mailto:contactus@bitxpros.com">contactus@bitxpros.com</a>

							       </p>

							      </div>

							    </div>

							  </div>

							  <!-- ============================= -->

							  <div class="card">

							    <div class="card-header" id="headingThree">

							      <h2 class="mb-0">

							        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">

							          <img src="../images/bank_transfer.png">

							        </button>

							      </h2>

							    </div>

							    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">

							      <div class="card-body">

							       <p>

							       <b> 

									Contact contactus@bitxpros.com for a more detailed description.<br />

									Your account will be credited once your payment is confirmed. 

									If you encounter any issue while funding your account, <br />Please contact

									contactus@bitxpros.com for assistance.</b>	

									<br />Contact 

									<a href="mailto:contactus@bitxpros.com">contactus@bitxpros.com</a>

							       </p>

							      </div>

							    </div>

							  </div>

							</div>

						</div>

						

					</div>

					<hr>

					<footer>

						<center style="font-family: raleway">Copyright &copy; 2020 bitxpros.com  All rights reserved</center><br />

					</footer>

				



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



