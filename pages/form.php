<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$destinatario = $_POST['destinatario'];
$comentarios = $_POST['comentarios'];

$header .= "Content-Type text/plain";

$mensaje = "Mensaje Enviado por" . $nombre . ",\r\n";
$mensaje = "Su mail es" . $mail .",\r\n";
$mensaje = "Dirigido a" . $destinatario . ",\r\n";
$mensaje = "Su mensaje:" . $comentarios;
// $mensjae = "Enviado el día" date('d/m/y', time());

$para = 'nquinterno@gmail.com';
$asunto = 'Mensaje Web Divididos';

mail($para, $asunto, utf8_decode($comentarios), $header);

header('location:contacto.html');

// .../pages/contacto.html
?>
