<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ryan Green :: Visual Design, Search Marketing Strategy, User Experience Professional</title>
    <meta name="description" content="Ryan Green is a Nashville-based User Experience Designer, Web Designer, Visual Designer, and Marketing Specialist.">
    <meta name="author" content="">

    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
    <style>
    .hero-grid ul{
      padding: 0;
      margin: 0;
    }
    .hero-grid li{
    	list-style-type: none;
    	width: 25%;
    	float: left;
    }
    .hero-grid li a{
    	
    	display: block;
   		cursor: crosshair;
   		position: relative;
    }
    .hero-grid li a img{
    	width: 100%;
    }

    .hero-grid li a:hover img{
    	opacity: 0.1;
    	transition: all 0.3s;
    }
    .hero-grid .categories{
      position: absolute;
      top: 70%;
      display: none;
    }
    .hero-grid .categories .category{
      display: inline-block;
      background: #696969;
      color: #fefefe;
      border-radius: 4px;
      font-size: 11px;
      text-transform: uppercase;
      padding: 3px 6px;
    }
    .hero-grid .categories .category.red{background: #D93025;}
    .hero-grid .categories .category.blue{background: #267ED3;}
    .hero-grid .categories .category.green{background: #1A7B55;}
    .hero-grid .categories .category.lt-green{background: #ABFF84; color: #333;}
    .hero-grid .categories .category.pink{background: #EC7F7A;}
    .hero-grid .categories .category.purple{background: #7358D9;}

    .closeBtn{
    	position: fixed;
    	top: 20px;
    	right: 20px;
    	cursor: pointer;
      transition: all .5s;
    }
    .closeBtn:hover{
      transform: scale(2);
    }
    .hero-name{
    	display: none;
    	font-size: 40px;
    	font-weight: bold;
    	letter-spacing: -0.5px;
    }
    .hero-grid li a:hover .hero-name{
    	display: block;
    	position: absolute;
    	width: 100%;
    	top: 20%;
    	text-align: center;
    }
    .hero-grid li a:hover .categories{
      display: block;
      width: 100%;
      text-align: center;
    }
    .hwork{
    	width: 120%;
    	margin-left: -10%;
    }
    .overlay{
    	padding: 5% 10% 0;
    	font-size: 24px;
      position: fixed;
      top: 0;
      background: white;
      height: 100%;
      overflow: scroll;
    }
    .overlay h1, .overlay h2{
    	text-align: center;
    }
    .overlay h1{
    	font-size: 3em;
    	font-weight: 800;
    	letter-spacing: -.05em;
    }
    .overlay h2{
    	font-size: 14px;
    	font-weight: 300;
    	margin-bottom: 40px;
    }
    </style>
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
           data-category="Product" 
           data-link="dieter-rams">
        <img src="http://www.ryngrn.com/assets/img/heroes/dieter-rams-square.jpg" />
        <span class="hero-name">Dieter Rams</span>
        <div class="categories">
          <div class="category lt-green">Product</div>
        </div>
        </a></li>
		<li><a data-description="<p>Aaron rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-category="Graphic" 
           data-link="aaron-draplin">
        <img src="http://www.ryngrn.com/assets/img/heroes/aaron-draplin-square.jpg" />
        <span class="hero-name">Aaron Draplin</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
		<li><a data-description="<p>Saul rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-category="Graphic" 
           data-link="saul-bass">
        <img src="http://www.ryngrn.com/assets/img/heroes/saul-bass-square.jpg" />
        <span class="hero-name">Saul Bass</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
    <li><a data-description="<p>Paul rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-category="Graphic" 
           data-link="paul-rand">
        <img src="http://www.ryngrn.com/assets/img/heroes/paul-rand-square.jpg" />
        <span class="hero-name">Paul Rand</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>

    <li><a data-description="<p>Alan rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-category="Graphic" 
           data-link="alan-fletcher">
        <img src="http://www.ryngrn.com/assets/img/heroes/alan-fletcher-square.jpg" />
        <span class="hero-name">Alan Fletcher</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
    <li><a data-description="<p>C &amp; G rocks.</p>" 
           data-subtitle="1932 - present  +  1931 - present" 
           data-category="Graphic" 
           data-link="chermayeff-and-geismar">
        <img src="http://www.ryngrn.com/assets/img/heroes/chermayeff-and-geismar-square.jpg" />
        <span class="hero-name">Chermayeff / Geismar</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
    <li><a data-description="<p>Shigeo rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-category="Graphic" 
           data-link="shigeo-fukuda">           
        <img src="http://www.ryngrn.com/assets/img/heroes/shigeo-fukuda-square.jpg" />
        <span class="hero-name">Shigeo Fukuda</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
    <li><a data-description="<p>Ladislav rocks.</p>" 
           data-subtitle="Month 00, 1900 - Month 00, 1900" 
           data-category="Graphic" 
           data-link="ladislav-sutnar">
        <img src="http://www.ryngrn.com/assets/img/heroes/ladislav-sutnar-square.jpg" />
        <span class="hero-name">Ladislav Sutnar</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
    
    <li><a data-description="<p>Combining the culture of the 50s-60s with groundbreaking visual techniques, his title sequences have inspired generations of people.</p>" 
           data-subtitle="1925 - 1970" 
           data-category="Graphic" 
           data-link="robert-brownjohn">
        <img src="http://www.ryngrn.com/assets/img/heroes/robert-brownjohn-square.jpg" />
        <span class="hero-name">Robert Brownjohn</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
    <li><a data-description="<p>So everyone learns about him in design school as &quot;the guy that created the I Heart NY logo&quot; ...however that's far from his best work in my opinion. Comparing the raw amount of branding work [http://www.miltonglaser.com/the-work/] [http://www.moma.org/collection/artist.php?artist_id=2188]coming out of his offices with the staggering client list really impressed me when I first found out about him.</p>
             <p>Other than brand marks, my favorite Milton pieces are the posters and magazine covers that have a sense of humor while still conveying a dense amount of information in a clear, relatable way.</p>
             <p>I'd be lying if I said all of the work is &quot;timeless&quot; and looks like something produced today, but being evocative of an era is a quality which makes the work that much more memorable. Push Pin Studios defined an era of visual design thought and never apologized. That's not to say that many pieces aren't still relevant; Brand marks like New York Magazine, SVA Theatre, Asylum Records, Brooklyn Brewery, Gary Corner Youth Center, and Elektra Records have all withstood the test of time.</p>
             <p>Milton inspires me to spend just a little bit more time thinking about the solution and to not be afraid of putting work out there that's unabashedly &quot;now&quot;.</p>" 
           data-subtitle="June 26, 1929 - Present" 
           data-category="Graphic" 
           data-link="milton-glaser">
        <img src="http://www.ryngrn.com/assets/img/heroes/milton-glaser-square.jpg" />
        <span class="hero-name">Milton Glaser</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
    <li><a data-description="<p>For her contributuions to the original GUI for Apple, Susan is essentially the founder of icon design for screen.</p>" 
           data-subtitle="1954 - present" 
           data-category="Graphic &amp; Interface" 
           data-link="susan-kare">
        <img src="http://www.ryngrn.com/assets/img/heroes/susan-kare-square.jpg" />
        <span class="hero-name">Susan Kare</span>
        <div class="categories">
          <div class="category red">Graphic</div>
          <div class="category blue">Interface</div>
        </div>
        </a></li>
    <li><a data-description="<p>Stefan is a whirlwind idealist. Every time I see him speak, I get rejuvinated.</p>" 
           data-subtitle="1962 - present" 
           data-category="Graphic &amp; Interface &amp; Multimedia" 
           data-link="stefan-sagmeister">
        <img src="http://www.ryngrn.com/assets/img/heroes/stefan-sagmeister-square.jpg" />
        <span class="hero-name">Stefan Sagmeister</span>
        <div class="categories">
          <div class="category red">Graphic</div>
          <div class="category blue">Interface</div>
          <div class="category green">Multimedia</div>
        </div>
        </a></li>

    <li><a data-description="<p>Israili designer Noma Bar is the king of negative space.</p>" 
           data-subtitle="1973 - present" 
           data-category="Graphic" 
           data-link="noma-bar">
        <img src="http://www.ryngrn.com/assets/img/heroes/noma-bar-square.jpg" />
        <span class="hero-name">Noma Bar</span>
        <div class="categories">
          <div class="category red">Graphic</div>
        </div>
        </a></li>
	</ul>
  </section>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.php"); ?>
<script>


 $(document).on('click','.hero-grid a', function() {
    var fadeItDude = $('<div class=overlay><header></header><a class=closeBtn>X</a></div>').hide().fadeIn(500);    
    $("body").append(fadeItDude);
    $("#topbar").hide();
    $(".overlay header").prepend("<h1>" + $( this ).text() + "</h1><h2>" + $(this).attr("data-subtitle") + "</h2>");
    //$(".overlay").css('background','url(http://www.ryngrn.com/assets/img/heroes/' + $(this).attr("data-link") + '.jpg) no-repeat 50% 160px #f1f1f1');
    $(".overlay").append('<img class="hwork" src="http://www.ryngrn.com/assets/img/heroes/' + $(this).attr("data-link") + '.jpg" />');
    $(".overlay").append("<section class=main-content>" + $(this).attr("data-description") + "</section>");
    $(window).scrollTop(0);
    var targetLoc= $(this).attr("data-link");
    if (history && history.pushState){
     history.pushState(null, null, targetLoc);
    }
    return false;
  });

  $(document).on('click','.closeBtn', function(){
    $(".overlay").hide(300);    
    $(".overlay").remove();
    var url = window.location.href;
    var regex = new RegExp('/[^/]*$');
    var newUrl = url.replace(regex, '/');
    history.pushState('', document.title, newUrl);
    $("#topbar").show();
    $("body").css('overflow','visible');
    return false;
  }); 



</script>

</body>
</html>