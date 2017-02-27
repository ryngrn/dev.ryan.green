<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ryan Green :: Visual Design, Search Marketing Strategy, User Experience Professional</title>
    <meta name="description" content="Ryan Green is a Nashville-based User Experience Designer, Web Designer, Visual Designer, and Marketing Specialist.">
    <meta name="author" content="">

    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
    <link rel="stylesheet" type="text/css" href="http://www.ryan.green/portfolio/css/default.css" />
    <link rel="stylesheet" type="text/css" href="http://www.ryan.green/portfolio/css/component.css" />
    <script src="http://www.ryan.green/portfolio/js/modernizr.custom.js"></script>

  </head>
  <body class="portfolio" id="older"> 
              <?php include($_SERVER['DOCUMENT_ROOT']."/inc/nav.php"); ?>

  
<section class="title">
  <div class="container">
	   <h1>Older Projects</h1>
	   <p>Work done in 2013 or before!</p>
     <div class="portfolio-step-navigation">
        <a class="arrow-l" href="/portfolio/fantasy-fundraising/" title="View the Fantasy Fundraising project">
          <?php echo file_get_contents('http://ryan.green/assets/img/portfolio/arrow-l.svg'); ?>
        </a>
        <a class="back-to-grid" href="/portfolio/" title="Back to the portfolio grid">
          <?php echo file_get_contents('http://ryan.green/assets/img/portfolio/back-to-grid.svg'); ?>
        </a>
        <a class="arrow-r hidden" href="#">
          <?php echo file_get_contents('http://ryan.green/assets/img/portfolio/arrow-r.svg'); ?>
        </a>
      </div>
  </div>
  <div style="clear: both;"></div>
</section>


  <section class="projects">
  	<ul class="projects-wrapper">
  	<li data-link="dr-gaw">
        	<div class="container">
        <h1 class="project-name">Dr. Richard Gaw, DDS</h1>
        <p class="project-description">Completed designs for a Nashville-area dentist, looking to take his dark, dated website and update it to be focused more on his family practice and the warm personalities of both the dentist and his staff.</p>
        <img src="http://www.ryan.green/assets/img/portfolio/gaw-big.png" />
        	</div>
        </li>
        
    <li id="medicare">
        	<div class="container">
        <h1 class="project-name">Medicare.com</h1>
        <p class="project-description">Healthcare services provider Medicare.com needed help connecting users with the information they needed on their site. Created two alternate upper homepage layouts. Also designed several direct-response landing pages.</p>
        
        <div id="medicare" class="cbp-fwslider">
          <ul>
            <li><a href="#?"><img src="http://ryan.green/assets/img/portfolio/medicare-big.png" ></a></li>
            <li><a href="#?"><img src="http://ryan.green/assets/img/portfolio/medicare-alt.png" ></a></li>
            <li><a href="#?"><img src="http://ryan.green/assets/img/portfolio/medicare-landing.png" ></a></li>
          </ul>
        </div>
      
        	</div>
        </li>

    <li data-link="sanderson-mcleod">        
        	<div class="container">
        <h1 class="project-name">Sanderson Mcleod</h1>
        <p class="project-description">Completed logo tweaks and website design for an executive recruitment company that serves both the high-tech and healthcare industries.</p>
        <img src="http://ryan.green/assets/img/portfolio/sanderson-big.png" />
        	</div>
        </li>
        
    <li data-link="hear-nashville">
        	<div class="container">
        <h1 class="project-name">HEAR Nashville</h1>
        <p class="project-description">Completed site build for a Middle Tennessee non-profit that provides financial assistance to patients with hearing loss who are in need of hearing aids.</p>
        <img src="http://ryan.green/assets/img/portfolio/hear-big.png" />
        	</div>
        </li>
        
    <li data-link="ryandrea">
        	<div class="container">
        <h1 class="project-name">Ryan Marries Andrea</h1>
        <p class="project-description">Designed and coded the complete branding treatment for my wedding on May 18, 2013, including all print and digital collateral.</p>
        <img src="http://ryan.green/assets/img/portfolio/ryandrea-big.png" />
        	</div>
        </li>
        
   


   	</ul>
  </section>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.php"); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://www.ryan.green/portfolio/js/jquery.cbpFWSlider.js"></script>
<script>$( function() {$( '#medicare' ).cbpFWSlider();} );</script>
</body>
</html>