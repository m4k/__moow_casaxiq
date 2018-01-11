<script src="./js/jquery.maskedinput.js"></script>
<script type="text/javascript">
        function gravarContato() {

            var animacaotipo = 'animated bounceInDown';
            var animacaotipo1 = 'animated fadeInLeftBig';
            var animacaotipo2 = 'animated bounceOutUp';
            var animacaofim = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

            $.ajax({
                method: "post",
                url: "controller/gravar_contato.php",
                beforeSend: function(){
                     $('#form_contato').hide();
                    $('.load2').show();
                },
                data: $("#form_contato").serialize(),
                success: function(data) {
                    if (data == '1') {
                        $('.load2').hide();
                        $('#form_contato').hide();
                        $('.error-message2').hide();
                        $('.success-message2').show();
                    }
                    if (data == '0') {
                        $('.load2').hide();
                        $('#form_contato').show();
                        $('.error-send2').addClass(animacaotipo).one(animacaofim, function(){
                            $(this).removeClass(animacaotipo);
                        }).show();
                    }
                    if (data == '2') {
                        $('.load2').hide();
                        $('#form_contato').show();
                        $('.error-message2').addClass(animacaotipo).one(animacaofim, function(){
                            $(this).removeClass(animacaotipo);
                        }).show();
                    }
                    /*else {
                      alert("Teve algum erro, fudeuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu..!");
                    }*/
                },
                error: function(data) {
                    $('.load2').hide();
                    $('#form_contato').hide();
                    $('.error-connect2').addClass(animacaotipo).one(animacaofim, function(){
                        $(this).removeClass(animacaotipo);
                    }).show();
                }

            });
        }
    </script>

<div class="row" style="background-color: rgba(0,0,0,.1);">
	<div class="container" id="contato_page">
		<div class="col-md-4" style="padding: 20px 0;">
			<div style="padding: 45px 15px; background-color: #f1f1f1;">
		        <h4 style="font-family: 'Nixie One', cursive; font-weight: 600;">Entre em contato comigo!</h4>
		        <i class="fa fa-window-minimize" style="color: #FFC60B; margin-bottom: 10px;"></i>
		        
		        <form class="" action="" method="post" class="form-control" id="form_contato" action="" onsubmit="gravarContato(); return false;">
                  <span style="color: #3d3d3d">nome</span>
		          <input type="text" name="nome" placeholder="Nome" class="form-control">
		          <span style="color: #3d3d3d">e-mail</span>
                  <input type="text" name="email" placeholder="E-mail" class="form-control">
		          <span style="color: #3d3d3d">telefone</span>
                  <input type="text" name="telefone" placeholder="Telefone" class="form-control telefone">
		          <textarea name="msg" rows="7" cols="80" class="form-control" placeholder="Escreva sua mensagem"></textarea><br>
		          <button type="submit" name="comecar" class="btn btn-default" style="text-transform: uppercase; letter-spacing: 1.2; padding: 12px; background: #444!important; color: #FFF; box-shadow: 2px 2px 15px #666; border: 0;">enviar <i class="fa fa-paper-plane-o"></i></button>
		          <!--glyphicon glyphicon-ok-->
		        </form>
		        <div class="load2" style="display: none;" align="center">
		          <br>
		          <p>Enviando a mensagem...</p>
		          <br>
		          <img src="../images/load.gif" alt="Loading">
		        </div>
		        <div class="success-message2 w-form-done" align="center">
		          <img src="../images/luis2.png" alt="Luis Outi Ok"><br><br>
		          <p>Obrigado por fazer parte do meu grupo.</p><br>
		          <i class="fa fa-check" aria-hidden="true" style="color: #2DCC70; font-size:26px;"></i>
		        </div>
		        <div class="error-message2 w-form-fail">
		          <p>Oops! Algo deu errado, preencha todos os campos!</p>
		        </div>
		        <div class="error-connect2 w-form-fail">
		          <p>Oops! Algo deu errado, verifique sua conexão ao DB!</p>
		        </div>
		        <div class="error-send2 w-form-fail">
		          <p>Não foi possível enviar o e-mail!</p>
		        </div>
	        </div>
      	</div>
		<div class="col-md-8" id="map" style="height:600px; padding: 20px 0;">
			<iframe width="100%" height="100%" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=Av.%20Ayrton%20Senna%20da%20Silva%2C%20200%20-%20301%20-%20Gleba%20Fazenda%20Palhano%2C%20Londrina%20-%20PR&key=AIzaSyCAoFi4CjDnvfQhS9LJfBt-htTJwkZuVm8" allowfullscreen></iframe>
		</div>
	</div>
</div>
<style media="screen">
    .success-message2, .error-message2, .error-connect2, .error-send2{
        display: none;
    	margin: 15px;
    }
    #contato_page input[type='text']{
    	padding: 20px;
    	margin-bottom: 5px;
        color: #444;
    }

</style>
<script>
    var $doc = $('html, body');
    $('a').click(function() {
        $doc.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
    $(document).ready(function(){
    
    $("input.dinheiro").maskMoney({
      showSymbol:true, symbol:"R$ ", decimal:",", thousands:"."});
    });

    $("input.telefone")
      .mask("(99) 9999-9999?9")
      .focusout(function (event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);

        element.unmask();
        if(phone.length > 10) {
          element.mask("(99) 99999-999?9");
        } else {
          element.mask("(99) 9999-9999?9");
        }
    });
</script>