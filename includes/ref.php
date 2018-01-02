<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php
    include_once"./includes/content_head/seo.php";
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./includes/js/xxxxxxxxx.js"></script>
<link rel="stylesheet" href="./includes/css/estilo.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" 
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <!-- or -->
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
<?php 
  if (($_SERVER['REMOTE_ADDR'] == '127.0.0.1') or ($_SERVER['REMOTE_ADDR'] == '::1')) {
    $base = './';
  }else{
    $base = './';
}
  define("URL_BASE", $base);
  define("DIR_HEADER","./includes/header/");
  define("DIR_BOBY","./includes/");
  define("LOGO","logo.png");

  $iphone     = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
  $ipad       = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
  $android    = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
  $palmpre    = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
  $berry      = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
  $ipod       = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
  $symbian    = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
?> 
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/xxxxxxxxxxxx/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->