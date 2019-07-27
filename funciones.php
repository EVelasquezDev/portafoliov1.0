<?php
	function enviarCorreo($email_asunto, $nombre_rem, $correo_rem, $mensaje_rem) {
		$email_destino = "evelasquezdevelopments@gmail.com";
		$texto_email = "Nombre: " . $nombre_rem . "\nCorreo: " . $correo_rem . "\nMensaje: " . $mensaje_rem;
		$cabeceras = "From: " . $correo_rem;
		mail($email_destino, $email_asunto, $texto_email, $cabeceras);
	}

	if (isset($_POST['enviar'])) {
		$email_asunto = $_POST['asunto'];
		$nombre_rem = $_POST['nombre'];
		$correo_rem = $_POST['correo'];
		$mensaje_rem = $_POST['mensaje'];

		enviarCorreo($email_asunto, $nombre_rem, $correo_rem, $mensaje_rem);
	}
?>