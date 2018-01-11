<?php 
	if (isset($_GET['ok']) and $_GET['ok'] == 1) {
		
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		
		include_once"./connection.php";

		$conn = mysqli_connect($host, $user, $pass, $db_name);


            $sql = "INSERT INTO leads(nome, email, ip, page_form, mensagem) VALUES ( ?, ?, ?, ?, ? )";

            $loc_ip = $_SERVER['REMOTE_ADDR'];

				    $email = addslashes($_POST['email-cta']);
				    $temp_nome = explode('@', $email);
				    $nome = $temp_nome[0];
				    
				    #$tel  = addslashes($_POST['telefone']);
						$page = "CTA - Rodapé";
						$msg = $email.'<br>Interesse nos informativos <br>'.$page;
						

						$data_lead = addslashes(date('d-m-Y'));

            $ip = addslashes($loc_ip);

            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssss', $nome, $email, $ip, $page, $msg);

            if($email != ''){
                if($stmt->execute()){

					include_once"./enviar_cta.php";

                    if ($enviado) {
						$stmt->close();
						echo "ok";
					}
					else {
                    $stmt->close();
						echo "0";				
					}
                }else{
                    echo "2";
                }
            }else{
                echo "3";
            }

		}
	}
