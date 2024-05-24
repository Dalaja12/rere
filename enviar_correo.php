<?php
// Datos del formulario
$name = $_POST['name'];
$school = $_POST['school'];
$average = $_POST['average'];
$email = $_POST['email'];

// Dirección de correo a la que se enviará el formulario
$to = "ch269297@gmail.com";

// Asunto del correo
$subject = "Nuevo formulario de inscripción";

// Mensaje que se enviará por correo
$body = "Has recibido un nuevo formulario de inscripción:\n\n";
$body .= "Nombre Completo: $name\n";
$body .= "Bachillerato: $school\n";
$body .= "Promedio General: $average\n";
$body .= "Correo Electrónico: $email\n";

// Condición para enviar correos basada en los requisitos
if (($average <= 7.9 && $school == 'Otro') || ($average >= 8.0 && $school == 'Otro')) {
    $message = "Lo sentimos, no cumples con los requisitos para la inscripción.";
} else {
    // Envío del correo
    if (mail($to, $subject, $body)) {
        $message = "¡El formulario se ha enviado correctamente!";
    } else {
        $message = "Hubo un problema al enviar el formulario.";
    }
}

echo $message;
?>
