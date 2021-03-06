<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="./includes/content_head/img_icon/favicon.ico" />
<?php
    include_once"./includes/content_head/seo.php";
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js"></script>
<script src="./includes/js/galery.js"></script>
<script src="./includes/js/assets/vendors/highlight.js"></script>
<script src="./includes/js/assets/js/app.js"></script>

<!---->

<link rel="stylesheet" href="./includes/css/estilo.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" 
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
<!--14-2018-->
<link href="./includes/css/animate.css" rel="stylesheet" />
<link href="./includes/css/nivo-lightbox.css" rel="stylesheet" />
<link href="./includes/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
<link href="./includes/css/owl.carousel.css" rel="stylesheet" media="screen" />
<link href="./includes/css/owl.theme.css" rel="stylesheet" media="screen" />
  <!-- or -->
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">

<?php 
  if (($_SERVER['REMOTE_ADDR'] == '127.0.0.1') or ($_SERVER['REMOTE_ADDR'] == '::1')) {
    $base = './';
  }else{    
    $base = 'http://casaxiq.com.br';
  }
  define("URL_BASE", $base);
  define("DIR_HEADER","./includes/header/");
  define("DIR_BOBY","./includes/");
  define("LOGO","logo_nova_casaxiq.png");

  /* Social */
  $social = array(
    'f' => 'casaxiq', 
    'i' => 'casaxiq', 
    'in' => 'casaxiq-revestimentos-especiais-298a09154', 
    't' => 'casa_xiq', 
    'w' => '4hcg0TZwVh66pIsnKf5PFm',
    'creator' => 'https://moow.com.br' 
  ); 

  $iphone     = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
  $ipad       = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
  $android    = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
  $palmpre    = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
  $berry      = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
  $ipod       = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
  $symbian    = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
?> 