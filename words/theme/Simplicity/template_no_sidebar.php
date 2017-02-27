<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE HTML>
<!--
Author: Mike Henken
Author URL: http://michaelhenken.com/
Theme Adapated From: http://www.html5webtemplates.co.uk/templates/simplestyle_4/index.html
-->
<html>

<head>
  <title><?php get_page_title(); ?></title>
	<?php get_header(); ?>
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style/style.css" />
</head>

<body>
  <div id="main">
    <?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE HTML>
<html>

<head>
	<title><?php get_page_title(); ?></title>
	<?php get_header(); ?>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800' rel='stylesheet' type='text/css'>
<style>
*{font-family:"Open Sans", sans-serif; font-weight:normal;}
</style>
</head>

<body>
<div id="spinner">
	<div class="twelve-point-star"></div>
	<div class="twelve-point-star-shadow"></div>
	
	<div id="channel"></div>
</div>

			
  <div id="main">
    
	<header id="header">
      <div class="container">
		  <h1>Research Archive</h1>
          <h2><?php return_simplicity('websiteslogan'); ?></h2>
      </div>
    </header>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
         <?php get_navigation(return_page_slug()); ?>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content_large">
	<h1><?php get_page_title(); ?></h1>
        <?php 
        if(!isset($_POST['words']))
        {
            get_page_content(); 
        }
        else 
        {
            get_i18n_search_results(array($_POST['words']=>''));
        }
        ?>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        <div id="footer-inner">
            <?php return_simplicity('footer'); ?>
        </div>
    </div>
  </div>
</body>
</html>