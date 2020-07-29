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
		
		<title> Update Profile | Bitxpros Dashboard</title>

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
                                
                            <li> <i class="fas fa-user dash-icon"></i> <a href="profile.php">Profile</a></li>
				<li>  <i class="fas fa-money-check-alt dash-icon"></i><a href="deposit.php">Deposit Funds</a></li>
				<li> <i class="fas fa-user dash-icon"></i> <a href="verification.php">Upload </a></li>
                                
				
				
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

                                                    <h3><a href="index.php" class="btn btn-danger mb-3" style="font-family: ralewa;"> <i class="fas fa-tachometer-alt dash-icon" ></i> DashBoard</a></h3>

							

						</div>

						<!-- end  -->

						<div class="col-small-top-icon">

							<div class="dash-min-sme">

								<b> <i class="fa fa-cog fa-spin fa-1x fa-fw"></i> <a href="index.php" style="color:#fff;">Account Setting</a>  </b>

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
                                                        <h3>Update Password</h3>
                                                        <form method="POST" action="" onsubmit="return change_psw()">
                                                            <div class="form-group">
                                                              <label for="pwd">Password:</label>
                                                              <input type="password" name="new_psw" class="form-control" id="new_psw" placeholder="new pasword">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="pwd">Re-type Password:</label>
                                                              <input type="password" name="re_psw" class="form-control" id="renew_psw" placeholder="retype new pasword">
                                                            </div>
                                                            <div id="msg" style="color: red;" class="mb-3"></div>
                                                            <script>
                                                               var msg = document.getElementById('msg');
                                                                        var new_psw = document.getElementById('new_psw');
                                                                        var renew_psw = document.getElementById('renew_psw');

                                                                        function change_psw() {
                                                                         if(new_psw.value !== renew_psw.value) {
                                                                             msg.innerHTML = "<div> password mis-matched </div>";
                                                                             return false;
                                                                         }
                                                                 }
                                                            </script>
                                                            <button type="submit" class="btn btn-danger" name="update_psw">Update Setting</button>
                                                          </form>
                                                    </div>
                                                </div>
                                        </div>
						<?php
                                                    if(isset($_POST['update_psw'])) {
                                                       $new_psw = mysqli_real_escape_string($conn, $_POST['new_psw']);
                                                       $re_psw = mysqli_real_escape_string($conn, $_POST['re_psw']);

                                                        $update_psw = "UPDATE reg_users SET psw= '$new_psw',re_psw='$re_psw' where id='".$_SESSION['id']."'";
                                                        $query_update = mysqli_query($conn, $update_psw);
                                                        if($query_update) {
                                                             echo "<center>
                                                                    <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                                                            <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                                            <strong> Password changes successfully! </strong>
                                                                     </div>
                                                            </center>";
                                                            
                                                        }  else {
                                                            echo 'an error occured';
                                                        }
                                                            
                                                        
                                                        
                                                    }
                                                 
                                       
                                                ?>
					<footer class="fixed-bottom">

						<center style="font-family: raleway">Copyright &copy; 2020 Bitxpros.com  All rights reserved</center><br />

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



