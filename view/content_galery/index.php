<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <link rel="stylesheet" type="text/css" href="./view/content_galery/css/style.css"/>
		<script src="./view/content_galery/js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="./view/content_galery/css/noJS.css"/></noscript>
    </head>
    <body>
        <div class="gallery_ok container" id="fotos">
		
			
			
			<div class="main">
				<header class="clearfix">
				
					<h1>Galeria<span>Fotos de nossos trabalhos</span></h1>

					<div class="support-note">
						<span class="note-ie">Sorry, only modern browsers.</span>
					</div>
					
				</header>
				<?php 
					define("DIR_FOTOS","./includes/img/galery/gallery"); 
					$titu = '';
				?>
				<div class="gamma-container gamma-loading" id="gamma-container">

					<ul class="gamma-gallery">
						<?php for ($i=1; $i < 29 ; $i++) { 
							echo'<li>
								<div data-alt="'.$titu.$i.'" data-description="<h3>'.$titu.$i.'</h3>" data-max-width="1800" data-max-height="1350">
									<div data-src="'.DIR_FOTOS.$i.'.jpg" data-min-width="1300"></div>
									<div data-src="'.DIR_FOTOS.$i.'.jpg" data-min-width="1000"></div>
									<div data-src="'.DIR_FOTOS.$i.'.jpg" data-min-width="700"></div>
									<div data-src="'.DIR_FOTOS.$i.'.jpg" data-min-width="300"></div>
									<div data-src="'.DIR_FOTOS.$i.'.jpg" data-min-width="200"></div>
									<div data-src="'.DIR_FOTOS.$i.'.jpg" data-min-width="140"></div>
									<div data-src="'.DIR_FOTOS.$i.'.jpg"></div>
									<noscript>
										<img src="'.DIR_FOTOS.$i.'.jpg" alt="Galeria"/>
									</noscript>
								</div>
							</li>';
						}?>
						
						
					</ul>

					<div class="gamma-overlay"></div>

				</div>

			</div>
		</div>
		
		<div class="blue cta1">
			<div class="container">
				<div>
					<h4 style="text-align: center;">(21) 3172-0700, de seg. à sex, das 09:00 às 18:00</h4>
					<p style="text-align:center;font-size: 18px;padding: 20px 2px;">Outros contatos <br><b>(21) 3017-1419</b> ou <b>Celular (21) 99006-1001</b><br>
					e-mail: comercial@casaxiq.com.br</p>
					<p style="text-align:center;">Rua Marangá, 1.068 - Loja
		Praça Seca - Jacarepaguá
		Rio de Janeiro - RJ</p>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="./view/content_galery/js/jquery.masonry.min.js"></script>
		<script src="./view/content_galery/js/jquery.history.js"></script>
		<script src="./view/content_galery/js/js-url.min.js"></script>
		<script src="./view/content_galery/js/jquerypp.custom.js"></script>
		<script src="./view/content_galery/js/gamma.js"></script>
		<script type="text/javascript">
			
			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):
				function more_img(){
					$('#more_img').show();
				}

				var page = 0,
					items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']

				function fncallback() {

					/*$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {
							
							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );*/

				}

			});

		</script>	
	</body>
</html>
