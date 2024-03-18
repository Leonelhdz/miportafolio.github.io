<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Dirección de correo electrónico a la que se enviará el formulario
    $destinatario = "fransoriano37@live.com";

    // Asunto del correo electrónico
    $asunto = "Mensaje de contacto desde tu portafolio";

    // Construir el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje\n";

    // Encabezados del correo electrónico
    $headers = "From: $nombre <$email>";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        echo "¡El mensaje ha sido enviado!";
    } else {
        echo "¡Error al enviar el mensaje!";
    }
} else {
    echo "Acceso denegado";
}
?>
