<div class="back1_x back1_parceiros">
    <div class="pelicula2">
        <div class="container">
            <h2>Parceiros <b style="color:#485DA0!important;">da</b></h2>
            <center>
                <img src="./includes/img/<?php echo LOGO;?>" alt="" width="100%" style="max-width: 400px!important; padding: 20px 2px 5px 2px;">
            <center>
        </div>
    </div>
</div>
<section id="facilities" class="home-section paddingbot-60 parceirosBlk">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">As marcas em <b><?php echo date('Y');?></b></h2>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

        <div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                    
                        <?php
                            $testo = [
                                '1' => ['1' => 'Atual Tintas', '2' => 'https://www.facebook.com/atualtinta/'],
                                '2' => ['1' => 'Bosch', '2' => 'https://www.brasil.bosch.com.br/'],
                                '3' => ['1' => 'Flextools', '2' => 'http://flextools.com.br/'],
                                '4' => ['1' => 'Fromtech', '2' => 'https://fromtec.com.br/'],
                                '5' => ['1' => 'Loucos por Drywall', '2' => 'https://www.youtube.com/channel/UCeWLkWgC0gixlh3qHJVtfog'],
                                '6' => ['1' => 'Milenium', '2' => ''],
                                '7' => ['1' => 'Pulo do gato na construção', '2' => 'https://www.youtube.com/channel/UCd_VnBxOthLizMBQprSVx_A'],
                                '8' => ['1' => 'Studio Pedra', '2' => ''],
                                '9' => ['1' => 'Vem com ozeias', '2' => 'https://www.youtube.com/channel/UCJD2JREs-WzlaJRNfWPHLrg'],
                                '10' => ['1' => 'Vinil decor', '2' => 'http://www.vinildecor.com.br/']
                            ];
 
                            define("DIR_FOTOS","./includes/img/marcas/logo"); 
                            $titu = '';
                        ?>
                        <?php for ($i=1; $i < 11 ; $i++) { 
                            if ($testo[$i][2] != ''){
                                $page_open = 'target="_blank"';
                                $url_parce = 'href="'.$testo[$i][2].'"';
                            }else{
                                $page_open = '';
                                $url_parce = '';
                            }
                            echo'<div class="item" style="padding: 2px;">
                                <a '.$url_parce.' title="'.$testo[$i][1].'" '.$page_open.'>
                                    <div style="background-image: url('.DIR_FOTOS.$i.'.png); 
                                    background-position: center;
                                    background-size:80%;
                                    background-repeat:no-repeat; 
                                    height: 180px; 
                                    width: 100%;
                                    padding: 20px;"></div>
                                </a>
                            </div>';
						}?>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
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
        items:5,
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