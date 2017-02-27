<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ryan Green :: Visual Design, Search Marketing Strategy, User Experience Professional</title>
    <meta name="description" content="Ryan Green is a Miami-based User Experience Designer, Web Designer, Visual Designer, and Marketing Specialist.">
      <?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body  class="portfolio clearfix">
      <?php include($_SERVER['DOCUMENT_ROOT']."/inc/nav.php"); ?>
  
      <section class="title">
        <div class="container">
        <h1>Case Studies</h1>
        <p>Pixels. Code. Wireframes. Design Thinking.</p>

        </div>
        <div style="clear: both;"></div>
      </section>

			<div class="main">
				<!-- Thanks for the great grid idea, Codrops! <3 Ryan -->
				<ul class="cbp-ig-grid">
					<li id="grid-bgs">
						<a href="/portfolio/brightgauge-software/">
              <?php echo file_get_contents('http://ryan.green/assets/img/portfolio/bgs-logo.svg'); ?>
							<h3 class="cbp-ig-title">BrightGauge</h3>
							<span class="cbp-ig-category">Dashboards &amp; Data Vis</span>
						</a>
					</li>
					<li id="grid-lw">
						<a href="/portfolio/lifewallet/">
              				<?php echo file_get_contents('http://ryan.green/assets/img/portfolio/lifewallet-logo.svg'); ?>
							<h3 class="cbp-ig-title">LifeWallet</h3>
							<span class="cbp-ig-category">Healthcare &amp; Insurance</span>
						</a>
					</li>
					<li id="grid-parallon">
            			<a href="/portfolio/parallon/">
              				<?php echo file_get_contents('http://ryan.green/assets/img/portfolio/parallon-logo.svg'); ?>
							<h3 class="cbp-ig-title">Parallon</h3>
							<span class="cbp-ig-category">Revenue Cycle Software</span>
						</a>
					</li>
					<li id="grid-sater">
						<a href="/portfolio/sater-design/">
							<?php echo file_get_contents('http://ryan.green/assets/img/portfolio/sater-logo.svg'); ?>
							<h3 class="cbp-ig-title">Sater Design</h3>
							<span class="cbp-ig-category">Custom Home Plans</span>
						</a>
					</li>
					<li id="grid-ff">
						<a href="/portfolio/fantasy-fundraising/">
							<?php echo file_get_contents('http://ryan.green/assets/img/portfolio/ff-logo.svg'); ?>
							<h3 class="cbp-ig-title">Fantasy Fundraising</h3>
							<span class="cbp-ig-category">Fantasy Football for Charity</span>
						</a>
					</li>
					<li id="grid-older">
						<a href="/portfolio/older-work/">
							<?php echo file_get_contents('http://ryan.green/assets/img/portfolio/calendar.svg'); ?>
							<h3 class="cbp-ig-title">Older Work</h3>
							<span class="cbp-ig-category">Various Items</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</body>
</html>
