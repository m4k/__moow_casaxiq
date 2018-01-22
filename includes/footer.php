<div id="footer">
    <div class="container">
        <div class="col-md-4">
            <img src="./includes/img/<?php echo LOGO;?>" alt="" style="max-width:280px;">
        </div>
        <div class="col-sm-12 col-md-4 links">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><a href="<?php echo URL_BASE; ?>" class="home">Início</a></li>
                        <li><a href="<?php echo URL_BASE; ?>/curso-triplo-x.php">Curso <b>Triplo X</b></a></li>
                        <li><a href="<?php echo URL_BASE; ?>/galeria.php">Galeria de fotos</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                <ul>
                <li><a href="<?php echo URL_BASE; ?>/parceiros.php">Parceiros</a></li>
                <li><a href="<?php echo URL_BASE; ?>/contato.php">Contatos</a></li>
            </ul>
                </div>
            </div>
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
<script src="./includes/js/chat.js"></script>