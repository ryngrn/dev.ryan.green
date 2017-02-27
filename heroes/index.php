<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ryan Green :: Visual Design, Search Marketing Strategy, User Experience Professional</title>
    <meta name="description" content="Ryan Green is a Nashville-based User Experience Designer, Web Designer, Visual Designer, and Marketing Specialist.">
    <meta name="author" content="">

    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
    
  </head>
  <body class="hero"> 
              <?php include($_SERVER['DOCUMENT_ROOT']."/inc/nav.php"); ?>

  
<section class="title">
  <div class="container">
    <img src="../assets/img/heroes.png" />
	<h1>Design Heroes</h1>
	<p>Great humans that inspire me every day to up my game.</p>
  </div>
  <div style="clear: both;"></div>
</section>


  <section class="hero-grid">
  	<ul>
  	<li><a data-description="<p>Dieter rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="dieter-rams">
        <img src="http://www.ryngrn.com/assets/img/heroes/dieter-rams-square.jpg" />
        Dieter Rams</a></li>
		<li><a data-description="<p>Aaron rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="aaron-draplin">
        <img src="http://www.ryngrn.com/assets/img/heroes/aaron-draplin-square.jpg" />
        Aaron Draplin</a></li>
		<li><a data-description="<p>Saul rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="saul-bass">
        <img src="http://www.ryngrn.com/assets/img/heroes/saul-bass-square.jpg" />
        Saul Bass</a></li>
    <li><a data-description="<p>Paul rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="paul-rand">
        <img src="http://www.ryngrn.com/assets/img/heroes/paul-rand-square.jpg" />
        Paul Rand</a></li>

    <li><a data-description="<p>Alan rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="alan-fletcher">
        <img src="http://www.ryngrn.com/assets/img/heroes/alan-fletcher-square.jpg" />
        Alan Fletcher</a></li>
    <li><a data-description="<p>C &amp; G rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="chermayeff-and-geismar">
        <img src="http://www.ryngrn.com/assets/img/heroes/chermayeff-and-geismar-square.jpg" />
        Chermayeff / Geismar</a></li>
    <li><a data-description="<p>Shigeo rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="shigeo-fukuda">
        <img src="http://www.ryngrn.com/assets/img/heroes/shigeo-fukuda-square.jpg" />
        Shigeo Fukuda</a></li>
    <li><a data-description="<p>Ladislav rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="ladislav-sutnar">
        <img src="http://www.ryngrn.com/assets/img/heroes/ladislav-sutnar-square.jpg" />
        Ladislav Sutnar</a></li>
    
    <li><a data-description="<p>Robert rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="robert-brownjohn">
        <img src="http://www.ryngrn.com/assets/img/heroes/robert-brownjohn-square.jpg" />
        Robert Brownjohn</a></li>
    <li><a data-description="<p>So everyone learns about him in design school as &quot;the guy that created the I Heart NY logo&quot; ...however that's far from his best work in my opinion. Comparing the raw amount of branding work [http://www.miltonglaser.com/the-work/] [http://www.moma.org/collection/artist.php?artist_id=2188]coming out of his offices with the staggering client list really impressed me when I first found out about him.</p>
             <p>Other than brand marks, my favorite Milton pieces are the posters and magazine covers that have a sense of humor while still conveying a dense amount of information in a clear, relatable way.</p>
             <p>I'd be lying if I said all of the work is &quot;timeless&quot; and looks like something produced today, but being evocative of an era is a quality which makes the work that much more memorable. Push Pin Studios defined an era of visual design thought and never apologized. That's not to say that many pieces aren't still relevant; Brand marks like New York Magazine, SVA Theatre, Asylum Records, Brooklyn Brewery, Gary Corner Youth Center, and Elektra Records have all withstood the test of time.</p>
             <p>Milton inspires me to spend just a little bit more time thinking about the solution and to not be afraid of putting work out there that's unabashedly &quot;now&quot;.</p>" 
           data-subtitle="June 26, 1929 - Present" 
           data-link="milton-glaser">
        <img src="http://www.ryngrn.com/assets/img/heroes/milton-glaser-square.jpg" />
        Milton Glaser</a></li>
    <li><a data-description="<p>Susan rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="susan-kare">
        <img src="http://www.ryngrn.com/assets/img/heroes/susan-kare-square.jpg" />
        Susan Kare</a></li>
    <li><a data-description="<p>Stefan rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="stefan-sagmeister">
        <img src="http://www.ryngrn.com/assets/img/heroes/stefan-sagmeister-square.jpg" />
        Stefan Sagmeister</a></li>

    <li><a data-description="<p>Noma rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-link="noma-bar">
        <img src="http://www.ryngrn.com/assets/img/heroes/noma-bar-square.jpg" />
        Noma Bar</a></li>
	</ul>
  </section>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.php"); ?>
<script>
jQuery(".hero-grid a").fitText();

 $(document).on('click','.hero-grid a', function() {
    $("body *").fadeOut();
    $('#topbar').removeClass('stuck');
    $("body").append("<div class=overlay><header></header><a class=closeBtn>X</a></div>");
    $(".overlay header").prepend("<h1>" + $( this ).text() + "</h1><h2>" + $(this).attr("data-subtitle") + "</h2>");
    //$(".overlay").css('background','url(http://www.ryngrn.com/assets/img/heroes/' + $(this).attr("data-link") + '.jpg) no-repeat 50% 160px #f1f1f1');
    $(".overlay").append('<img class="hwork" src="http://www.ryngrn.com/assets/img/heroes/' + $(this).attr("data-link") + '.jpg" />');
    $(".overlay").append("<section class=main-content>" + $(this).attr("data-description") + "</section>");
    $(window).scrollTop(0);
    return false;
  });

  $(document).on('click','.closeBtn', function(){
    $(".overlay").remove();
    $("body *").fadeIn();
    $("body").css('overflow','visible');
    return false;
  });

</script>

</body>
</html>