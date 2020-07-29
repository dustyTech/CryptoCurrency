<?php
    include_once '../includes/dbh.inc.php';
    session_start();
    
    if($_SESSION['username']=="") {
      header("Location: ../links/sign-in.php");
  }
  
   $sql6 = "SELECT wallet_balance FROM reg_users WHERE id='".$_SESSION['id']."'";
  $result6 = mysqli_query($conn, $sql6);
  $row6 = mysqli_fetch_array($result6);

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
		
		<title> Withdraw | Bitxpros Trading </title>

		<!-- favicon -->
                <link href="../images/logo-whiterss.png" rel="icon" type="image/x-icon">

    	  <!-- linking jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    	    <!-- linkig for fontawesome styling -->
    	<link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->


	    <!-- including script for sweet.js -->
	    <script src="../js/sweetalert.min.js"></script>
	    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

	    

	</head><style>
  .progress{
    height: 30px;
  }
#myProgress {
  width: 100%;
  background-color: #ddd;
  padding: 20px;
}

#myBar {
  width: 0;
  height: 100px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
}
#success,#failed,#errorbal{
	display: none;
}
.non{
	cursor: not-allowed;
}
</style>

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
	

</div> 				<!-- end side nav bar  -->

				<!-- the main section area  -->

				<div class="dash-main">

					<div class="dash-main-2">
						<div class="col-img"> <img src=" ../images/hamburger-blk.png"></div>
						<div class=" dash-main-top">
							<h3>Withdrawal Request </h3>
							
						</div>
						<!-- end  -->
						<div class="col-small-top-icon">
							<div class="dash-min-sme">
								<b><i class="fas fa-power-off dash-icon"></i> <a href="../includes/logout.inc.php" style="color: #fff;">Logout</a></b>
							</div>

							<div class="dash-min-sme">
								<b> <i class="fas fa-home dash-icon"></i> <a href="../index.php" style="color:#fff;position: relative;z-index: 10;"> GO TO HOME</a> </b>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- creating of the min container -->
					<div class="container" style="padding:10px;" >
						<!-- starting of the main code -->
						<div class="col-12 align-middle">
							<h4> Wallet</h4>
							<p> The request for withdrawals can be made daily from Monday to Friday and should be submitted between the hours of 6.00 PM and 9.00 PM as per the server time and it will be released between the time period of 24- 48 hours.
							</p>
							<br />
							<h5>Available Balance </h5>
							<h2> <span><i class="fas fa-dollar-sign"></i></span> <?php echo $row6['wallet_balance'] ?></h2>

							<div class="col-lg-6 col-md-12" style="margin: 2px auto">

                                                            
    <form method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="withdraw_amt">Withdraw Amount *</label>
              <input type="text" class="form-control" id="withdraw_amt" required name="withdraw_amt">
          </div>
           <div class="form-group">
              <label for="withdraw_method">Withdrawal Method *</label>
              <select class="form-control" id="withdraw_method" name="withdraw_method" onchange="show()">
                  <option selected disabled>Select Method</option>
                  <option value="bitcoin">Bitcoin</option>
                  <option value="bank_withdraw">Bank Withdrawal</option>
              </select>
           </div>    
          <div class="form-group mt-4" style="display: none;" id="show_btc">
              <label for="btc_address">Wallet Address *</label>
              <input type="text" class="form-control" id="btc_address" required name="btc_address">
                                                                         
          </div>
          <div id="show_banktransfer" style="display: none;">
                  <label for="country">Country: </label>
                  <select name="country" size="1" class="form-control" required id="country" style="font-family: Montserrat, sans-serif; height: 3.25rem; border-radius: 0px;">
                    <option value="" disabled selected>--Select an option--</option>
                    <option style="font-family: Montserrat, sans-serif;">Afghanistan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Albania</option> 
                    <option style="font-family: Montserrat, sans-serif;">Algeria</option> 
                    <option style="font-family: Montserrat, sans-serif;">American Samoa</option> 
                    <option style="font-family: Montserrat, sans-serif;">Andorra</option> 
                    <option style="font-family: Montserrat, sans-serif;">Angola</option> 
                    <option style="font-family: Montserrat, sans-serif;">Anguilla</option> 
                    <option style="font-family: Montserrat, sans-serif;">Antarctica</option> 
                    <option style="font-family: Montserrat, sans-serif;">Antigua and Barbuda</option> 
                    <option style="font-family: Montserrat, sans-serif;">Argentina</option> 
                    <option style="font-family: Montserrat, sans-serif;">Armenia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Aruba</option> 
                    <option style="font-family: Montserrat, sans-serif;">Australia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Austria</option> 
                    <option style="font-family: Montserrat, sans-serif;">Azerbaijan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bahamas</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bahrain</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bangladesh</option> 
                    <option style="font-family: Montserrat, sans-serif;">Barbados</option> 
                    <option style="font-family: Montserrat, sans-serif;">Belarus</option> 
                    <option style="font-family: Montserrat, sans-serif;">Belgium</option> 
                    <option style="font-family: Montserrat, sans-serif;">Belize</option> 
                    <option style="font-family: Montserrat, sans-serif;">Benin</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bermuda</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bhutan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bolivia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bosnia and Herzegowina</option> 
                    <option style="font-family: Montserrat, sans-serif;">Botswana</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bouvet Island</option> 
                    <option style="font-family: Montserrat, sans-serif;">Brazil</option> 
                    <option style="font-family: Montserrat, sans-serif;">British Indian Ocean Territory</option> 
                    <option style="font-family: Montserrat, sans-serif;">Brunei Darussalam</option> 
                    <option style="font-family: Montserrat, sans-serif;">Bulgaria</option> 
                    <option style="font-family: Montserrat, sans-serif;">Burkina Faso</option> 
                    <option style="font-family: Montserrat, sans-serif;">Burundi</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cambodia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cameroon</option> 
                    <option style="font-family: Montserrat, sans-serif;">Canada</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cape Verde</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cayman Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Central African Republic</option> 
                    <option style="font-family: Montserrat, sans-serif;">Chad</option> 
                    <option style="font-family: Montserrat, sans-serif;">Chile</option> 
                    <option style="font-family: Montserrat, sans-serif;">China</option> 
                    <option style="font-family: Montserrat, sans-serif;">Christmas Island</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cocos (Keeling) Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Colombia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Comoros</option> 
                    <option style="font-family: Montserrat, sans-serif;">Congo</option> 
                    <option style="font-family: Montserrat, sans-serif;">Congo, the Democratic Republic of the</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cook Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Costa Rica</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cote d'Ivoire</option> 
                    <option style="font-family: Montserrat, sans-serif;">Croatia (Hrvatska)</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cuba</option> 
                    <option style="font-family: Montserrat, sans-serif;">Cyprus</option> 
                    <option style="font-family: Montserrat, sans-serif;">Czech Republic</option> 
                    <option style="font-family: Montserrat, sans-serif;">Denmark</option> 
                    <option style="font-family: Montserrat, sans-serif;">Djibouti</option> 
                    <option style="font-family: Montserrat, sans-serif;">Dominica</option> 
                    <option style="font-family: Montserrat, sans-serif;">Dominican Republic</option> 
                    <option style="font-family: Montserrat, sans-serif;">East Timor</option> 
                    <option style="font-family: Montserrat, sans-serif;">Ecuador</option> 
                    <option style="font-family: Montserrat, sans-serif;">Egypt</option> 
                    <option style="font-family: Montserrat, sans-serif;">El Salvador</option> 
                    <option style="font-family: Montserrat, sans-serif;">Equatorial Guinea</option> 
                    <option style="font-family: Montserrat, sans-serif;">Eritrea</option> 
                    <option style="font-family: Montserrat, sans-serif;">Estonia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Ethiopia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Falkland Islands (Malvinas)</option> 
                    <option style="font-family: Montserrat, sans-serif;">Faroe Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Fiji</option> 
                    <option style="font-family: Montserrat, sans-serif;">Finland</option> 
                    <option style="font-family: Montserrat, sans-serif;">France</option> 
                    <option style="font-family: Montserrat, sans-serif;">France, Metropolitan</option> 
                    <option style="font-family: Montserrat, sans-serif;">French Guiana</option> 
                    <option style="font-family: Montserrat, sans-serif;">French Polynesia</option> 
                    <option style="font-family: Montserrat, sans-serif;">French Southern Territories</option> 
                    <option style="font-family: Montserrat, sans-serif;">Gabon</option> 
                    <option style="font-family: Montserrat, sans-serif;">Gambia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Georgia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Germany</option> 
                    <option style="font-family: Montserrat, sans-serif;">Ghana</option> 
                    <option style="font-family: Montserrat, sans-serif;">Gibraltar</option> 
                    <option style="font-family: Montserrat, sans-serif;">Greece</option> 
                    <option style="font-family: Montserrat, sans-serif;">Greenland</option> 
                    <option style="font-family: Montserrat, sans-serif;">Grenada</option> 
                    <option style="font-family: Montserrat, sans-serif;">Guadeloupe</option> 
                    <option style="font-family: Montserrat, sans-serif;">Guam</option> 
                    <option style="font-family: Montserrat, sans-serif;">Guatemala</option> 
                    <option style="font-family: Montserrat, sans-serif;">Guinea</option> 
                    <option style="font-family: Montserrat, sans-serif;">Guinea-Bissau</option> 
                    <option style="font-family: Montserrat, sans-serif;">Guyana</option> 
                    <option style="font-family: Montserrat, sans-serif;">Haiti</option> 
                    <option style="font-family: Montserrat, sans-serif;">Heard and Mc Donald Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Holy See (Vatican City State)</option> 
                    <option style="font-family: Montserrat, sans-serif;">Honduras</option> 
                    <option style="font-family: Montserrat, sans-serif;">Hong Kong</option> 
                    <option style="font-family: Montserrat, sans-serif;">Hungary</option> 
                    <option style="font-family: Montserrat, sans-serif;">Iceland</option> 
                    <option style="font-family: Montserrat, sans-serif;">India</option> 
                    <option style="font-family: Montserrat, sans-serif;">Indonesia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Iran (Islamic Republic of)</option> 
                    <option style="font-family: Montserrat, sans-serif;">Iraq</option> 
                    <option style="font-family: Montserrat, sans-serif;">Ireland</option> 
                    <option style="font-family: Montserrat, sans-serif;">Israel</option> 
                    <option style="font-family: Montserrat, sans-serif;">Italy</option> 
                    <option style="font-family: Montserrat, sans-serif;">Jamaica</option> 
                    <option style="font-family: Montserrat, sans-serif;">Japan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Jordan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Kazakhstan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Kenya</option> 
                    <option style="font-family: Montserrat, sans-serif;">Kiribati</option> 
                    <option style="font-family: Montserrat, sans-serif;">Korea, Democratic People's Republic of</option> 
                    <option style="font-family: Montserrat, sans-serif;">Korea, Republic of</option> 
                    <option style="font-family: Montserrat, sans-serif;">Kuwait</option> 
                    <option style="font-family: Montserrat, sans-serif;">Kyrgyzstan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Lao People's Democratic Republic</option> 
                    <option style="font-family: Montserrat, sans-serif;">Latvia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Lebanon</option> 
                    <option style="font-family: Montserrat, sans-serif;">Lesotho</option> 
                    <option style="font-family: Montserrat, sans-serif;">Liberia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Libyan Arab Jamahiriya</option> 
                    <option style="font-family: Montserrat, sans-serif;">Liechtenstein</option> 
                    <option style="font-family: Montserrat, sans-serif;">Lithuania</option> 
                    <option style="font-family: Montserrat, sans-serif;">Luxembourg</option> 
                    <option style="font-family: Montserrat, sans-serif;">Macau</option> 
                    <option style="font-family: Montserrat, sans-serif;">Macedonia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Madagascar</option> 
                    <option style="font-family: Montserrat, sans-serif;">Malawi</option> 
                    <option style="font-family: Montserrat, sans-serif;">Malaysia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Maldives</option> 
                    <option style="font-family: Montserrat, sans-serif;">Mali</option> 
                    <option style="font-family: Montserrat, sans-serif;">Malta</option> 
                    <option style="font-family: Montserrat, sans-serif;">Marshall Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Martinique</option> 
                    <option style="font-family: Montserrat, sans-serif;">Mauritania</option> 
                    <option style="font-family: Montserrat, sans-serif;">Mauritius</option> 
                    <option style="font-family: Montserrat, sans-serif;">Mayotte</option> 

                    <option style="font-family: Montserrat, sans-serif;">Micronesia, Federated States of</option> 
                    <option style="font-family: Montserrat, sans-serif;">Moldova, Republic of</option> 
                    <option style="font-family: Montserrat, sans-serif;">Mexico</option><option style="font-family: Montserrat, sans-serif;">Monaco</option> 
                    <option style="font-family: Montserrat, sans-serif;">Mongolia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Montserrat</option> 
                    <option style="font-family: Montserrat, sans-serif;">Morocco</option> 
                    <option style="font-family: Montserrat, sans-serif;">Mozambique</option> 
                    <option style="font-family: Montserrat, sans-serif;">Myanmar</option> 
                    <option style="font-family: Montserrat, sans-serif;">Namibia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Nauru</option> 
                    <option style="font-family: Montserrat, sans-serif;">Nepal</option> 
                    <option style="font-family: Montserrat, sans-serif;">Netherlands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Netherlands Antilles</option> 
                    <option style="font-family: Montserrat, sans-serif;">New Caledonia</option> 
                    <option style="font-family: Montserrat, sans-serif;">New Zealand</option> 
                    <option style="font-family: Montserrat, sans-serif;">Nicaragua</option> 
                    <option style="font-family: Montserrat, sans-serif;">Niger</option> 
                    <option style="font-family: Montserrat, sans-serif;">Nigeria</option> 
                    <option style="font-family: Montserrat, sans-serif;">Niue</option> 
                    <option style="font-family: Montserrat, sans-serif;">Norfolk Island</option> 
                    <option style="font-family: Montserrat, sans-serif;">Northern Mariana Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Norway</option> 
                    <option style="font-family: Montserrat, sans-serif;">Oman</option> 
                    <option style="font-family: Montserrat, sans-serif;">Pakistan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Palau</option> 
                    <option style="font-family: Montserrat, sans-serif;">Panama</option> 
                    <option style="font-family: Montserrat, sans-serif;">Papua New Guinea</option> 
                    <option style="font-family: Montserrat, sans-serif;">Paraguay</option> 
                    <option style="font-family: Montserrat, sans-serif;">Peru</option> 
                    <option style="font-family: Montserrat, sans-serif;">Philippines</option> 
                    <option style="font-family: Montserrat, sans-serif;">Pitcairn</option> 
                    <option style="font-family: Montserrat, sans-serif;">Poland</option> 
                    <option style="font-family: Montserrat, sans-serif;">Portugal</option> 
                    <option style="font-family: Montserrat, sans-serif;">Puerto Rico</option> 
                    <option style="font-family: Montserrat, sans-serif;">Qatar</option> 
                    <option style="font-family: Montserrat, sans-serif;">Reunion</option> 
                    <option style="font-family: Montserrat, sans-serif;">Romania</option> 
                    <option style="font-family: Montserrat, sans-serif;">Russian Federation</option> 
                    <option style="font-family: Montserrat, sans-serif;">Rwanda</option> 
                    <option style="font-family: Montserrat, sans-serif;">Saint Kitts and Nevis</option> 
                    <option style="font-family: Montserrat, sans-serif;">Saint LUCIA</option> 
                    <option style="font-family: Montserrat, sans-serif;">Saint Vincent and the Grenadines</option> 
                    <option style="font-family: Montserrat, sans-serif;">Samoa</option> 
                    <option style="font-family: Montserrat, sans-serif;">San Marino</option> 
                    <option style="font-family: Montserrat, sans-serif;">Sao Tome and Principe</option> 
                    <option style="font-family: Montserrat, sans-serif;">Saudi Arabia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Senegal</option> 
                    <option style="font-family: Montserrat, sans-serif;">Seychelles</option> 
                    <option style="font-family: Montserrat, sans-serif;">Sierra Leone</option> 
                    <option style="font-family: Montserrat, sans-serif;">Singapore</option> 
                    <option style="font-family: Montserrat, sans-serif;">Slovakia (Slovak Republic)</option> 
                    <option style="font-family: Montserrat, sans-serif;">Slovenia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Solomon Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Somalia</option> 
                    <option style="font-family: Montserrat, sans-serif;">South Africa</option> 
                    <option style="font-family: Montserrat, sans-serif;">South Georgia and the South Sandwich Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Spain</option> 
                    <option style="font-family: Montserrat, sans-serif;">Sri Lanka</option> 
                    <option style="font-family: Montserrat, sans-serif;">St. Helena</option> 
                    <option style="font-family: Montserrat, sans-serif;">St. Pierre and Miquelon</option> 
                    <option style="font-family: Montserrat, sans-serif;">Sudan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Suriname</option> 
                    <option style="font-family: Montserrat, sans-serif;">Svalbard and Jan Mayen Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Swaziland</option> 
                    <option style="font-family: Montserrat, sans-serif;">Sweden</option> 
                    <option style="font-family: Montserrat, sans-serif;">Switzerland</option> 
                    <option style="font-family: Montserrat, sans-serif;">Syrian Arab Republic</option> 
                    <option style="font-family: Montserrat, sans-serif;">Taiwan, Province of China</option> 
                    <option style="font-family: Montserrat, sans-serif;">Tajikistan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Tanzania, United Republic of</option> 
                    <option style="font-family: Montserrat, sans-serif;">Thailand</option> 
                    <option style="font-family: Montserrat, sans-serif;">Togo</option> 
                    <option style="font-family: Montserrat, sans-serif;">Tokelau</option> 
                    <option style="font-family: Montserrat, sans-serif;">Tonga</option> 
                    <option style="font-family: Montserrat, sans-serif;">Trinidad and Tobago</option> 
                    <option style="font-family: Montserrat, sans-serif;">Tunisia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Turkey</option> 
                    <option style="font-family: Montserrat, sans-serif;">Turkmenistan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Turks and Caicos Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Tuvalu</option> 
                    <option style="font-family: Montserrat, sans-serif;">Uganda</option> 
                    <option style="font-family: Montserrat, sans-serif;">Ukraine</option> 
                    <option style="font-family: Montserrat, sans-serif;">United Arab Emirates</option> 
                    <option style="font-family: Montserrat, sans-serif;">United Kingdom</option> 
                    <option style="font-family: Montserrat, sans-serif;">United States</option> 
                    <option style="font-family: Montserrat, sans-serif;">United States Minor Outlying Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Uruguay</option> 
                    <option style="font-family: Montserrat, sans-serif;">Uzbekistan</option> 
                    <option style="font-family: Montserrat, sans-serif;">Vanuatu</option> 
                    <option style="font-family: Montserrat, sans-serif;">Venezuela</option> 
                    <option style="font-family: Montserrat, sans-serif;">Viet Nam</option> 
                    <option style="font-family: Montserrat, sans-serif;">Virgin Islands (British)</option> 
                    <option style="font-family: Montserrat, sans-serif;">Virgin Islands (U.S.)</option> 
                    <option style="font-family: Montserrat, sans-serif;">Wallis and Futuna Islands</option> 
                    <option style="font-family: Montserrat, sans-serif;">Western Sahara</option> 
                    <option style="font-family: Montserrat, sans-serif;">Yemen</option> 
                    <option style="font-family: Montserrat, sans-serif;">Yugoslavia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Zambia</option> 
                    <option style="font-family: Montserrat, sans-serif;">Zimbabwe</option> 
                  </select>
                   <div class="form-group">
                      <label for="swift_code">Bank Swift Code</label>
                      <input type="text" class="form-control" id="swift_code" name="swift_code" required placeholder="bank swift code">
                  </div>
                   <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name" required placeholder="full name">
                  </div>
                   <div class="form-group">
                      <label for="acc_name">Account Name</label>
                      <input type="text" class="form-control" id="acc_name" name="acc_name" required placeholder="account name">
                  </div>
                   <div class="form-group">
                      <label for="ibam_no">IBAM NUMBER</label>
                      <input type="text" class="form-control" id="ibam_no" name="ibam_no" required placeholder="ibam number">
                  </div>
                   <div class="form-group">
                      <label for="phone_no">Mobile Number</label>
                      <input type="text" class="form-control" id="phone_no" name="phone_no" required placeholder="mobile number">
                      <small class="text-muted">Enter country code with phone number</small>
                  </div>
                   <div class="form-group">
                      <label for="currency">Enter Currency Type</label>
                      <input type="text" class="form-control" id="currency" name="currency" required>
                  </div>
                   <div class="form-group">
                      <label for="currency">Account Type</label>
                      <input type="text" class="form-control" id="account_type" name="account_type" required>
                  </div>
    <!--                                                                        <center>
                      <button type="submit" class="btn btn-primary  btn-lg" id="submit2" name="bank_withdrawal">Request Withdrawal</button>
                </center>                                                                          -->
              </div> 
                <center>
                      <button type="submit" class="btn btn-primary  btn-lg" id="submit" name="request_withdrawal">Request Withdrawal</button>
                </center>                                                                      



        </form>

            
        <script>
            function show() {
                var withdraw_method = document.getElementById('withdraw_method');
                var show_btc = document.getElementById('show_btc');
                var show_banktransfer = document.getElementById('show_banktransfer');

                var withdraw_amt = document.getElementById('withdraw_amt');
                var btc_address = document.getElementById('btc_address');


                //bank withdraw
                var country = document.getElementById('country');
                var swift_code = document.getElementById('swift_code');
                var name = document.getElementById('name');
                var acc_name = document.getElementById('acc_name');
                var ibam_no = document.getElementById('ibam_no');
                var phone_no = document.getElementById('phone_no');
                var currency = document.getElementById('currency');
                var account_type = document.getElementById('account_type');
                
                if(withdraw_method.options[withdraw_method.selectedIndex].value == 'bitcoin') {
                    show_btc.style.display = 'block';
                    country.setAttribute('disabled','disabled');
                    swift_code.setAttribute('disabled','disabled');
                    name.setAttribute('disabled','disabled');
                    acc_name.setAttribute('disabled','disabled');
                    ibam_no.setAttribute('disabled','disabled');
                    phone_no.setAttribute('disabled','disabled');
                    currency.setAttribute('disabled','disabled');
                    account_type.setAttribute('disabled','disabled');
                    show_banktransfer.style.display = 'none';
                  //  withdraw_amt.removeAttribute('disabled');
                    btc_address.removeAttribute('disabled');
                }
                
               if(withdraw_method.options[withdraw_method.selectedIndex].value === 'bank_withdraw') {
                    show_btc.style.display = 'none';
                    country.removeAttribute('disabled');
                    swift_code.removeAttribute('disabled');
                    name.removeAttribute('disabled');
                    acc_name.removeAttribute('disabled');
                    ibam_no.removeAttribute('disabled');
                    phone_no.removeAttribute('disabled');
                    currency.removeAttribute('disabled');
                    account_type.removeAttribute('disabled');
                    show_banktransfer.removeAttribute('disabled');
                    show_banktransfer.style.display = 'block';
                    btc_address.setAttribute('disabled','disabled');
                }
//                
 //               if(withdraw_method.options[withdraw_method.selectedIndex].value === 'bank_withdraw') {
//                    show_banktransfer.style.display = 'block';
//                  
//                }
//                
//                else {
//                    show_banktransfer.style.display = 'none';
//                }
            }
        </script>
                    <?php
                    if(isset($_POST['request_withdrawal'])) {
                  $name = $_SESSION['first_name'] .' '. $_SESSION['last_name'];
                    $email = $_SESSION['email'];
                        $withdraw_method = mysqli_real_escape_string($conn, $_POST['withdraw_method']);
                        
                        if($withdraw_method == "bitcoin") {
                       $withdraw_amt_btc = mysqli_real_escape_string($conn, $_POST['withdraw_amt']);
                                $btc_address = mysqli_real_escape_string($conn, $_POST['btc_address']);
                                
                           if($withdraw_amt_btc > $row6['wallet_balance']) {
                                                                             echo "<center>
                                                                                            <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                                                                    <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                                                                    <strong> Insufficient funds! </strong>
                                                                                             </div>
                                                                                    </center>";
                                         }
                            else {
                                
                                $to = "contactus@bitxpros.com";
                                $subject = 'Request for redrawal via bitcoin';
                                $msg = "$name with the email address $email is requesting to make redrawal of $withdraw_amt_btc from bitcoin wallet";
                                $headers = "From: $email";
                                                                        
                            mail($to, $subject, $msg, $headers);
                                                                        
                            echo "<center>
                                                                                    <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                                                                            <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                                                            <strong> Withdrawal Request made. We will get back to you! </strong>
                                                                                     </div>
                                                                            </center>";
                            }
                               }
                        if($withdraw_method == "bank_withdraw") {
                            $withdraw_amt = mysqli_real_escape_string($conn, $_POST['withdraw_amt']);
              
                           if($withdraw_amt > $row6['wallet_balance']) {
                                                                             echo "<center>
                                                                                            <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                                                                    <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                                                                    <strong> Insufficient funds! </strong>
                                                                                             </div>
                                                                                    </center>";
                                         }
              else {
                
                        $country = mysqli_real_escape_string($conn, $_POST['country']);
                $swift_code = mysqli_real_escape_string($conn, $_POST['swift_code']);
                $name;
                $acc_name = mysqli_real_escape_string($conn, $_POST['acc_name']);
                $ibam_no = mysqli_real_escape_string($conn, $_POST['ibam_no']);
                $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
                $currency = mysqli_real_escape_string($conn, $_POST['currency']);
                $account_type = mysqli_real_escape_string($conn, $_POST['account_type']);   
              
                     
                    $to = "contactus@bitxpros.com";
                    $subject = 'Request for redrawal via bank transfer';
                    $msg = "$name with the email address $email is requesting to make redrawal of the amount  $withdraw_amt dollars, with the bank transfer details: Country $country, Swift code $swift_code, Client Name  $name, Account Name  $acc_name, IBAM Number  $ibam_no, Client phone number  $phone_no, Type of Currency wants to recieve for redrawal payment is $currency, and the account type of your client is $account_type";
                    $headers = "From: $email";
                                                            
              mail($to, $subject, $msg, $headers);
                                                            
                echo "<center>
                            <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                    <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                    <strong> Withdrawal Request made. We will get back to you! </strong>
                             </div>
                    </center>";
                        }
                        
                                    }
                    } 
