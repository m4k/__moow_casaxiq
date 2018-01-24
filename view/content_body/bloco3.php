<div class="blue cta1">
    <div class="container">
        <div class="col-md-7">
            <h3>Que tal aprender uma nova profissão e ser um especialista na área?</h3>
            <p>Conheça o curso que irá mudar a sua vida, assim como mudou a minha.</p>
        </div>
        <div class="col-md-5">
            <a href="./curso-triplo-x.php">Quero conhecer</a>
        </div>
    </div>
</div>
<div class="bloco3">
    <div class="block">
        <div class="container" id="t0">
            <h2>ONDE PODE SER APLICADO?</h2>
            <center><div class="dash"></div></center>
            <p id="porcelanato">
            O piso de resina autonivelante é indicado para áreas onde se deseja um acabamento perfeitamente plano, com alto nível de qualidade e resistência. Por não possuir rejunte, o porcelanato líquido confere maior uniformidade ao ambiente, e pode ser aplicado direto no contra-piso, ardósias, pisos cerâmicos, porcelanatos etc, e SEM QUEBRA QUEBRA.
            </p>
        </div>
    </div>
</div>
<?php //include_once"./view/content_body/seme-galery.php";?>

<section id="facilities" class="home-section paddingbot-60" style="background: #f1f1f1;">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-12">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">TIPOS DE <b>PISOS</b></h2><br>
                        <p>Opções de <b>Beleza e Tendências!</b><br><br>
                        <p>
                        Fomos os Pioneiros no Brasil a estar presentes no meio de um Evento de Arquitetura, que ocorreu no Casa Shopping Barra da Tijuca, o Morar Mais por Menos, onde expusemos 5 ambientes, todos em Porcelanato Líquido e Cimento Queimado. Portanto estamos lado a lado com as novas tendências de piso decorativo para o seu ambiente, onde o Porcelanato Líquido podendo ter um acabamento de ALTO BRILHO ou FOSCO, atende a todos os gostos e projetos. O efeito final é bastante leve e sofisticado, sem contar com o fato de que a ausência de emendas evita o acúmulo de sujeiras e fungos, sendo incrivelmente fácil de limpar. Este Piso é a mais nova tendência da Construção Civil, para todos os gostos.
                        </p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <?php
        $testo = [
            '1' => '<h3>Piso Color Xiq</h3>
            Pisos Lisos feito em resina epóxi, com uma única cor, altamente brilhoso, ou FOSCO, totalmente monolítico (sem marcas de rejunte ou emendas), deixando a aparência de seu ambiente muito mais bonito e higiênico. Muito fácil a limpeza, basta um pano com água e ele fica novo de novo. 
            ',
            '2' => '<h3>Piso Revest Xiq</h3>
            É um Revestimento Especial, podendo ser a base Poliuretana ou Epóxi, para áreas internas ou externas, com um custo superacessível, que cabe no seu bolso sem perder o Requinte e o Bom Gosto. Ele pode ser de Cores Únicas Alto Brilho ou Fosco, e Metalizado. Na decoração muitos ainda não sabem que contando com soluções em Revestimento para suas residências, conseguem várias vantagens. Como preço mais acessível, ambientes monolíticos, facilidades para limpeza como NÃO acúmulo de sujeiras e fungos, variedades de composição com o ambiente e resistência ótima para uma grande durabilidade
            ',
            '3' => '<h3>Piso Pérola Xiq</h3>
            Pisos Pérola, tendência vinda da Grécia, com requinte e sutileza, seu preenchimento em qualquer ambiente é neutro, porém indispensável para aqueles que não abrem mão da beleza refinada.
            ',
            '4' => '<h3>Piso 3DX</h3>
            Pisos 3D, aqui a arte é livre ao extremo, e pode se expressar tanto com figuras, como imagens, inteligência e profundidade, uma infinidade de possibilidades. No Porcelanato Líquido 3D não há barreiras, deixe sua imaginação fluir!
            ',
            '5' => '<h3>Piso Art Xiq</h3>
            Pisos Mescla Artística, são revestimentos mais artísticos e rebuscados, demandam mais cuidado, foco, atenção e talento. São pisos verdadeiramente ÚNICOS, que não se repetem, tornando cada experiência uma assinatura no mundo.
            ',
            '6' => '<h3>Piso Superior Xiq</h3>
            Seguramente o Piso mais resistente e charmoso do Brasil, certamente é o que indicamos para que seja sua escolha, pela resistência e beleza que entrega.
            ',
            '7' => '<h3>Piso Cimento Queimado Xiq</h3>
            Pisos de Cimento Queimado, são pisos que favorecem mais o bolso, mais baratos e não perdendo o requinte virou uma febre no ramo de revestimentos.
            ',
            '8' => '<h3>Piso INDUSTRIAL +</h3>
            É um tipo de Revestimento/Pintura especial com Tintas de Alta Qualidade, Cobertura, Durabilidade e Resistência. Geralmente em grandes áreas, onde se exige Pinturas Industriais e especiais, que hoje em dia são muito concorridas, ganha quem oferece o melhor custo com uma entrega de qualidade. Por isso o equipamento de pintura Airless é fundamental, com capacidade de entrega de 8L/minuto, chega a pintar até 2.000m²/dia, com acabamento impecável. Piso feito de variadas formas em que uma delas atenderá a necessidade do cliente, podendo ser espatulado, multilayer, uretano, poliuretano, epóxi, autonivelante, cimentício, argamassado com ou sem junta de dilatação; pinturas, restauração de pisos etc.
            '
        ];
    ?>

    <div class="container" style="padding: 40px 2px;">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" >
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <?php                        
                            define("DIR_FOTOS","./includes/img/home/p"); 
                            $titu = '';
                        
                            for ($i=1; $i < 9; $i++) { 
                            echo'<div class="item" style="padding: 2px;">
                                    <a href="'.DIR_FOTOS.$i.'.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                        <div style="background-image: url('.DIR_FOTOS.$i.'.jpg); 
                                        background-size:cover; 
                                        height: 280px; 
                                        width: 100%;
                                        padding: 20px;"></div>
                                    </a>
                                    <div style="padding: 2px 8px;"><p style="padding: 2px 8px;">'.$testo[$i].'</p></div>
                            </div>';
                        }?>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>
