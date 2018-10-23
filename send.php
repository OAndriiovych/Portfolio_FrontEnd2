<?php
if(isset($_POST['submit'])){$to="narnanam@gmail.com";;$from="no-reply@epicblog.net";;$first_name=$_POST['first_name'];;$email=$_POST['email'];;$message=$_POST['message'];;$mail_to_myemail="Здравствуйте!
Было отправлено сообщение с сайта!
Имя отправителя: $first_name
E-mail: $email
Текст сообщения: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";
$headers="From: $from \r\n";mail($to,$mail_to_myemail,$headers.'Content-type: text/plain; charset=utf-8');echo "Su mensaje ha sido enviado. Gracias. ".$first_name.", pronto nos pondremos en contacto contigo.";echo "<br /><br /><a href='https://narnanam.000webhostapp.com/index.html'>Regrese al sitio!</a>";}
?>