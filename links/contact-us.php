<?php
    session_start();
    
    include_once '../includes/dbh.inc.php';
    include_once '../includes/send_mail_script.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no, user-scalable=0"/> <!--320-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- link to stylesheet -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css">

    <title> Contact us | Bitxpros Trading </title>

    <!-- favicon -->
    <link href="../images/logo-whiterss.png" rel="icon" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

     <!-- linking jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <script src="../scrollmagic/ScrollMagic.min.js"></script>
   <script src="../scrollmagic/plugins/debug.addIndicators.min.js"></script>
   <script src="../scrollmagic/plugins/animation.gsap.min.js"></script>
   <script src="../scrollmagic/plugins/animation.velocity.min.js"></script>

 <!-- including script for sweet.js -->
      <script src="../js/sweetalert.min.js"></script>
    <!-- linkig for fontawesome styling -->
    <link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    <!-- linking for slick. -->
    <link rel="stylesheet" type="text/css" href="../slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>

    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>

    <!-- scripy for cycle -->
    <script src="../js/jquery.cycle.all.js"></script>
    <script src="../scrollmagic/scroll.js"></script>


</head>

  <body>
   <section class="main-wrapper">
     
    <!-- ----------------------First section with the animination main-bg--------------------------- -->
    <section>
        <div class="row">
                    <div class="col-12">
                          <div class="row">
                    <div class="col-12">
                        <link rel="stylesheet" type="text/css" media="screen" href="https://www.ifcmarkets.com/css/widget/live_quotes_ifc_widget_scroll.css" /><link rel="stylesheet" type="text/css" media="screen" href="https://www.ifcmarkets.com/css/front/quotesline.css" /><script type="text/javascript">var lang_lqs='en';var hname_lqs="www.ifcmarkets.com";var vi=document.createElement('script');vi.type='text/javascript';vi.async = true;vi.src = 'https://www.ifcmarkets.com/js/live_quotes_ifc_widget_scroll.js';var instrument_list="EURUSD,GBPUSD,USDJPY,AUDUSD,USDCHF,USDCAD,XAUUSD,XAGUSD";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(vi, s);</script><div id="ifc_widgetlivequotes_scrl" class="ifc_widgetlivequotes_scrl"><div class="live_quotations" id="scroller_container"><div id="scroller"></div></div></div><div  id="ifc_nedlivequotes_scrl" class="ifc_nedlivequotes_scrl" style=""><a href="https://www.ifcmarkets.com/en/informers" target="_blank" rel="nofollow"><img src="https://www.ifcmarkets.com/uploads/informers/lq_provided_by.png"/></a></div>
                    </div>
                </div>
                    </div>
                </div>
 <section class = 'container-fluid col-nav-area'>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.php"> <img src="../images/logo-whiterss.png" class="brand"></a>
          

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <img src="../images/hamburger.png">
            
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 30px;">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="about-us.php">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="pricing.php">Account Type</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="faq.php">F.A.Q</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
              </li>

                

            </ul>
          </div>
           
          <a href="sign-in.php"><button type="button" class="btn btn-danger sign-in" data-toggle="tooltip" data-placement="bottom" title="Sign in"> <i class="fas fa-user-tie user"></i> Sign in</button></a>

          <a href="sign-up.php"><button type="button" class="btn btn-link sign-up" data-toggle="tooltip" data-placement="bottom" title="Sign Up"> <i class="fas fa-user-plus user"></i>  Sign up</button></a> 

          <button type="button" class="btn btn-link sign-up" style="margin-left: 10px;"> <span id="google_translate_element"></span> </button>
                
           </div>  
        </nav>
      </section>

      <!-- end nav bar section -->
        <!-- ==================Main design will start here  ============================== -->
        <!-- first section  -->
        <section class="container- bg-contact-us">
        	<div class="row">
	        	<div class="col-6 abt-us-txt">
	        		<h2> Contact Us</h2>
	        	</div>

	        	<div class="col-6">
	        		<img class="flying-man" src="../images/contact-us.png">
	        	</div>
	        </div>

	        <!-- the body section that contain the text =============== -->
        	
        </section>
         <div class="container abt-p-txt">
         	<div class="row">
         		<div class="col-md-8">
                            <form method="post">

         				<div>
         					<select class="form-control" name="contact_question">
							  <option>Trading Question</option>
							  <option>Finance Question</option>
							  <option>Technical Question</option>
							</select>
         				</div>
         				<br />
         				<div class="row">
         					 <div class="form-group col-6">
                                                        <input type="text" class="form-control" placeholder="Full Name" name="contact_name" required>
                                                 </div>
                                                <div class="form-group col-6">
                                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="  Email" name="contact_email" required>
                                                </div>
                                                <div class="form-group col-6">
                                                  <input type="text" class="form-control" placeholder="phone number with country code" name="contact_phone">
                                                </div>
                                                </div>	
					 

					  <div class="form-group">
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" name="contact_message"></textarea>
					  </div>
					 
					  <button type="submit" class="btn btn-primary" name="submit_mail">Submit</button>
					</form>
                              <?php
                           

                                   if(isset($_POST['submit_mail'])) {
                                     $contact_question = mysqli_real_escape_string($conn, $_POST['contact_question']);
                                     $contact_name = mysqli_real_escape_string($conn, $_POST['contact_name']);
                                     $contact_email = mysqli_real_escape_string($conn, $_POST['contact_email']);
                                     $contact_phone = mysqli_real_escape_string($conn, $_POST['contact_phone']);
                                     $contact_message = mysqli_real_escape_string($conn, $_POST['contact_message']);
                                     $date_send = date("Y/m/d");

                                   echo  $sql = "INSERT INTO contact_us(contact_question, contact_name, contact_email, contact_phone, contact_message, date_send)
                                     VALUES('$contact_question', '$contact_name', '$contact_email', '$contact_phone', '$contact_message', '$date_send')";

                                     mysqli_query($conn, $sql);

                                     echo '<script>Mail Sent successfully! </script>';
                                 }

                               //delete record
                               if (isset($_GET['delContact'])) {
                                   $id = $_GET['delContact'];
                                   mysqli_query($conn, "DELETE FROM contact_us WHERE id=$id");
                                   header("Location: ../admin/contact_mail.php");
                               }


                                //retrieve client details from data base
                                $sqlRetrieve = 'SELECT * FROM contact_us';
                                $result = mysqli_query($conn, $sqlRetrieve);
                                $resultChecker = mysqli_num_rows($result);
                            ?>
         			
         		</div>
         		<!-- end col -->
         		<div class="col-md-4">
         			<div class="col col-contact-side">
         				<i class="fas fa-home col-contact-side-i"></i>
         				 <b> ADDRESS: </b>
         				 <p> New York, USA </p>
         			</div>

         			<!-- ===== -->

         			<div class="col col-contact-side">
         				<i class="fas fa-envelope col-contact-side-i"></i>
         				 <b> EMAIL ADDRESS: </b>
         				 <p style="color: #dc3545;">contactus@Bitxpros.com </p>
         			</div>
         			
         		</div>
         		
         	</div>
	        	
	        </div>
        	
        <!-- ==================Main design will end here  ============================== -->
        <div style="padding: 30px;  "></div>
   
        <section class="container-fluid footer">
          <div class="container">
            <div style="padding: 30px;"></div>
            <div class="row">
              <div class="col-sm-3 quick-link">
                <ul>
                  <li style="font-family: trajan"> <b>QUICK LINKS</b></li>
                  <li> <a href="../index.php">Home </a></li>
                  <li> <a href="about-us.php">About Us </a></li>
                  <li> <a href="faq.php">FAQS </a></li>
                  <li> <a href="TAC.php">TERMS AND CONDITIONS </a></li>
                  <li> <a href="contact-us.php">CONTACT US </a></li>
                </ul>
              </div>

              <!-- =================================================== -->
              <div class="col-sm-3">
                <ul>
                  <li style="font-family: trajan"> <b>HELP AND  SUPPORTS </b></li>
                  <li> <a href="https://cointelegraph.com/bitcoin-for-beginners/what-are-cryptocurrencies">WHAT IS BITCOIN? </a></li>
                  <li> <a href="https://www.investopedia.com/tech/how-to-buy-bitcoin/">HOW TO BUY BITCOIN </a></li>
                  <li> <a href="sign-up.php">REGISTER </a></li>
                  <li> <a href="login-in.php">LOGIN  </a></li>
                  <li> <a href="#">FORGOT PASSWORD </a></li>
                  
                </ul>
              </div>

              <!-- =============================================== -->

              <div class="col-sm-3">
                <ul>
                  <li style="font-family: trajan"> <b>CONTACT US </b></li>
                  <li style="color: #c4c4c4"> 4754 Bel Meadow Drive,  San Bernardino California, USA</li>
                  <li> <i class="fas fa-phone-square-alt"></i> +1 (909) 453-2200 </li>
                  <!--<li> <i class="fas fa-phone-square-alt"></i> +1 (909) 453-2200 </li>-->
                  <li>contactus@Bitxpros.com</li>
                  
                 
                </ul>
              </div>

              <!-- =================================================== -->
              <div class="col-sm-3">
                <img src="../images/logo-whiterss.png">
              </div>
              
            </div>

            <div style="padding: 30px;"></div>

            <p style="font-family: raleway">Trading in CFDs, Forex and Options may not be appropriate for all investors as it carries a high level of risk and can result in the loss of all of your Investment. You should not invest money that you cannot afford to lose. Before deciding to trade, you should become aware of all the risks associated with CFDs, Forex and Options trading, and seek advice from an independent and suitably licensed financial advisor Bitxpros.com is not responsible for any direct, indirect or consequential losses, or any other damages resulting from the user's actions on this site <a href="https://bitxpros.com/">bitxpros.com</a> is powered by Crytocoins Trading ICT Team. 
              <center style="font-family: raleway">Copyright &copy; 2020 Bitxpros.com  All rights reserved <br />
                <img src="../images/ssl.png">
              </center>

            </p>
            
           

              <script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
              }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
          </div>
         
          
        </section>

     
  
      <!--=========================================================== script================================================================================== -->

      <!-- This code is for the live price -->
      <script>
           
      // scroll up for live bitcoin prices
           $('.live').cycle({
              fx: 'scrollUp',
              random:  1,
              delay:  9000,
              cleartypeNoBg: true,
              center: true,
              height: "fit"

            });
           // end of live price bitcoin counter
           $('.main-bg-txt').cycle({
              delay:  5000,
              cleartypeNoBg: true,
              center: true,
              height: "fit"
           });
      </script>


     
    
    <!-- Our project just needs Font Awesome Solid + Brands  js for fontawesome-->
    <script defer src="../fontawesome/js/brands.js"></script>
    <script defer src="../fontawesome/js/solid.js"></script>
    <script defer src="../fontawesome/js/fontawesome.js"></script>
    <script defer src="../fontawesome/js/all.js"></script> <!--load all styles -->

    <!-- scripts for particles -->
    <script src="../particles/js/particles.js"></script>
    <script src="../particles/js/app.js"></script>

    <!-- linking my custom jquery -->
    <script type="text/javascript" src="../js/custom.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-ui.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  </body>
</html>