<div class="block">
	<div class="container" id="t2">
    	<a href="./galeria.php" class="botao_cta_blue">Ver mais imagens</a>
    </div>
</div>
<div class="block">
    <div class="container pay" id="t3">
        
        <ul>
            <!--marquee  behavior="scroll" direction="left"-->
            <li><img src="./includes/img/p1/Small_size_image_transparent_Visa.png" alt=""></li>
            <li><img src="./includes/img/p1/Small_size_image_transparent_mastercard.png" alt=""></li>
            <li><img src="./includes/img/p1/Small_size_image_transparent_Elo.png" alt=""></li>
            <li><img src="./includes/img/p1/Small_size_image_transparent_Hipercard.png" alt=""></li>
            <li><img src="./includes/img/p1/Small_size_image_transparent_PicPay.png" alt=""></li>
            <li><img src="./includes/img/p1/Small_size_image_transparent_Pagseguro.png" alt=""></li>
            <!--/marquee-->
        </ul>
        
    </div>
</div>
<script type="text/javascript">
        function gravarContato() {

            var animacaotipo = 'animated bounceInDown';
            var animacaotipo1 = 'animated fadeInLeftBig';
            var animacaotipo2 = 'animated bounceOutUp';
            var animacaofim = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

            $.ajax({
                method: "post",
                url: "./new_mail/cta.php",
                /**beforeSend: function(){
                     $('#form_contato').hide();
                    $('.load2').show();
                },*/
                data: $("#form_contato").serialize(),
                success: function(data) {
                    if (data == '1') {
                        //$('.load2').hide();
                        $('#form_contato').hide();
                        $('.error-message2').hide();
                        $('.success-message2').show();
                        console.log('Ok ao enviar o e-mail');
                    }else{
                        //$('.load2').hide();
                        $('#form_contato').show();
                        $('.error-send2').addClass(animacaotipo).one(animacaofim, function(){
                            $(this).removeClass(animacaotipo);
                        }).show();
                        console.log('Erro ao enviar e-mail');
                    }
                    
                },
                error: function(data) {
                    $('#form_contato').hide();
                    $('.error-connect2').addClass(animacaotipo).one(animacaofim, function(){
                        $(this).removeClass(animacaotipo);
                    }).show();
                    console.log('Erro ao enviar e-mail');
                }

            });
        }
    </script>
<div class="blue cta1">
    <div class="container">
        <div>
            <h4>Receba nossas promoções e atualizações por e-mail<br>Basta inserir abaixo.</h4>
            <form class="form-inline" method="post" id="form_contato" action="" onsubmit="gravarContato(); return false;">
                <input type="hidden" name="sub-cta" value="site">
                <div class="form-group">
                    <label class="sr-only">Email</label>
                    <p class="form-control-static mail"></p>
                </div>
                <div class="form-group">
                    <label for="inputText2" class="sr-only">E-mail</label>
                    <input type="text" class="form-control" id="inputText2" placeholder="E-mail" name="email">
                </div>
                <button type="submit" class="btn btn-default" name="enviar">Confirmar</button>
            </form>
            <div class="success-message2 w-form-done" align="center">
                <br>
                <i class="fa fa-check" aria-hidden="true" style="color: #fff; font-size:36px;"></i>
		    </div>
        </div>
    </div>
</div>
<style>
.success-message2{
    display: none;
}
</style>
<script src="./includes/js/2018/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="./includes/js/2018/owl.carousel.min.js"></script>
<script src="./includes/js/2018/nivo-lightbox.min.js"></script>
<script src="./includes/js/2018/jquery.maskedinput.js"></script>

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:2,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:500,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[500])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>