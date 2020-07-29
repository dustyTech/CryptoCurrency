<?php include_once '../includes/dbh.inc.php';
    session_start();

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

    <title> Forget Password | Bitxpros Trading </title>

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
        <!-- ==================Main design will start here  ============================== -->
  
        <!-- first section  -->
       <section class="container-fluid sign-up-bg">
        <div class="col-lg-5 col-md-12 col-form">

            <center>
                <a href="../index.php"><img src="../images/logo-whiterss.png" style="width: 200px;"></a>
            </center>
            <!-- ==================================this is the form section of the signup section ============================ -->
            <form class="form-main-sec" method="POST">
                <h4>Reset Password </h4>
                <p> Please enter your email address. We will send you a link to change the password.</p>
              <!-- ================end ====================== -->
              <div class="form-group " >
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email" name="email" id="mail"required="required" >
              </div>
              <!-- ================end ====================== -->


       
             <center>
                 <button type="submit" class="btn btn-primary btn-submit" name="submit" id='submit'>Submit</button>
             </center>
             <br />
             <center>
                  <a href="sign-in.php" style="color: #dc3545 "> Forget Password? </a>
             </center>
             <center>
                  <a href="sign-up.php" style="color: #dc3545 "> Register </a>
             </center>
              
            </form>
              <?php
    if(isset($_POST['submit'])) {
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
       
        $sql = "SELECT * FROM reg_users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultChecker = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
         //get email from database
        if($resultChecker < 1) {
             echo "<center>
                                <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> No Email found! </strong>
                                 </div>
                        </center>";
           
        }

              
              //log in user
              else {
            $psw_token = "qwertyuiopasdfghjklzxcvbnQWERTYUIZCVBAS34567";
           $psw_token = str_shuffle($psw_token);
            $new_password = substr($psw_token, 0, 7);
        
        $name = "Dear User";
        $from = "contactus@bitxpros.com";
        $subject = "Received mail from $from";
        $message = "This is your reset password ".$new_password. "Changed this default password to a stronger password from your profile when you login to your account";

        $to = "$email";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <$from>' . "\r\n";
        

        
        echo $update_psw = "UPDATE reg_users SET psw='$new_password' WHERE email='$email'";
        
        mysqli_query($update_psw);
        
                             if(mail($to, $subject, $message, $headers)) {
                                echo "<center>
                                        <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                                <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                <strong> Check your email to get your reset password! </strong>
                                         </div>
                                </center>";
                         }
              } 
        }
    


            ?>

            <div class="form-action">
                          </div>
            
            
        </div>
        <!-- end col -->
           
       </section>
       <!-- end main section  -->
       <!-- two column section for the signup page in the address -->
        <div style=" padding: 20px; "></div>
       <section class="container">
        <div class="row">
            <div class="col-sm-3">
                <center>
                    <i class="fas fa-headphones-alt" style="font-size: 6em; color: #dc3545;"></i>
                </center>
                
                <p style="font-size: 1.1em"> 24/7 Customer Support </p>
            </div>
            <!-- end -->

            <div class="col-sm-3">
                <center>
                    <i class="fas fa-envelope" style="font-size: 6em; color: #dc3545;"></i>
                </center>
                
                <p style="font-size: 1.1em;"> <a href="mailto: contactus@bitxpros.com " style="color: inherit;">  contactus@bitxpros.com </a> </p>
            </div>
            <!-- end -->

            <div class="col-sm-3">
                <center>
                    <i class="fas fa-comments" style="font-size: 6em; color: #dc3545;"></i>
                </center>
                
                <p style="font-size: 1.1em"> Friendly Support Ticket </p>
            </div>
            <!-- end -->

            <div class="col-sm-3">
                <center>
                    <i class="fas fa-phone-alt" style="font-size: 6em; color: #dc3545;"></i>
                </center>
                
                <p style="font-size: 1.1em"> <a href="tel: +1 (909) 453-2200" style="color: inherit;"> +1 (909) 453-2200</a></p>
            </div>
            <!-- end -->
            
        </div>
           
       </section>
       <div style=" padding: 20px; "></div>

        <!-- ==================Main design will end here  ============================== -->
   
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
                  <!--<li> <i class="fas fa-phone-square-alt"></i>  +1 (909) 453-2200 </li>-->
                  <li>contactus@bitxpros.com</li>
                  <li style="color: #c4c4c4"> QUICK LINKS</li>
                  <li style="color: #c4c4c4"><a href="bitxpros.com">contactus@bitxpros.com</a> </li>
                </ul>
              </div>

              <!-- =================================================== -->
              <div class="col-sm-3">
                <img src="../images/logo-whiterss.png">
              </div>
              
            </div>

            <div style="padding: 30px;"></div>

            <p style="font-family: raleway">Trading in CFDs, Forex and Options may not be appropriate for all investors as it carries a high level of risk and can result in the loss of all of your Investment. You should not invest money that you cannot afford to lose. Before deciding to trade, you should become aware of all the risks associated with CFDs, Forex and Options trading, and seek advice from an independent and suitably licensed financial advisor bitxpros.com is not responsible for any direct, indirect or consequential losses, or any other damages resulting from the user's actions on this site <a href="https://bitxpros.com/">contactus@bitxpros.com</a> is powered by Bitxpros Trading ICT Team. 
              <center style="font-family: raleway">Copyright &copy; 2020 contactus@bitxpros.com  All rights reserved <br />
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     </body>
</html>