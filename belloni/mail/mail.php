<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

//sumbission data
$ipaddress = $_SERVER['REMOTE_ADDR'];
$date = date('d/m/Y');
$time = date('H:i:s');

//form data
$name = $_POST['name'];	
$email = $_POST['email'];
$Whatsapp = $_POST['Whatsapp'];
$message = $_POST['message'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'user@example.com';                 // SMTP username
// $mail->Password = 'secret';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom("contato@belloni.adv.br", 'Belloni Advogados');
$mail->addAddress("contato@belloni.adv.br", 'Belloni Advogados');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo("contato@belloni.adv.br", 'Belloni Advogados');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Solicitacao de contato - SITE Belloni Advogados';
$mail->Body    = "<p>Existe uma nova solicitacao de contato em seu site.</p>
						  <p><strong>Nome: </strong> {$name} </p>	
						  <p><strong>Endereco de e-mail: </strong> {$email} </p>
						  <p><strong>Whatsapp: </strong> {$Whatsapp} </p>
						  <p><strong>Mensagem: </strong> {$message} </p>
						  <p>Essa mensagem foi enviada atraves do IP: {$ipaddress} no dia {$date} às {$time}</p>";
$mail->AltBody = 'Você tem uma nova solicitação de contato';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}