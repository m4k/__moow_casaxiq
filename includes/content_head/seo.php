<?php
    define("DIR","./includes/content_head/img_icon");

    include_once"./includes/content_head/conteudo-seo.php";
    $imageShare = SEO_IMAGE;
    $decription = SEO_DESCIPTION;
    $tituloPage = SEO_TITLE;

    $url_site = array('1' => 'www.moow.com.br', '2' => 'www.casaxiq.com.br');

?>
<title>Casa XIQ</title>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo DIR;?>/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo DIR;?>/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo DIR;?>/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo DIR;?>/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo DIR;?>/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo DIR;?>/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo DIR;?>/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo DIR;?>/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo DIR;?>/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo DIR;?>/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo DIR;?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo DIR;?>/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo DIR;?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo DIR;?>/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo DIR;?>/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php /*For Share | Image Social Media*/ ?>
<meta property="og:image" content="http://<?php echo $url_site[2]; ?>/includes/img/share/<?php echo $imageShare; ?>.jpg"/>
<meta property="og:url" content="http://<?php echo $url_site[2]; ?>"/>
<meta property="og:site_name" content="<?php echo $tituloPage; ?>"/>
<meta property="og:description" content="<?php echo $decription; ?>"/>
<meta name="twitter:title" content="<?php echo $tituloPage; ?>"/>
<meta name="twitter:image" content="http://<?php echo $url_site[2]; ?>/includes/img/share/<?php echo $imageShare; ?>.jpg"/>
<meta name="twitter:description" content="<?php echo $decription; ?>"/>
<meta name="twitter:url" content="http://<?php echo $url_site[2]; ?>"/>
<meta name="twitter:card" content="summary_large_image"/>