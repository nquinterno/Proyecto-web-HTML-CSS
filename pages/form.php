<?php
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $destinatario = $_POST['destinatario'];
    $comentarios = $_POST['comentarios'];

    // $header = "Content-Type: text/plain";

    $mensaje = "Mensaje Enviado por" . $nombre;
    $mensaje .= "\n";
    $mensaje .= "Su mail es" . $mail;
    $mensaje .="\n";
    $mensaje .= "Dirigido a: " .  $destinatario;
    $mensaje .="\n";
    $mensaje .= "Su mensaje:" . $_POST['comentarios'];
    // $mensjae = "Enviado el día" date('d/m/y', time());

    $para = "nquinterno@gmail.com";
    $asunto = 'Mensaje Web Divididos';

    mail($para, $asunto, utf8_decode($mensaje));
?>
