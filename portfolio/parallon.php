<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ryan Green :: Visual Design, Search Marketing Strategy, User Experience Professional</title>
    <meta name="description" content="Ryan Green is a Nashville-based User Experience Designer, Web Designer, Visual Designer, and Marketing Specialist.">
    <meta name="author" content="">

    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
    
  </head>
  <body class="portfolio" id="parallon"> 
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/nav.php"); ?>
    <link rel="stylesheet" type="text/css" href="http://www.ryan.green/portfolio/css/default.css" />
    <link rel="stylesheet" type="text/css" href="http://www.ryan.green/portfolio/css/component.css" />
    <script src="http://www.ryan.green/portfolio/js/modernizr.custom.js"></script>

<section class="title">
  <div class="container">
     <h1>Parallon</h1>
     <p>One style to rule all of the Healthcare Revenue Cycle apps!</p>
     <p class="work-done">2013-2014. Senior Designer. UX, UI, pitched internal projects, designed marketing collateral, custom skinned Salesforce, worked with .netMVC code, and created icons and email templates.</p>
     <div class="portfolio-step-navigation">
        <a class="arrow-l" href="/portfolio/lifewallet/" title="View my work at LifeWallet">
          <?php echo file_get_contents('http://ryan.green/assets/img/portfolio/arrow-l.svg'); ?>
        </a>
        <a class="back-to-grid" href="/portfolio/" title="Back to the portfolio grid">
          <?php echo file_get_contents('http://ryan.green/assets/img/portfolio/back-to-grid.svg'); ?>
        </a>
        <a class="arrow-r" href="/portfolio/sater-design/" title="View the Sater Design project">
          <?php echo file_get_contents('http://ryan.green/assets/img/portfolio/arrow-r.svg'); ?>
        </a>
      </div> 
  </div>
  <div style="clear: both;"></div>
</section>


  <section class="projects">
    <ul class="projects-wrapper">

    <li>
          <div class="container">
        <h1 class="project-name">Internal Apps</h1>
        <p class="project-description">Parallon had close to 60 different internal apps for their different revenue cycle teams. My biggest task while at Parallon was to refine all of these apps using the same look and feel while still retaining layouts that have been optimized for productivity.</p>
        <div id="pdc" class="cbp-fwslider">
          <ul>
            <li><a href="#?"><img src="http://www.ryan.green/portfolio/img/parallon/pdc-home.png" ></a></li>
            <li><a href="#?"><img src="http://www.ryan.green/portfolio/img/parallon/pdc-create.png" ></a></li>
            <li><a href="#?"><img src="http://www.ryan.green/portfolio/img/parallon/pdc-modify.png" ></a></li>
            <li><a href="#?"><img src="http://www.ryan.green/portfolio/img/parallon/pdc-history.png" ></a></li>
          </ul>
        </div>

        <img src="http://www.ryan.green/portfolio/img/parallon/batch-net.png" style="max-width: 75%; margin-left: 12.5%; margin-bottom: 40px;" />

        <img src="http://www.ryan.green/portfolio/img/parallon/cat.png" style="max-width: 75%; margin-left: 12.5%;" />

        <div id="hsc" class="cbp-fwslider">
          <ul>
            <li><a href="#?"><img src="http://www.ryan.green/portfolio/img/parallon/hsc-1.png" ></a></li>
            <li><a href="#?"><img src="http://www.ryan.green/portfolio/img/parallon/hsc-2.png" ></a></li>
          </ul>
        </div>

        <img src="http://www.ryan.green/portfolio/img/parallon/dev-solutions-homepage.png" style="max-width: 75%; margin-left: 12.5%;" />
          </div>
        </li>
        
    <li>
          <div class="container">
        <h1 class="project-name">Icon Design</h1>
        <p class="project-description">A big point of pride for the different teams was having a custom logo created for their project to be used in Salesforce and on the distributed workstation desktops. Here's a few of the icons I designed for the various teams.</p>
        <img src="http://www.ryan.green/portfolio/img/parallon/logo-comp.png" />
          </div>
        </li>   

    <li>
          <div class="container">
        <h1 class="project-name">Skinning Enterprise Tools</h1>
        <p class="project-description">Being part of the <a href="http://hcahealthcare.com/">Hospital Corporation of America</a>, there are several enterprise tools that needed to be skinned. I worked with teams to skin both Salesforce and Microsoft Sharepoint apps for multiple teams.</p>
        <img src="http://www.ryan.green/portfolio/img/parallon/salesforce.png" />
          </div>
        </li>

     
    </ul>
  </section>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.php"); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://www.ryan.green/portfolio/js/jquery.cbpFWSlider.js"></script>
<script>$( function() {$( '#pdc' ).cbpFWSlider();} );</script>
<script>$( function() {$( '#hsc' ).cbpFWSlider();} );</script>
</body>
</html>