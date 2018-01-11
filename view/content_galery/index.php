<!DOCTYPE HTML>
<!--
	Radius by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
		
		<script src="./view/content_galery/assets/js/jquery.min.js"></script>
		<script src="./view/content_galery/assets/js/main.js"></script>
		<script src="./view/content_galery/assets/js/util.js"></script>
		<script src="./view/content_galery/assets/js/skel.min.js"></script>
		<link rel="stylesheet" href="./view/content_galery/assets/css/main.css">
		<?php if (isset($_GET['piso']) and $_GET['piso'] != ''):?>
		<?php include_once"./view/content_galery/detail.php";?>
		<?php else:?>
		<!-- Header -->
			<!--header id="header">
				<div class="inner">
					<div class="content">
						<h1>Casa Xiq</h1>
						<h2>Galeria de nossos melhores trabalhos.</h2>
						<a href="#" class="button big alt"><span>Conheça</span></a>
					</div>
					<a href="#" class="button hidden"><span>Vamos lá</span></a>
				</div>
			</header-->

		<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">

						<?php for ($i=1; $i < 16 ; $i++) { 
							echo'<div class="image fit">
								<a href="#piso='.$i.'"><img src="./includes/img/galery/pic'.$i.'.jpg" alt="" /></a>
							</div>';
						}?>

					</div>
				</div>
			</div>

		<!-- Footer -->
			<!--footer id="footer">
				<a href="#" class="info fa fa-info-circle"><span>About</span></a>
				<div class="inner">
					<div class="content">
						<h3>Vestibulum hendrerit tortor id gravida</h3>
						<p>In tempor porttitor nisl non elementum. Nulla ipsum ipsum, feugiat vitae vehicula vitae, imperdiet sed risus. Fusce sed dictum neque, id auctor felis. Praesent luctus sagittis viverra. Nulla erat nibh, fermentum quis enim ac, ultrices euismod augue. Proin ligula nibh, pretium at enim eget, tempor feugiat nulla.</p>
					</div>
					<div class="copyright">
						<h3>Follow me</h3>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						</ul>
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>.
					</div>
				</div>
			</footer-->

		<?php endif;?>
