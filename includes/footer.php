<div id="footer">
    <div class="container">
        <div class="col-md-4">
            <img src="./includes/img/<?php echo LOGO;?>" alt="">
        </div>
        <div class="col-md-4 links">
            <ul>
                <li><a href="#" class="home">Início</a></li>
                <li><a href="#">Galeria de fotos</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
        </div>
        <div class="col-md-4 redes-sociais">
            <p>Redes <b>Sociais</b></p>
            <?php include_once"./includes/social-net.php";?>
        </div>
    </div>
    <div class="container">
        <div class="col-md-8">
        	<div id="copyright">copyright casa xiq - <b><?php echo date('Y');?></b> | www.casaxiq.com.br, created by <b><a href="<?php echo $social['creator'];?>" target="_blank">MOOW</a></b></div>
        </div>
        <div></div>
    </div>
</div>