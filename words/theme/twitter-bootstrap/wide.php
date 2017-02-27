<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      wide.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<?php include('header.inc.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
</head>
<body class="blog" id="<?php get_page_slug(); ?>">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

            <?php include('../inc/nav.php'); ?>

<section class="title">
  <div class="container">
    <img src="../assets/img/words.png" />
    <h1>Words & Such</h1>
    <p>Ramblings about Design, Code, UX, Marketing, ETC</p>
  </div>
</section>

    <section class="main-content">
        
        <?php get_page_content(); ?>

<div class="container">     

<?php include('footer.inc.php'); ?>