<html>
<head>
	<title>Galeria CasaXiq</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--script src="./includes/js/xxxxxxxxx.js"></script-->
	<link rel="stylesheet" href="./includes/css/estilo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/estilo_up_photos.css">
	<script type="text/javascript" src="JS/function.js"></script>
</head>
<?php
	include './connection/connect.class.php';	
	
	header('Content-type: text/html charset=utf-8');

	$connx 	 = new Connect();
	$stm = $connx->acesso();

	$caminho = "../includes/img/galery/";
?>
<body>
	<div align="center"><img id="logo" src="../includes/img/logo.png" width="180px">
		<p id="titulo">Importar fotos para a galeria</p>
	</div>
	<form method="post" enctype="multipart/form-data" action="">

		<div class="ccc" align="center">
			<div style="width:75%;">
			<table align="left">
				<tr>	
					<td><img id="uploadPreview" style="width: 120px; height: 130px;" /></td>
				</tr>
				<tr>
					<td>capa</td><td><input type="file" name="v5" value="" id="uploadImage" onchange="PreviewImage()"/></td>
				</tr>			
				<tr>
					<td>nome</td><td><input type="text" name="v1"/></td>
				</tr>
				<tr>
					<td>descricao</td><td><input type="text" name="v2"/></td>
				</tr>
				<tr>
					<td>classificacao</td><td><input type="text" name="v3"/></td>
				</tr>
				<tr>
					<td>valor</td><td><input type="text" name="v4"/></td>
				</tr>			
				<tr>
					<td><input type="submit" name="ok"/></td>
				</tr>
			</table>
			</div>
		</div>

	</form>
	<?php 

		session_start(); //faz com que seja feita uma pequena verificacao e impede que ao atualizar a acao seja repetida
		// Em resumo limpa os coock's
		if( $_SERVER['REQUEST_METHOD']=='POST' ){
				$request = md5( implode( $_POST ) );
				if( isset( $_SESSION['ok'] ) && $_SESSION['ok']== $request ) // Faz a validacao e da uma menssagem
				{
				//echo 'refresh';
					echo"<div class='ccc'><div style='width: 75%;'><img src='49738_27183_Stop_128x128_stop_icon.png' style='width:50px;'/>\nO item ja esta cadastrado</div></div>";
				}
				else //Insere no banco de dados
				{
				$_SESSION['ok'] = $request;
				echo "<div class='ccc'><div style='width: 75%;'><img src='ok.png' style='width:50px;'/>Cadastro realizado com sucesso !!</div></div>";

					if(isset($_POST['ok'])){
			
					$v01 = $_POST['v1'];
					$v02 = $_POST['v2'];
					$v03 = $_POST['v3'];
					$v04 = $_POST['v4'];
					$Foto = $_FILES['v5']['name'];
					$Tipo = $_FILES['v5']['type'];
											
					if($_FILES['v5'] != '')
					{
						if($v01 != '' && $v02 != '' && $v03 != '' && $v04 != '')
						{

							$exten = explode('/', $Tipo);												
							switch ($Tipo) {
								case 'image/jpeg':
									$Tipo = 'image/jpg';
									$fimImage = '.jpg';
									break;

								case 'image/png':
									$Tipo = 'image/png';
									$fimImage = '.png';
									break;
								
								default:
									$Tipo;
									$fimImage = '.'.$exten[1];
									break;
							}
							$image = 'img_'.date('YmdHms').$fimImage;/*.$Foto*/
							$local = $caminho."/".$image;


							if(move_uploaded_file($_FILES['v5']['tmp_name'],$local))
							{
								$inserir = $stm->query("INSERT INTO GAME ( capa, tipo, nome, des, clss, valor ) VALUES ('$image','$Tipo','$v01','$v02','$v03','$v04')");
							}
							else {
							//echo 'Falha ao fazer upload';
							$inserir = $stm->query("INSERT INTO GAME ( nome, des, clss, valor ) VALUES ('$v01','$v02','$v03','$v04')");
							}
						}
						else{
							echo "<script>alert('Preencha os campos')</script>";
						}
					}
			
				}
			
			}
			unset( $_POST );
		}				
	?>
	<?php 

		$res = $stm->query("SELECT * FROM GAME where id ORDER BY id DESC");
		/*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */

		echo "<div class='ccc' align='center'>
			<div id='tb'>
				<br/>
				<br/>
					<table>
						<tr>
							<td></td>
							<td>ID</td>
							<td>Nome</td>
							<td>Descricao</td>
							<td>Classificacao</td>
							<td>Valor</td>
							<td>Cartaz</td>
							<td></td>
							<td></td>
						</tr>";
			
		/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
		while($escrever = mysqli_fetch_array($res)){
			
		$photo = ($escrever['capa'] == '') ? 'sem-imagem.jpg' : $escrever['capa'];		
		
		/*Escreve cada linha da tabela*/
		echo "<tr>
				<form method='post'>
				<input type='hidden' value='".$escrever['id']."'>
				<td>"."<input type='radio' name='selex'/>"."</td>
				<td>" . $escrever['id'] . "</td>
				<td>" . $escrever['nome'] . "</td>
				<td>" . $escrever['des'] . "</td>
				<td>" . $escrever['clss'] . "</td>
				<td>R$ " . $escrever['valor'] . "</td>
				<td><img src='".$caminho.$photo."' width='100px'/></td>
				<td>"."<input type='submit' value='update'/>"."</td>
				<td>"."<input type='submit' value='excluir'/>"."</td>
				</form>
			</tr>";
		
		}/*Fim do while*/

		echo "</table>
				</div>
					</div>"; /*fecha a tabela apos termino de impressão das linhas*/
		
		if(isset($_POST['excluir'])){
			$file_done = $_POST['']
		}
			
	?>

	<div class="ccc" align="center">	
	<div id="footer" >
		<p>www.m4rkos.com and MOOW | <?php echo date('Y'); ?></p>
	</div>
	</div>
    <!--Div that will hold the pie chart-->
    <!--  div id="graf"><div id="chart_div"></div></div-->
	</body>
</html>
