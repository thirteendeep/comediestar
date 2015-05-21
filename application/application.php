<?php 
include($_SERVER['DOCUMENT_ROOT'].'/core/includes/app.config.php'); 
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?= $title ?></title>
    <meta name="description" content="Les Galas Comédie Star sont des spectacles d’humour mettant en vedette des humoristes de la relève, les plus grands humoristes Québecois et aussi des vedettes internationales. " />
    
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/application/css/dist/comediestar.css" />
    <!-- Open Graph -->
    <meta property="og:title" content="Comedie Star - En tournée" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://dev.comediestar.ca/" />
    <meta property="og:image" content="http://www.comediestar.ca/application/images/comediestar-sharing.png" />
    <meta property="og:description" content="Les Galas Comédie Star sont des spectacles d’humour mettant en vedette des humoristes de la relève, les plus grands humoristes Québecois et aussi des vedettes internationales. " />
    <meta property="og:site_name" content="Comédie Star" />

    <link rel="apple-touch-icon" sizes="57x57" href="/application/images/fav/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/application/images/fav/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/application/images/fav/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/application/images/fav/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/application/images/fav/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/application/images/fav/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/application/images/fav/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/application/images/fav/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/application/images/fav/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/application/images/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/application/images/fav/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/application/images/fav/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/application/images/fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="/application/js/vendor/html5shiv.js"><\/script>')</script>
            <script src="/application/js/plugins/ie-opacity-polyfill.js"></script>
            <script src="/application/js/plugins/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/layout/overlay_newsletter.php'); ?>
            <div id="site-container">
                <?php
                include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/layout/header.php');
                include($_SERVER['DOCUMENT_ROOT'].'/core/includes/app.routing.php');
                include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/layout/footer.php');
                ?>
            </div>
            <script src="/application/js/dist/comediestar.js"
            <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-45356387-1', 'auto');
            ga('send', 'pageview');

            </script>
        </body>
    </html>