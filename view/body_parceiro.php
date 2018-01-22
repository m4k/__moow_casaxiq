<div class="back1_x">
    <div class="container">
        <h2>Parceiros <b style="color:#485DA0!important;">da</b></h2>
        <center>
            <img src="./includes/img/<?php echo LOGO;?>" alt="" width="100%" style="max-width: 400px!important; padding: 20px 2px 5px 2px;">
        <center>
    </div>
</div>
<section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">As marcas em <?php echo date('Y');?></h2>
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
                            define("DIR_FOTOS","./includes/img/galery/pic"); 
                            $titu = '';
                        ?>
                        <?php for ($i=1; $i < 16 ; $i++) { 
                            echo'<div class="item" style="padding: 2px;">
                                <a href="'.DIR_FOTOS.$i.'.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                    <div style="background-image: url('.DIR_FOTOS.$i.'.jpg); 
                                    background-size:cover; 
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

<div class="blue cta1">
    <div class="container">
        <div>
            <h4>Receba nossas promoções e atualizações por e-mail<br>Basta inserir abaixo.</h4>
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only">Email</label>
                    <p class="form-control-static mail"></p>
                </div>
                <div class="form-group">
                    <label for="inputText2" class="sr-only">E-mail</label>
                    <input type="text" class="form-control" id="inputText2" placeholder="E-mail">
                </div>
                <button type="submit" class="btn btn-default">Confirmar</button>
            </form>
        </div>
    </div>
</div>
<script src="./includes/js/2018/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="./includes/js/2018/owl.carousel.min.js"></script>
<script src="./includes/js/2018/nivo-lightbox.min.js"></script>
<script src="./includes/js/2018/jquery.maskedinput.js"></script>

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
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