//                            $withdraw_method = mysqli_real_escape_string($conn, $_POST['withdraw_method']);
//                            $withdraw_amt = mysqli_real_escape_string($conn, $_POST['withdraw_amt']);
//                              if($withdraw_method == "bitcoin") {
//                                   $withdraw_amt;
//                                   $btc_address = mysqli_real_escape_string($conn, $_POST['btc_address']);
//                                   
//                                   echo 'bitcoin things';
//                               }
                               
                                                               
                    ?>
     
           <script>
//            function show() {
//                var withdraw_method = document.getElementById('withdraw_method');
//                var show_btc = document.getElementById('show_btc');
//                var show_banktransfer = document.getElementById('show_banktransfer');
//                
//                if(withdraw_method.options[withdraw_method.selectedIndex].value === 'bitcoin') {
//                    show_btc.style.display = 'block';
//                }
//                
//                else {
//                    show_btc.style.display = 'none';
//                }
//                
//                if(withdraw_method.options[withdraw_method.selectedIndex].value === 'bank_withdraw') {
//                    show_banktransfer.style.display = 'block';
//                }
//                
//                else {
//                    show_banktransfer.style.display = 'none';
//                }
//            }
        </script>
								<br>
								<br />
								<script src="../js/move.js"></script>
								<script src="../js/move_bank.js"></script>

							</div>
							
						</div>


						<!-- ending of the main code -->
					</div>
					<hr>
					<footer>
                                            <center style="font-family: raleway">Copyright &copy; 2020 <a href="bitxpros.com">bitxpros.com</a>  All rights reserved</center><br />
					</footer>
					 <!--Start of Tawk.to Script-->
				        
				          <!--End of Tawk.to Script-->

				</div>
				<!-- end main container -->

			</div>
			<!-- end the row  -->
			
			    
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d7c951f9f6b7a4457e1a184/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
		</section>  

		<!-- custom js for the page-->
		<script src="../js/dash-custom.js">
		</script>
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-ui.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>

