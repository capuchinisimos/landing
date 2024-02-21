
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent= "De: $email \r\n";
$recipient = "business@swami-tv.com";
$mailheader = "De: $name \n Mensaje: $message \n Celular: $phone \n Objeto: $subject";
mail($recipient, $formcontent, $mailheader) or die("Error!");
echo "Gracias!";
?>