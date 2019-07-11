<?php

    $to = "lauroroger@icloud.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "De: $from";
    $subject = "Uma mensagem foi enviada do seu site";

    $fields = array();
    $fields{"name"}    = "Nome";
    $fields{"email"}    = "E-mail";
    $fields{"phone"}    = "Fone";
    $fields{"sub"}    = "Assunto";
    $fields{"message"}   = "Mensagem";


    $body = "Aqui está a mensagem:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
