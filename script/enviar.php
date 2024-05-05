<?php
	
	if(!empty($_POST)){
		
		$name = $_POST['name'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6Lf65iwdAAAAAGYqrA1Vh8gD2tDNrL7l0npiWpsK';
		
		if(!$captcha){
            header("Location:../index.html");
						
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
                $header = 'From: ' . $mail . " \r\n";
                $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
                $header .= "Mime-Version: 1.0 \r\n";
                $header .= "Content-Type: text/plain";

                $message = "Nombre: " . $name . " \r\n";
                $message .= "E-Mail: " . $mail . " \r\n";
                $message .= "Teléfono: " . $phone . " \r\n";
                $message .= "Mensaje: " . $_POST['message'] . " \r\n";
                $message .= "Enviado el: " . date('d/m/Y', time());

                $para = 'info@tnisa.com.ar';
                $asunto = 'Mensaje rescibido desde la web';

                mail($para, $asunto, utf8_decode($message), $header);
                header("Location:../index.html");
				} else {
				echo '<h3>Error al comprobar Captcha </h3>';
			}
		}
	}
?>