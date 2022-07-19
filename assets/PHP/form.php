<?php
    header("Location: https://nquinterno.000webhostapp.com/pages/contacto.html");

    $errorMSG = "";


    // NAME
    if (empty($_POST["nombre"])) {
        $errorMSG = "Es necesario indicar un Nombre ";
    } else {
        $name = $_POST["nombre"];
    }

    // EMAIL
    if (empty($_POST["mail"])) {
        $errorMSG .= "Es necesario un Mail de contacto ";
    } else {
        $email = $_POST["mail"];
    }

    // RECEPTOR
    if (empty($_POST["destinatario"])) {
        $errorMSG .= "Es necesario que seleccione un destinatario ";
    } else {
        $destinatario = $_POST["destinatario"];
    }


    // MESSAGE
    if (empty($_POST["comentarios"])) {
        $errorMSG .= "Escriba un mensaje para la banda ";
    } else {
        $message = $_POST["comentarios"];
    }


    $EmailTo = "nquinterno@gmail.com";
    $Subject = "Mensaje Web Divididos";

    // prepare email body text
    $Body = "";
    $Body .= "Nombre: ";
    $Body .= $name;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "Dirigido a: ";
    
    if($destinatario==01){
        $Body .= "Todos";
    }else{
        if($destinatario==02){
            $Body .= "Ricardo";
        }else{
            if($destinatario==03){
                $Body .= "Diego";
            }else{
                if($destinatario==04){
                $Body .= "Catriell";}

            }
        }
    }
    $Body .= "\n";
    $Body .= "Mensaje: ";
    $Body .= $message;
    $Body .= "\n";

    // send email
    $success = mail($EmailTo, $Subject, $Body, "From:".$email, $header);

    // redirect to success page
    if ($success && $errorMSG == ""){
    echo "Mensaje Enviado";
    }else{
        if($errorMSG == ""){
            echo "Algo anda mal :(";
        } else {
            echo $errorMSG;
        }
    }



?>
