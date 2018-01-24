<?php
/**
 * This example shows making an SMTP connection with authentication.
 */
header('Content-Type: text/html; charset=utf-8');

/*if (isset($_POST['enviar'])) {*/
	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that

	
	$Nome			=	$_POST["nome"];	
	$Tratar_name 	= 	explode(" ", $Nome);
	$First_name		= 	$Tratar_name[0];
	$Fone			=	$_POST["telefone"];	
	$Email			=	$_POST["email"];	
	/* Geo Localizar */
	$user_ip 	= getenv('REMOTE_ADDR');
	$geo 		= unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
	$country 	= $geo["geoplugin_countryName"];
	$city 		= $geo["geoplugin_city"];
	$estado		= $geo["geoplugin_regionName"];

	$Mensagem 		=	$_POST["msg"]."\n\n"."Nome: ".$Nome."\n"."Telefone: ".$Fone."\n"."Cidade: ".$city." - ".$estado;	

	//$Info_cliente	= "<h1>Assunto: $Assunto</h1>\n\nNome: $First_name\nE-mail: $Email\nTelefone: $Fone\nMensagem: $Mensagem\n\n";


	date_default_timezone_set('Etc/UTC');

	//require 'PHPMailerAutoload.php';
	require 'class/class.phpmailer.php';
	
	if($_POST['tipo_form'] == 'triplox'){
		$Assunto = "Curso Tripo X";
		define('GUSER', 'retornocurso@casaxiq.com.br');
		define('GPWD', 'muitosalunos@@@');
		define('TIPO_MAIL', 'Casa Xiq - Curso');
	}else{
		$Assunto = "Contato do Site";
		define('GUSER', 'retornosite@casaxiq.com.br');
		define('GPWD', 'muitasobras@@@');
		define('TIPO_MAIL', 'Casa Xiq - Site');
	}
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'br522.hostgator.com.br';	// SMTP utilizado
	$mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	//Set who the message is to be sent from
	$mail->setFrom($Email, $First_name);
	//Set an alternative reply-to address
	$mail->addReplyTo(GUSER, TIPO_MAIL);
	//Set who the message is to be sent to
	$mail->addAddress(GUSER, TIPO_MAIL);
	//Set the subject line
	$mail->Subject = $Assunto;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	//Replace the plain text body with one created manually
	//$mail->AltBody = 'This is a plain-text message body';
	$mail->Body = $Mensagem ;
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mail Error ou erro no envio do email: " . $mail->ErrorInfo;
	} else {
	    echo"1";
	}
//}
