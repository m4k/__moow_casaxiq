<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {


        //Cadastrar no DB
        include_once"./connection.php";
        

        $conn = mysqli_connect($host, $user, $pass, $db_name);


            $sql = "INSERT INTO leads(nome, email, telefone, ip, page_form, mensagem) VALUES ( ?, ?, ?, ?, ?, ? )";

            //$codigo = addslashes($_POST['codigo_cliente']);

            /*Buscar usuario*/
            /*$selecionar = $conn->query("SELECT nome, cod_xp, cpf, email FROM clientes_xp WHERE cpf='{$codigo}' OR cod_xp='{$codigo}' ");
            $busca = mysqli_fetch_row($selecionar);*/

            $loc_ip = $_SERVER['REMOTE_ADDR'];
            //$code_rand = rand(12, 9000);


						//$ip   = addslashes($_SERVER['REMOTE_ADDR']);
				    $nome = addslashes($_POST['nome']);
				    $email = addslashes($_POST['email']);
				    $tel  = addslashes($_POST['telefone']);
						$msg = addslashes($_POST['msg'])."<br><br>Telefone: ".$tel."<br>".$nome."<br>".$email;
						$page = "Contato";
				    //$insert = "INSERT INTO leads(nome, email, telefone, ip) VALUES('{$nome}','{$mail}','{$tel}','{$ip}')";

						$data_lead = addslashes(date('d-m-Y'));

            $ip = addslashes($loc_ip);
            //$code = addslashes($code_rand);
            /*$cod_xp = addslashes($busca[1]);
            $data = addslashes(date('Y-m-d'));
            $nome = addslashes($busca[0]);
            $email = addslashes($busca[3]);
            $cpf = addslashes($busca[2]);*/

            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssss', $nome, $email, $tel, $ip, $page, $msg);

            if($nome != '' and $email != ''){
                if($stmt->execute()){

										include_once"./enviar_mail.php";
                    //echo 'registros inserido com sucesso!';
                    if ($enviado) {
										  //echo "E-mail enviado com sucesso!";*/
											$stmt->close();
											echo "1";
										}
										else {
                      $stmt->close();
											echo "0";
											/*echo "Não foi possível enviar o e-mail.";
										  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;*/
										}


                }else{
                    //echo mysqli_error($conn);
                    echo "2";
                }
            }else{
                echo "3";
            }
}
