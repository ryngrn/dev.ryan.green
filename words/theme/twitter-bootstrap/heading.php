<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      heading.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<?php include('header.inc.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
</head>
<body id="single">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

            <?php include('../inc/nav.php'); ?>

    <div class="page-title-container">
         <div class="container">
            <h1><?php get_page_title(); ?></h1>
         </div>
       </div>

    <article class="main-content">
        <div class="container">
        <?php get_page_content(); ?>
        </div>
    </article>

<?php include('footer.inc.php'); ?>