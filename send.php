<?php

if((isset($_POST['name'])&&$_POST['name']!="")&&
  (isset($_POST['email'])&&$_POST['email']!="")&&
  (isset($_POST['textarea'])&&$_POST['textarea']!="")) {

  $email = $_POST['email'];
  $to = 'andreylobach1997@gmail.com';
  $subject = 'Вопрос с сайта';

  $message = '<html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>email: '.$_POST['email'].'</p>
                        <p>Текст: '.$_POST['textarea'].'</p>                        
                    </body>
                </html>';

  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From: "$email" \r\n";
  mail($to, $subject, $message, $headers);
}

?>