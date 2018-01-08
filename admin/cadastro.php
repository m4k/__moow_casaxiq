
<div align="center">
	<table>
		<tr><td><img id="uploadPreview" style="width: 100px; height: 130px;" /></td></tr>
		<tr ><td><p>Imagem</p></td><td><input class="inputFile" id="uploadImage" type="file"  onchange="PreviewImage()"/></td></tr>
		<tr><td><p>Nome</p></td><td><input type="text" id="nome"/></td></tr>
		<tr><td><p>E-mail</p></td><td><input type="email" id="email"/></td></tr>
		<tr><td><p>Senha</p></td><td><input type="password" id="senha"/></td></tr>
		<tr><td><p>Confirmar Senha</p></td><td><input type="password" id="c_senha"/></td></tr>		
		<tr><td colspan="2"><hr /></td></tr>		
		<tr><td colspan="2"><input type="submit" id="insert" value="Cadastrar"/></td></tr>		
		
		<script type="text/javascript">

				function PreviewImage() {
					var oFReader = new FileReader();
					oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

					oFReader.onload = function (oFREvent) {
						document.getElementById("uploadPreview").src = oFREvent.target.result;
					};
				};
				$("#arquivo").change(function() { 
					$(this).prev().html($(this).val()); 
				});
		</script>
	</table>
	<style>
		#uploadPreview{
			border-radius: 50%;
			border: 2px solid lightGrey;
			background: black;
			background-image: url('basic_avatar2.png') ;
		}
		.inputFile { 
			width: 185px;
			height:30px;
			position: relative;
			overflow: hidden;
			background: lightGrey;
		} 
		.inputFile span {
			display: none; 
			position: absolute;
		} 
		.inputFile input {
			position: absolute;
			right: 0; z-index: 2;
			font-size: 100px;
			/* Aumenta tamanho do campo */ opacity: 15; filter: alpha(opacity=0);
		} 
		input[type=email]{
			width: 185px;
			height:30px;
		}
		input[type=text]{
			width: 185px;
			height:30px;
		}
		input[type=password]{
			width: 185px;
			height:30px;
		}		
		input[type=submit]{
			width: 100%;
			height:60px;
		}		
	</style>
</div>