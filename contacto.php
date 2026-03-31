<?php
//Importamos las variables del formulario de contacto

@$nombre = addslashes($_POST['nombre']);
@$telefono = addslashes($_POST['telefono']);
@$correo = addslashes($_POST['correo']);
@$carrera = addslashes($_POST['carrera']);
@$mensaje = addslashes($_POST['mensaje']);


//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde Grupo CEDIP"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "soportetecnicocedip@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde Grupo CEDIP\n"
. "\n"
. "Nombre: $nombre\n"
. "Telefono: $telefono\n"	
. "Correo: $correo\n"
. "Carrera de Interés: $carrera\n"
. "Mensaje: $mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Si el mensaje se envía muestra una confirmación
echo "<script type=\"text/javascript\">alert('Su mensaje fue enviado correctamente, acepta para continuar'); window.location='index.html';</script>";
}else{
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>