<?php

//Test form inputs function
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//Send email function
function send_mail($email, $message){

    $mail = new PHPMailer(true);                                
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 
        $mail->isSMTP();                                        // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                 // Enable SMTP authentication
        $mail->Username = 'something@gmail.com';                 // SMTP username
        $mail->Password = 'password';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                      

        //Recipients
        $mail->setFrom('no-reply@info.com', 'Jim Kenny For Fire Commissioner');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);                                    
        $mail->Subject = 'New Account Verification';
        $mail->Body = $message;


        $mail->send();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

?>