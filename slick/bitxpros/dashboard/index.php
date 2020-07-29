<?php
  include_once '../includes/dbh.inc.php';
  session_start();
  ob_start();
  if($_SESSION['username']=="") {
      header("Location: ../links/sign-in.php");
  }
  
  $query="select * from client_inbox where id='".$_SESSION['id']."'";
  $result = mysqli_query($conn, $query);
  $resultChecker = mysqli_num_rows($result);
 
    $query2="select * from client_inbox where id= '".$_SESSION['id']."'";
    $result2 = mysqli_query($conn, $query2);
    $row = mysqli_fetch_array($result2);
 
    $sql3 = "SELECT * from history WHERE type='withdrawal' and id='".$_SESSION['id']."'";
    $result3 = mysqli_query($conn, $sql3);
    $total_withdraw = 0;
    while($row3 = mysqli_fetch_array($result3)) {
        $total_withdraw = $total_withdraw + $row3['amount'];
    }
    
     $sql4 = "SELECT * from history WHERE type='deposit' and id='".$_SESSION['id']."'";
    $result4 = mysqli_query($conn, $sql4);
    $total_deposit = 0;
    while($row4 = mysqli_fetch_array($result4)) {
        $total_deposit = $total_deposit + $row4['amount'];
    }
  
  $sql5="select msg from reg_users WHERE id='".$_SESSION['id']."'";
  $result5= mysqli_query($conn, $sql5);
  $row5 = mysqli_fetch_array($result5);
  
  $sql6 = "SELECT wallet_balance FROM reg_users WHERE id='".$_SESSION['id']."'";
  $result6 = mysqli_query($conn, $sql6);
  $row6 = mysqli_fetch_array($result6);
  
    $sql7 ="select upload_img from reg_users where id='".$_SESSION['id']."'";
    $result7 = mysqli_query($conn, $sql7);
    $row7 = mysqli_fetch_array($result7);

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
		
		<title>Dashboard |Bitxpros Trading </title>

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

	    
            <style>
                input {
                    padding: 5px 10px;
                    border-radius: 5px;
                }
                
                select {
                    padding: 5px;
                    border-radius: 5px;
                }
            </style>
	</head>
	<body>
                <div class="row">
                    <div class="col-12">
                        <link rel="stylesheet" type="text/css" media="screen" href="https://www.ifcmarkets.com/css/widget/live_quotes_ifc_widget_scroll.css" /><link rel="stylesheet" type="text/css" media="screen" href="https://www.ifcmarkets.com/css/front/quotesline.css" /><script type="text/javascript">var lang_lqs='en';var hname_lqs="www.ifcmarkets.com";var vi=document.createElement('script');vi.type='text/javascript';vi.async = true;vi.src = 'https://www.ifcmarkets.com/js/live_quotes_ifc_widget_scroll.js';var instrument_list="EURUSD,GBPUSD,USDJPY,AUDUSD,USDCHF,USDCAD,XAUUSD,XAGUSD";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(vi, s);</script><div id="ifc_widgetlivequotes_scrl" class="ifc_widgetlivequotes_scrl"><div class="live_quotations" id="scroller_container"><div id="scroller"></div></div></div><div  id="ifc_nedlivequotes_scrl" class="ifc_nedlivequotes_scrl" style=""><a href="https://www.ifcmarkets.com/en/informers" target="_blank" rel="nofollow"><img src="https://www.ifcmarkets.com/uploads/informers/lq_provided_by.png"/></a></div>
                    </div>
                </div>
            <div class="container-fluid pb-2" style="background-color: gainsboro; font-family: raleway !important;">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <h3 style="text-align: left; text-transform: capitalize; font-family: raleway !important;"><b class="text-primary"> <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></b></h3>
                        <p style="text-align: left;">Account created on: <b> <?php echo $_SESSION['date_of_reg']; ?></b></p>
                    </div>
                    <div class="col-md-6 mt-3">
                        <h4 style="text-align: left; text-transform: capitalize; font-family: raleway !important">Balance: <b><?php echo '<span class="text-primary">$' . $row6['wallet_balance'] . '</span>'; ?> </b></h4>
                        <p style="text-align: left;">Account Type: <b> <?php echo $_SESSION['account_type']; ?> </b></p>
                    </div>
                </div>
            </div>
           



		<!-- this is the wrapper section of the dashboard -->

		<section class="container-fluid dash-wrapper">

			<div class="row">

				<!-- ===design of the side bar  -->



				<div class="dash-side-nav"> 
	<div class="dash-logo">
		<a href="../index.php"><img src="../images/logo-whiterss.png" alt="Bitxpros Trading" > </a>
	</div>
		
	
		<!-- profile picture section -->
	<div class="profile-pics">
            <img class="rounded" style="width: 100%; height: 100%;" src="<?php echo 'upload_img/'.$row7['upload_img']?>">
	</div>
	<div class="referal-code">
		<p> <i class="far fa-check-circle"></i> Profile Photo</p>
	</div>
	<!-- end profile pics section -->
	<!-- the nav bar starts here  -->
	<div class="user-dash-side">
			<ul> 
                               
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

                                                    <h3><a href="index.php" class="btn btn-danger mb-3" style="font-family: ralewa;"> <i class="fas fa-tachometer-alt dash-icon" ></i> DashBoard</a></h3>

							

						</div>

						<!-- end  -->

						<div class="col-small-top-icon">

							<div class="dash-min-sme">

                                                            <b> <i class="fas fa-power-off dash-icon"></i> <a href="../includes/logout.inc.php" style="color:#fff;">Log out</a>  </b>

							</div>



							<div class="dash-min-sme">

								<b> <i class="fas fa-home dash-icon"></i> <a href="../index.php" style="color:#fff;position: relative;z-index: 10;"> Go the Website</a> </b>

							</div>

						</div>

						<!-- end row -->

					</div>
                                    <div class="container">
                                        <marquee>
                                            <h3 style="padding: 10px; font-size: 24px;" class="text-danger"><?php echo $row5['msg'];  ?></h3>
                                        </marquee>
                                    </div>
					<!-- creating of the min container -->

					<div class="container" >


						<!-- this is the social media section  -->

							<div class="col-social-media ">
								<div class="row">
									<div class="col-lg-6">
                                                                            <h3 style="text-align: left; font-family: raleway !important;">Current BTC Price</h3>
                                                                            <div class="bitcoin-widget">
                                                                                <script type="text/javascript">crypt_single_base_currency = "Bitcoin (BTC)";crypt_single_target_currency = "US Dollar (USD)";crypt_single_border_width = 0;</script>
                                                                                <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script>
                                                                            </div>
                                                                        </div>
									<div  class="col-lg-6">
                                                                            <h3 style="font-family: raleway !important;">BTC TO USD CONVERTER</h3>
                                                                           <script type="text/javascript">crypt_calc_border_width = 0;</script>
                                                                           <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                                                                        </div>
									<div  class="col-lg-6">
                                                                            <h3 style="font-family: raleway !important;">Top Crypto Currencies</h3>
                                                                           <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 99%;"><div style="height:413px;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;">powered by&nbsp;<a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none;font-size:11px">Coinlib</a></div></div>
                                                                        </div>
									<div  class="col-lg-6">
                                                                            <h3 style="font-family: raleway !important;">Live Coin Chart</h3>
                                                                            <div style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;"><div style="height:540px;padding:0px;margin:0px;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" height="536" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;">powered by&nbsp;<a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; font-size: 11px; text-decoration:none;">Coinlib</a></div></div>
                                                                        </div>

									

								</div>

								

								

						</div>



						<!-- section two  -->

						<div class="row" style="margin-top: 1em; ">
							<div class="col-lg-6 col-md-12">

								<div class="row">

									<div class="col-12 col-e-icon">

										<div class="row col-3v-icon">

											<div class="col-3 " >

												
												<img src="../images/wallet-02.png">

											</div>

											<div class="col-9"> 

												<div class="col-per-info">

													
													<span style=" font-size: 1.5em;"> Balance :<b> $<?php echo $row6['wallet_balance']; ?> </b></span>

												</div>

											</div>
										</div>
										<div class="row col-3v-icon">

											<div class="col-3 " >

												
												<img src="../images/wallet-02.png">

											</div>

											<div class="col-9"> 

												<div class="col-per-info">

													
													<span style=" font-size: 1.5em;"> Total Withdrawal :<b> $<?php echo $total_withdraw ?> </b></span>

												</div>

											</div>
										</div>
									</div>

									<!-- ============================ -->



								</div>

							</div>
							<div class="col-lg-6 col-md-12">

								<div class="row">

									<div class="col-12 col-e-icon">

										<div class="row col-3v-icon">

											<div class="col-3 " >

												
												<img src="../images/wallet-02.png">

											</div>

											<div class="col-9"> 

												<div class="col-per-info">

													
													<span style=" font-size: 1.5em;"> Total Deposit :<b>$<?php echo $total_deposit ?> </b></span>

												</div>

											</div>
										</div>
									</div>

									<!-- ============================ -->




								</div>

							</div>



						</div>  <!-- this is the end of the main row -->

							

							

						</div>

					<!-- <div class="col-12 main-col-sec">

					</div> -->

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



