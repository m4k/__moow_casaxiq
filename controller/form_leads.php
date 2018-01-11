<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luis Outi - Agente Autônomo de Investimentos</title>
    <meta name="title" content="Luis Outi - Agente Autônomo de Investimentos">
    
    <meta property="og:title" content="Luis Outi - Agente Autônomo de Investimentos">
    <meta property="og:site_name" content="Luis Outi">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Luis Outi">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Luis Outi">

    <meta property="og:type" content="website">
    <meta property="og:image" content="./images/luis_outi.png"/>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="620">
    <meta property="og:image:height" content="324">
    <meta property="og:url" content="https://luisouti.com/"/>
    <meta property="og:site_name" content="Para você que está procurando saber como investir."/>
    <meta property="og:description" content="Aprenda como cuidar da sua vida financeira."/>
    <meta name="twitter:title" content="Para você que está procurando saber como investir">
    <meta name="twitter:image" content="./images/luis_outi.png">
    <meta name="twitter:description" content="Aprenda como cuidar da sua vida financeira.">
    <meta name="twitter:url" content="https://luisouti.com/">
    <meta name="twitter:card" content="summary_large_image">
    

    <meta name="author" content="Marcos Eduardo">
    <meta name="description" content="Luis Outi - Agente Autônomo de Investimentos">
    <meta name="keywords" content="equipe trader, web trader , trader, Investimentos, Agente Autônomo">
    <meta name="copyright" content="moow© - 2017 moow.com.br" />
    <link rel="stylesheet" href="view/assets/css/main.css" />
    <!--script src="js/modernizr.js" type="text/javascript"></script-->
    
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>
    <script src="./js/jquery.maskedinput.js"></script>
    <script type="text/javascript">
        function gravar() {

            var animacaotipo = 'animated bounceInDown';
            var animacaotipo1 = 'animated fadeInLeftBig';
            var animacaotipo2 = 'animated bounceOutUp';
            var animacaofim = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

            $.ajax({
                method: "post",
                url: "controller/gravar.php",
                beforeSend: function(){
                     $('#form').hide();
                    $('.load').show();
                },
                data: $("#form").serialize(),
                success: function(data) {
                    if (data == '1') {
                        $('.load').hide();
                        $('#form').hide();
                        $('.error-message').hide();
                        $('.success-message').show();
                        checkCookie();
                        /*init();*/
                    }
                    if (data == '0') {
                        $('.load').hide();
                        $('#form').show();
                        $('.error-send').addClass(animacaotipo).one(animacaofim, function(){
                            $(this).removeClass(animacaotipo);
                        }).show();
                    }
                    if (data == '2') {
                        $('.load').hide();
                        $('#form').show();
                        $('.error-message').addClass(animacaotipo).one(animacaofim, function(){
                            $(this).removeClass(animacaotipo);
                        }).show();
                    }
                    /*else {
                      alert("Teve algum erro, fudeuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu..!");
                    }*/
                },
                error: function(data) {
                    $('.load').hide();
                    $('#form').hide();
                    $('.error-connect').addClass(animacaotipo).one(animacaofim, function(){
                        $(this).removeClass(animacaotipo);
                    }).show();
                }

            });
        }
    </script>
    <style media="screen">
      .success-message, .error-message, .error-connect, .error-send{
        display: none;
        margin: 15px;
      }
    </style>
    <!--Ajax END-->
  </head>
  <body>
    <div class="container" id="contatos">
      <div class="col-md-8" style="padding: 45px 10px;">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="//www.youtube.com/embed/GBCnKN9mSgQ"></iframe>
        </div>
      </div>
      <div class="col-md-4" style="padding: 45px 10; background-color: rgba(0,0,0,.1);">
        <h4 style="font-family: 'Nixie One', cursive; font-weight: 600;">Entre em contato comigo!</h4><!--Abra sua conta na corretora <strong>XP</strong>-->
        <i class="fa fa-window-minimize" style="color: #FFC60B;"></i>
        <form class="" action="" method="post" class="form-control" id="form" action="" onsubmit="gravar(); return false;">
          <input type="text" name="nome" placeholder="Nome" class="form-control">
          <input type="text" name="email" placeholder="E-mail" class="form-control">
          <input type="text" name="telefone" placeholder="Telefone" class="form-control telefone">
          <textarea name="msg" rows="7" cols="80" class="form-control" placeholder="Escreva sua mensagem"></textarea><br>
          <button type="submit" name="comecar" class="btn btn-default" style="text-transform: uppercase; letter-spacing: 1.2; padding: 12px; background: #444; color: #FFF; box-shadow: 2px 2px 15px #666; border: 0;">enviar <i class="fa fa-paper-plane-o"></i></button>
          <!--glyphicon glyphicon-ok-->
        </form>
        <div class="load" style="display: none;" align="center">
          <br>
          <p>Enviando a mensagem...</p>
          <br>
          <img src="../images/load.gif" alt="Loading">
        </div>
        <div class="success-message w-form-done" align="center">
          <img src="../images/luis2.png" alt="Luis Outi Ok"><br><br>
          <p>Obrigado por fazer parte do meu grupo.</p><br>
          <i class="fa fa-check" aria-hidden="true" style="color: #2DCC70; font-size:26px;"></i>
        </div>
        <div class="error-message w-form-fail">
          <p>Oops! Algo deu errado, preencha todos os campos!</p>
        </div>
        <div class="error-connect w-form-fail">
          <p>Oops! Algo deu errado, verifique sua conexão ao DB!</p>
        </div>
        <div class="error-send w-form-fail">
          <p>Não foi possível enviar o e-mail!</p>
        </div>
      </div>      
    </div>
    <style media="screen">
      input[type='text']{ margin: 10px 0px;}
    </style>
  </body>
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
</html>
