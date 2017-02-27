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


    <div id="site_content">
      <div id="sidebar_container">
	  <?php
			   $news_file = 'plugins/news_manager.php'; 
			   if(file_exists($news_file)) { 
		   ?>
        <div class="sidebar">
          <div class="sidebar_item">
            <h3>List of Topics</h3>
            <?php nm_list_recent(); ?>
		  </div>
        </div>
        <?php } ?>
        <!--<div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
              <?php return_simplicity('sidebar1'); ?>
          </div>
          <div class="sidebar_base"></div>
        </div>-->
       <?php 
           $search_file = 'plugins/i18n_search.php'; 
           if(file_exists($search_file)) { 
       ?>
        <!--<div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="index.php?id=<?php get_page_slug(); ?>" id="search_form">
              <p>
                <input class="search" type="text" name="words" value="Enter keywords....." onfocus="if(this.value == 'Enter keywords.....') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter keywords.....';}" />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="<?php get_theme_url(); ?>/style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>-->
       <?php } ?>
      </div>
      <div id="content">

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