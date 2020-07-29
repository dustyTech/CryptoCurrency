<?php
    function mailClient($first_name,$last_name,$email,$token){
            require '../PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'bitxpros.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contactus@bitxpros.com';
        $mail->Password = 'Rk+GANIn#Yfi';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('contactus@bitxpros.com', 'contactus@bitxpros.com');
        $mail->addReplyTo('contactus@bitxpros.com', '');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to Bitxpros';
        $mail->Body = "
                   Hello ".$first_name. " 
                    <br>
                    We would like to welcome you as our new client.
                    <br>
                    <br>
                    To access your account, please use the email and password
                    provided by you during registration. You can always
                    reset your password or ask for help from our support team.
                    <br>
                    <br>
                    For additional assistance, feel free to contact our support
                    team via email at contactus@Bitxpros.com.
                    <br>
                    <br>
                    Best of Luck!
                    <br>
                    Bitxpros Trading
                    <br>
                    <br>
                    This is an automated response, please do not reply this message.
                    <br>
                    <br>
Help us to make sure you receive our notifications in your inbox by marking our system messages as NOT SPAM.
<br>
<br>
Disclaimer:

When trading CFD as with any financial assets, there is a possibility that you may sustain a partial or total loss of your investment funds when trading. As a result, it is expressly advised that you should never invest with, or trade upon, money which you cannot afford to lose through this manner of trading. Bitxpros Trading provides no guarantees of profit nor of avoiding losses when trading.
The Website and Content may be available in multiple languages. The English version is the original version and the only one binding on Bitxpros Trading; it shall prevail on any other version in case of discrepancy. Bitxpros Trading shall not be responsible for any erroneous, inadequate, or misleading translations from the original version into other languages.
        <a href='https://www.bitxpros.com/links/verify_email.php?token=$token' style='color: red;'>Click on the link to verify account and login </a>";
                
                
        if(!$mail->send()){
            
            $error=$mail->ErrorInfo;
            echo $error;
        }  else {
            // echo 'success';
            return "success";
        }               
        
    }


?>