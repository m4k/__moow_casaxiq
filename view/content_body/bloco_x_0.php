<div class="back1_x">
    <div class="container">
        <h4><b>curso</b> profissionalizante</h4>
        <h2>triplo <b>X</b></h2>
        <center>
            <img src="./includes/img/p3/curso_background.png" alt="" width="100%">
        <center>
        <p>Uma estrutura imcomparável, única no Brasil</p>
        <a href="/contato.php?curso=mail">Quero saber +</a>
    </div>
</div>
<div class="red_x cta_x">
    <div class="container">
        <div>
            <h4>Quero que o <b>TRIPLO X</b> me contacte quando <br>forem abertas as mátricalas do próximo curso</h4>
            <a href="#contato-triplo-x">Quero saber +</a>
        </div>
    </div>
</div>
<section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Fotos do curso</h2>
					<p>Galeria como algumas fotos tiradas durante o nosso curso</p>
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
                            define("DIR_FOTOS","./includes/img/curso/curso"); 
                            $titu = '';
                        ?>
                        <?php for ($i=1; $i < 114 ; $i++) { 
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

<div>
    <div class="content">
        <div id="map" style="height:400px;">
			<iframe width="100%" height="100%" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=Rua%20Marang%C3%A1%2C%201.068%20-%20Loja%20Pra%C3%A7a%20Seca%20-%20Jacarepagu%C3%A1%20Rio%20de%20Janeiro%20-%20RJ&key=AIzaSyCAoFi4CjDnvfQhS9LJfBt-htTJwkZuVm8" allowfullscreen></iframe>
		</div>  
    </div>
</div>
<div class="red_x cta_x" id="contato-triplo-x">
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