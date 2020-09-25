<?php     
$to_email = 'julian.oudenalder@gmail.com';
$subject = 'Contactformulier';
$message = 'Dit bericht is verstuurd door middel van het contactformulier op ThePcLab.nl';
$headers = 'From: mail@test.com';
mail($to_email,$subject,$message,$headers);
?>