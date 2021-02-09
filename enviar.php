<?php

// llamando a los campos
$nombre = $_POST['names'];
$email = $_POST['email'];
$message = $_POST['message'];


// Datos para el correo
$destinatario = "d.k.games.mailbox@gmail.com";
$asunto = "Cliente desde la web";

$carta = "De: $nombre \n"
$carta .= "Correo: $email \n";
$carta .= "Mensage: $message";

// Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-enviado.html')


?>