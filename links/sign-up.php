<?php
    include_once '../includes/dbh.inc.php';
    session_start();
    ob_start();

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

    <title> Sign up | Bitxpros Trading </title>

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
       <section class="container-fluid sign-up-bg" style="margin-top: 0;">
        <div class="col-lg-5 col-md-12 col-form">

            <center>
                <a href="../index.php"><img src="../images/logo-whiterss.png" style="width: 200px;"></a>
            </center>


            <!-- ==================================this is the form section of the signup section ============================ -->
            <form class="form-main-sec" method="POST" action="" onsubmit="return validate()">
                 <h4>CREATE AN ACCOUNT</h4>
            <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="firstname" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name: </label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="lastname" required>
            </div>
            <div class="form-group">
              <label for="sex">Sex: </label>
              <select class="form-control" id="sex" name="sex" required>
                   <option value="" disabled selected>--Select an option--</option>
                    <option> Male </option>
                    <option> Female </option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="country">Country: </label>
                <select name="country" size="1" class="form-control" required id="country" placeholder="Select Country" style="font-family: Montserrat, sans-serif; height: 3.25rem; border-radius: 0px;">
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
            </div>  
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="psw">Password:</label>
                <input type="password" class="form-control" id="psw" name="psw" placeholder="password" required>
                <div id="msg2" style="color: red;"></div>
            </div>
            <div class="form-group">
                <label for="psw">Re-Password:</label>
                <input type="password" class="form-control" id="re_psw" name="re_psw" placeholder="re-enter password" required>
                 <div id="msg" style="color: red;" class="mb-3"></div>
                            <script>
                                     var msg = document.getElementById('msg');
                                                                        var new_psw = document.getElementById('psw');
                                                                        var renew_psw = document.getElementById('re_psw');

                                                                        function validate() {
                                                                            if(new_psw.value.length < 6) {
                                                                             msg2.innerHTML = "<div> password must be more than 6 characters </div>";
                                                                             return false;
                                                                            }
                                                                         if(new_psw.value !== re_psw.value) {
                                                                             msg.innerHTML = "<div> password mis-matched </div>";
                                                                             return false;
                                                                         }
                                                                 }
                                                            </script>
            </div>
            <div class="form-group">
                <label for="psw">Phone Number:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="phone number" required>
                 <small class="form-text text-muted">Enter country code before phone number</small>
            </div>
            <div class="form-group">
              <label for="refer_by">Referral: </label>
              <input type="text" class="form-control" id="referral" name="referral" placeholder="Refer by">
              <small class="form-text text-muted">Not Compulsory</small>
            </div>
            <div class="form-group">
              <span> Account type</span>
                <select class="form-control" name="account_type" id="account_type" required>
                    <option value="" disabled selected>--Select an option--</option>
                    <option> Mini Account </option>
                    <option>Unemployed </option>
                    <option> Business class</option>
                    <option> Retiree</option>
                    <option> Working class</option>
                    <option> Starter</option>
                    <option> Silver</option>
                    <option>Gold </option>
                    <option> Premium</option>
                    <option> May Day Bonanza!</option>
                    
                </select>  
            </div>
         
             <center>
                 <button type="submit" class="btn btn-primary btn-submit" id="submit" name="submit-info">Submit</button>
             </center>
             <br />

             <center>
                 <strong> Already have an acount? <a href="sign-in.php">Sign in </a></strong>
             </center>
            </form>
            <?php
                if(isset($_POST['submit-info'])) {
    
                $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
                $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
                $sex = mysqli_real_escape_string($conn, $_POST['sex']);
                $email = mysqli_real_escape_string($conn, $_POST['email']); 
                $country = mysqli_real_escape_string($conn, $_POST['country']); 
                $username = mysqli_real_escape_string($conn, $_POST['username']); 
                $psw = mysqli_real_escape_string($conn, $_POST['psw']);
                $re_psw = mysqli_real_escape_string($conn, $_POST['re_psw']);
                $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']); 
                $referral = mysqli_real_escape_string($conn, $_POST['referral']);
                $account_type = mysqli_real_escape_string($conn, $_POST['account_type']);
                $current_time = strtotime("now");
                $date = date("jS M, Y h:ia", $current_time);
                $wallet_balance = 0.00;
                $token = "qwertyuiopasdfghjklzxcvbnQWERTYUIZCVBAS34567";
                $token = str_shuffle($token);

                $sql = "SELECT * FROM reg_users WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $resultChecker = mysqli_num_rows($result);
        
    //get email from database
   if($resultChecker > 0) {
       
       echo "<center>
                    <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                            <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                            <strong> Email Taken! </strong>
                     </div>
            </center>";
    
   }
   else {
   $sql = "INSERT INTO reg_users (first_name, last_name, sex, email, country, username, psw, re_psw, phone_no, referral, account_type, wallet_balance, date_of_reg, email_verified, token)
    VALUES('$first_name', '$last_name', '$sex', '$email', '$country', '$username', '$psw', '$re_psw', '$phone_no', '$referral', '$account_type', '$wallet_balance', '$date', '$email_verified', '$token')";
  
   
    $result = mysqli_query($conn, $sql);
    
    
     if($result) {
          require_once 'sendEmail.php';
                //send email                    
                $mailreturn = mailClient($first_name, $last_name, $email,$token);
                                   
         
     
       
        
         if($mailreturn=="success") {
            echo "<center>
                    <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                            <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                            <strong> Sign Up Success! </strong>Check your Email to open verification link
                     </div>
            </center>";
     } else {
         echo  "<center>
                    <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                            <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                            <strong> Sign Up failed! </strong>Please try again
                     </div>
            </center>";
     }
        }
        
        
     
}
}


            ?>
        
            
        </div>
        <!-- end col -->
           
       </section>
       <!-- end main section  -->
       <!-- two column section for the signup page in the address -->
       <div style=" padding: 20px; "></div>

       <section class="container">
        <div class="row">
            <div class="col-md-6 sign-up-col-txt">
                <h3> After registering you will receive: </h3>
                <p> Access to the best platform for trading CFDs, Forex and Options </p>
                <p> Personal manager</p>
                <p>Weekly webinars from professional brokers</p>
                <p>Access to educational Videos</p>
            </div>
            <!-- end col -->
            <div class="col-md-6 sign-up-col-txt">
                <h3>We Provide: </h3>
                <p> The most advanced trading platform for trading CFD,s Forex and Options </p>
                <p> A wide range of trading tools </p>
                <p> 5 account types to suit every type of trader</p>
                <p>Daily markets analysis</p>
                <p>Over 90 assets </p>
            </div>
        </div>    
       </section>
       <script>
          /*
           var psw = document.getElementById('psw');
           var re_psw = document.getElementById('re_psw');
           
           function validate() {
            if(psw.value !== re_psw.value) {
                alert('password mismatched');
                return false;
            }
    }
        
          $(document).ready(function(){
            $('#submit').click(function(event){
              event.preventDefault(); // this line of code will stop the action from working in the form

              
              //getting the values from the forms using thier id's
              var first_name = $('#first_name').val();
              var last_name = $('#last_name').val();
              var sex = $('#sex').val();
              var email =  $('#email').val();
              var country = $('#country').val();
              var username=  $('#username').val();
              var psw=  $('#psw').val();
              var re_psw = $('#re_psw').val();
              var phone_no = $('#phone_no').val();
              var referral = $('#referral').val();
              var account_type = $('#account_type').val();
             

              //checking for empty fields
              if(!first_name || !last_name|| !sex || !email || !country  || !username || !psw || !re_psw || !phone_no || !referral || !account_type){
                swal({
                  text: "Please fill all fields",
                  icon: "error"
                }); //this is the end of the swal icon 
              }
              
              else if(psw != re_psw) {
                  
              }
         /*     
        else{

                $.ajax({
                  type: "POST",
                  url: "../includes/signup.inc.php",
                  data: {first_name: first_name, last_name: last_name, sex: sex, email: email, country: country, username: username, psw: psw, re_psw: re_psw, phone_no: phone_no, referral: referral, account_type: account_type},
                  success: function(data,request,setting){
                    swal({
                      text: data,
                    });
                    $('#message').hide();

                    $('#submit').prop('disabled',true); //this code will make sure that the user is not able to click the submit button more than once.

                  },
                  beforeSend: function(data, request,settings){
                    $('#message').html('<img src="../images/loading.gif" /> ');
                  } //end of beofre send section
                }); //end of ajax main code

              } //this is the end of the if validating if the flieds is empty


                

             });//this is the end of the submit function
              
            });// this the end of the jquery main function 
            */
           
       </script>

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
                  <li style="color: #c4c4c4">4754 Bel Meadow Drive,  San Bernardino California, USA</li>
                  <li style="color: #c4c4c4"><i class="fas fa-phone-square-alt"></i> +1 (909) 453-2200</li>
                  <li>contactus@bitxpros.com</li>
                  </ul>
              </div>

              <!-- =================================================== -->
              <div class="col-sm-3">
                  <img src="../images/logo-whiterss.png">
              </div>
              
            </div>

            <div style="padding: 30px;"></div>

            <p style="font-family: raleway">Trading in CFDs, Forex and Options may not be appropriate for all investors as it carries a high level of risk and can result in the loss of all of your Investment. You should not invest money that you cannot afford to lose. Before deciding to trade, you should become aware of all the risks associated with CFDs, Forex and Options trading, and seek advice from an independent and suitably licensed financial advisor bitxpros.com is not responsible for any direct, indirect or consequential losses, or any other damages resulting from the user's actions on this site <a href="https://bitxpros.com/">bitxpros.com</a> is powered by Bitxpros Trading ICT Team. 
              <center style="font-family: raleway">Copyright &copy; 2020 bitxpros.com  All rights reserved <br />
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