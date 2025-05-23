<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$modelo = $_POST['modelo'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su telefono: " . $telefono . " \r\n";
$mensaje .= "fecha de arriendo: " . $fecha. " \r\n";
$mensaje .= "Modelo: " . $modelo. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'contacto@juegosinflablesantiago.cl';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location: adiosemail.php");
?>