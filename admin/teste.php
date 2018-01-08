<?php
	include_once"connect.php";	
	
	header('Content-type: text/plain charset=utf-8');

		$connx 	 = new Connect();
		$connect = $connx->acesso();

	
		$sql = "SELECT nome, email, senha FROM users ";

		$exc = $connect->query($sql);

		while ($res = mysqli_fetch_array($exc)) {
			echo "ok ".$res['nome'].", \nmail: ".$res['email'].", \nsenha: ".$res['senha']."\n\n";
		}