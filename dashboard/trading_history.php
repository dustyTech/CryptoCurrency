<?php
    session_start();
    
    include_once '../includes/dbh.inc.php';
    if($_SESSION['username']=="") {
      header("Location: ../links/sign-in.php");
  }
        
    $sql2="select * from history where id='".$_SESSION['id']."' order by history_id desc";
    $result2 = mysqli_query($conn, $sql2);
    
    $sql3="select * from trading_history where trade_id='".$_SESSION['id']."' order by id desc";
    $result3 = mysqli_query($conn, $sql3);
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no, user-scalable=0"/> <!--320-->

	    <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
           <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
           
    	<!-- link to stylesheet -->
    	<link rel="stylesheet" type="text/css" href="../css/dash-style.css">
		
		<title> Trading History | Bitxpros Trading</title>

		<!-- favicon -->
                <link href="../images/logo-whiterss.png" rel="icon" type="image/x-icon">

    	  <!-- linking jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    	    <!-- linkig for fontawesome styling -->
    	<link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    	<!-- linking jquery -->
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

	    <!-- including script for sweet.js -->
	    <script src="../js/sweetalert.min.js"></script>
	    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

	    

	</head>	<body>

		<!-- this is the wrapper section of the dashboard -->
		<section class="container-fluid dash-wrapper">
			<div class="row">
				<!-- ===design of the side bar  -->

				<div class="dash-side-nav"> 
	<div class="dash-logo">
		<a href="../index.php"><img src="../images/logo-whiterss.png" alt="Bitxpros Official" > </a>
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
	

</div> 				<!-- end side nav bar  -->

				<!-- the main section area  -->

				<div class="dash-main">

					<div class="dash-main-2">
						<div class="col-img"> <img src=" ../images/hamburger-blk.png"></div>
						<div class=" dash-main-top">
							<h3> Trading Request Details  </h3>
							
						</div>
						<!-- end  -->
						<div class="col-small-top-icon">
							<div class="dash-min-sme">
								<b><i class="fas fa-power-off dash-icon"></i> <a href="../includes/logout.inc.php" style="color: #fff;">Logout</a></b>							</div>

							<div class="dash-min-sme">
								<b> <i class="fas fa-home dash-icon"></i> <a href="../index.php" style="color:#fff;position: relative;z-index: 10;"> GO TO HOME</a> </b>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- creating of the min container -->
					<div class="container col-upload">
						<!-- this is the part were the code will go -->
						<div class="col-lg-10 col-wallet">
							<!-- table will go here -->
							<div class="table-responsive">
							 <table class="table table-bordered table-hover">
							  <thead>
							    <tr>
							      <th scope="col">ASSET </th>
							      <th scope="col">TRADE </th>
							      <th scope="col">OPENS </th>
							      <th scope="col">CLOSES</th>
                                                              <th scope="col">STATUS</th>
                                                              <th scope="col">PAYOUT</th>
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

						<!-- the code will end here -->

							
					<!-- </div> -->
					<hr>
					<footer class="fixed-bottom">
                                            <center style="font-family: raleway">Copyright &copy; 2020 <a href="bitxpros.com">bitxpros.com</a>  All rights reserved</center><br />
					</footer>
					 <!--Start of Tawk.to Script-->
				         
				          <!--End of Tawk.to Script-->

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
	
	
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e958ddb69e9320caac35cc1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	
	
	</body>
</html>


