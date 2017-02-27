<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ryan Green :: Visual Design, Search Marketing Strategy, User Experience Professional</title>
    <meta name="description" content="Ryan Green is a Nashville-based User Experience Designer, Web Designer, Visual Designer, and Marketing Specialist.">
    <meta name="author" content="">

    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
    
    <!-- interactive map files -->
	<link href="http://www.ryngrn.com/county-seats/css/ammap.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo($_SERVER['HTTP_ROOT']);?>/county-seats/js/ammap.js"></script>
    <script type="text/javascript" src="<?php echo($_SERVER['HTTP_ROOT']);?>/county-seats/js/maps/TN_counties.js"></script>
    <script type="text/javascript" src="<?php echo($_SERVER['HTTP_ROOT']);?>/county-seats/js/config.js"></script>
    
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/analytics.php"); ?>
  </head>
  <body class="cs"> 
              <?php include($_SERVER['DOCUMENT_ROOT']."/inc/nav.php"); ?>

  
<section class="title">
  <div class="container">
    <img src="../assets/img/county-seats.png" />
	<h1>County Seat Project</h1>
	<p>Exploring all 95 Counties in Tennessee</p>
  </div>
  <div style="clear: both:"></div>
</section>

<section class="tn-map">
  <div class="container">
    <h2>I've Visited 90 Counties So Far</h2>
	<div id="mapdiv" style="height: 200px;"></div>
  </div>
  <div style="clear: both:"></div>
</section>


  <div class="container">
	<article>
	

        
	<p>I'm not that great at math, but I love learning statistics. One of my favorites is that the state of Tennessee has 95 counties, spread across 3 distinct regions (East, Middle, West) and two time zones (EST & CST). </p>

	<p>Growing up in rural, lower-middle Tennessee (town pop. of 30,000), you get used to hearing about the bigger cities, like Nashville, Knoxville, Memphis, Chattanooga, Franklin, Murfreesboro, and Clarksville. It's easy to remember the basic counties around you and the ones of the metropolitan areas, but who cares about the other counties or even knows what's out there?</p> 

	<p>I've heard all the different middle Tennessee county names spoken aloud during the winter months when school closings were read in alphabetical order. The funny thing is, I've never really had context as to where these counties were or what happened in them until 2012. I came to the realization that I didn't really know much about the region I lived and that 99.99% of Tennesseeans have never seen ALL the counties in Tennessee, let alone been to all the county seats. </p>

	<p>This drove me to start exploring, starting with all the counties surrounding Davidson County, then to the counties that surrounded those. Once I got these easier counties scratched off the list, I decided to plan a day-trip to knock off all the counties in north-eastern middle Tennessee. In this trip, I went up I40 and saw Carthage, LaFayette, Gainesboro, Celina, Livingston, Byrdstown, and Jamestown before the 2 hour drive back to Nashville. After seeing these towns, I know I want to be one of the 0.01% that has been to every county seat in Tennessee.</p>

	<p>Every county seat I go to opens my eyes more to history and more to the human condition and the fact that most of America, by definition, is rural. The way of life for those in these rural counties is completely different than what I am used to. For example, Pickett County has a total population of around 5,000 people. Less than 1,000 live in the county seat of Byrdstown. When I drove to the "town square" I thought that I had made a wrong turn or missed the courthouse. Instead, what I mistook to be a small county church was their courthouse & the desolation of the area became very apparent.</p>

	<p>Being young and living in a metropolitan area can disillusion you to think that everyone deserves to have a 3,000 sqft house, have multiple nice cars, and make enough money to have whatever you want (and lots of stuff you don't care about) and send your children to college without crisis. My 'County Seat' project fulfills multiple needs: the urge to explore, the want to connect with my family history in Tennessee, but most important it gives me perspective on life and hardship and how privelidged I am to have the opportunity to succeed. </p>

	<p>To the right are the county seats I've been to so far in alphabetical order by county. Follow my progress!</p>
  </article>
  <aside>
  	<h2>There's only 5 counties to go!</h2>
  	<div id="listdiv"><div class="ammapObjectList">
	<ol>
		<li>Franklin County</li>
		<li>Grundy County</li>
		<li>Marion County</li>
		<li>Sequatchie County</li>
		<li>Warren County</li>
	</ol>
</div></div>  
  </aside>
</div>
<script>
$(document).ready(function(){

function scroll () {
  if ($(window).scrollTop() >= 500) {
    $('#topbar').addClass('stuck');
  } else {
    $('#topbar').removeClass('stuck');
  }  
  
  
}

document.onscroll = scroll;


});
</script>

<script>
// Responsive Nav

!function(){"use strict";var a=function(a,b){var c=!!window.getComputedStyle;c||(window.getComputedStyle=function(a){return this.el=a,this.getPropertyValue=function(b){var c=/(\-([a-z]){1})/g;return"float"===b&&(b="styleFloat"),c.test(b)&&(b=b.replace(c,function(){return arguments[2].toUpperCase()})),a.currentStyle[b]?a.currentStyle[b]:null},this});var d,e,f,g,h,i=function(a,b,c,d){if("addEventListener"in a)try{a.addEventListener(b,c,d)}catch(e){if("object"!=typeof c||!c.handleEvent)throw e;a.addEventListener(b,function(a){c.handleEvent.call(c,a)},d)}else"attachEvent"in a&&("object"==typeof c&&c.handleEvent?a.attachEvent("on"+b,function(){c.handleEvent.call(c)}):a.attachEvent("on"+b,c))},j=function(a,b,c,d){if("removeEventListener"in a)try{a.removeEventListener(b,c,d)}catch(e){if("object"!=typeof c||!c.handleEvent)throw e;a.removeEventListener(b,function(a){c.handleEvent.call(c,a)},d)}else"detachEvent"in a&&("object"==typeof c&&c.handleEvent?a.detachEvent("on"+b,function(){c.handleEvent.call(c)}):a.detachEvent("on"+b,c))},k=function(a){if(a.children.length<1)throw new Error("The Nav container has no containing elements");for(var b=[],c=0;c<a.children.length;c++)1===a.children[c].nodeType&&b.push(a.children[c]);return b},l=function(a,b){for(var c in b)a.setAttribute(c,b[c])},m=function(a,b){0!==a.className.indexOf(b)&&(a.className+=" "+b,a.className=a.className.replace(/(^\s*)|(\s*$)/g,""))},n=function(a,b){var c=new RegExp("(\\s|^)"+b+"(\\s|$)");a.className=a.className.replace(c," ").replace(/(^\s*)|(\s*$)/g,"")},o=document.createElement("style"),p=function(a,b){var c;this.options={animate:!0,transition:250,label:"Menu",insert:"after",customToggle:"",openPos:"relative",jsClass:"js",init:function(){},open:function(){},close:function(){}};for(c in b)this.options[c]=b[c];if(m(document.documentElement,this.options.jsClass),this.wrapperEl=a.replace("#",""),document.getElementById(this.wrapperEl))this.wrapper=document.getElementById(this.wrapperEl);else{if(!document.querySelector(this.wrapperEl))throw new Error("The nav element you are trying to select doesn't exist");this.wrapper=document.querySelector(this.wrapperEl)}this.wrapper.inner=k(this.wrapper),e=this.options,d=this.wrapper,this._init(this)};return p.prototype={destroy:function(){this._removeStyles(),n(d,"closed"),n(d,"opened"),n(d,"nav-collapse"),d.removeAttribute("style"),d.removeAttribute("aria-hidden"),d=null,j(window,"resize",this,!1),j(document.body,"touchmove",this,!1),j(f,"touchstart",this,!1),j(f,"touchend",this,!1),j(f,"mouseup",this,!1),j(f,"keyup",this,!1),j(f,"click",this,!1),e.customToggle?f.removeAttribute("aria-hidden"):f.parentNode.removeChild(f)},toggle:function(){g===!0&&(h?(n(d,"opened"),m(d,"closed"),l(d,{"aria-hidden":"true"}),e.animate?(g=!1,setTimeout(function(){d.style.position="absolute",g=!0},e.transition+10)):d.style.position="absolute",h=!1,e.close()):(n(d,"closed"),m(d,"opened"),d.style.position=e.openPos,l(d,{"aria-hidden":"false"}),h=!0,e.open()))},resize:function(){"none"!==window.getComputedStyle(f,null).getPropertyValue("display")?(l(f,{"aria-hidden":"false"}),d.className.match(/(^|\s)closed(\s|$)/)&&(l(d,{"aria-hidden":"true"}),d.style.position="absolute"),this._createStyles(),this._calcHeight()):(l(f,{"aria-hidden":"true"}),l(d,{"aria-hidden":"false"}),d.style.position=e.openPos,this._removeStyles())},handleEvent:function(a){var b=a||window.event;switch(b.type){case"touchstart":this._onTouchStart(b);break;case"touchmove":this._onTouchMove(b);break;case"touchend":case"mouseup":this._onTouchEnd(b);break;case"click":this._preventDefault(b);break;case"keyup":this._onKeyUp(b);break;case"resize":this.resize(b)}},_init:function(){m(d,"nav-collapse"),m(d,"closed"),g=!0,h=!1,this._createToggle(),this._transitions(),this.resize();var a=this;setTimeout(function(){a.resize()},20),i(window,"resize",this,!1),i(document.body,"touchmove",this,!1),i(f,"touchstart",this,!1),i(f,"touchend",this,!1),i(f,"mouseup",this,!1),i(f,"keyup",this,!1),i(f,"click",this,!1),e.init()},_createStyles:function(){o.parentNode||(o.type="text/css",document.getElementsByTagName("head")[0].appendChild(o))},_removeStyles:function(){o.parentNode&&o.parentNode.removeChild(o)},_createToggle:function(){if(e.customToggle){var a=e.customToggle.replace("#","");if(document.getElementById(a))f=document.getElementById(a);else{if(!document.querySelector(a))throw new Error("The custom nav toggle you are trying to select doesn't exist");f=document.querySelector(a)}}else{var b=document.createElement("a");b.innerHTML=e.label,l(b,{href:"#","class":"nav-toggle"}),"after"===e.insert?d.parentNode.insertBefore(b,d.nextSibling):d.parentNode.insertBefore(b,d),f=b}},_preventDefault:function(a){a.preventDefault?(a.preventDefault(),a.stopPropagation()):a.returnValue=!1},_onTouchStart:function(a){a.stopPropagation(),this.startX=a.touches[0].clientX,this.startY=a.touches[0].clientY,this.touchHasMoved=!1,j(f,"mouseup",this,!1)},_onTouchMove:function(a){(Math.abs(a.touches[0].clientX-this.startX)>10||Math.abs(a.touches[0].clientY-this.startY)>10)&&(this.touchHasMoved=!0)},_onTouchEnd:function(a){if(this._preventDefault(a),!this.touchHasMoved){if("touchend"===a.type){this.toggle(a);var b=this;return d.addEventListener("click",b._preventDefault,!0),setTimeout(function(){d.removeEventListener("click",b._preventDefault,!0)},e.transition+100),void 0}var c=a||window.event;3!==c.which&&2!==c.button&&this.toggle(a)}},_onKeyUp:function(a){var b=a||window.event;13===b.keyCode&&this.toggle(a)},_transitions:function(){if(e.animate){var a=d.style,b="max-height "+e.transition+"ms";a.WebkitTransition=b,a.MozTransition=b,a.OTransition=b,a.transition=b}},_calcHeight:function(){for(var a=0,b=0;b<d.inner.length;b++)a+=d.inner[b].offsetHeight;var c=".nav-collapse.opened{max-height:"+a+"px}";o.styleSheet?o.styleSheet.cssText=c:o.innerHTML=c,c=""}},new p(a,b)};window.responsiveNav=a}();

$(document).ready(function(){

var nav = responsiveNav(".nav", {
    label: "Menu", // String: Label for the navigation toggle
    insert: "after", // String: Insert the toggle before or after the navigation
    customToggle: "", // Selector: Specify the ID of a custom toggle
    openPos: "relative", // String: Position of the opened nav, relative or static
    jsClass: "js", // String: 'JS enabled' class which is added to <html> el
    init: function(){}, // Function: Init callback
    open: function(){$(".nav-toggle").text("\u25B2");}, // Function: Open callback
    close: function(){$(".nav-toggle").text("Menu");} // Function: Close callback
});
// If the menu is open in responsive & window is resized to desktop dimensions, reset the menu
$(window).resize(function(){
   if ($(window).width() > 506) {
      $(".nav").removeClass("opened").removeClass("nav-collapse").attr('aria-hidden','true');
      $(".nav-toggle").text("Menu");
    } else {
      $(".nav").addClass("nav-collapse");
    }
});

jQuery(".title h1").fitText(0.7, { maxFontSize: '78px' });
jQuery(".title p").fitText(1.8, { maxFontSize: '26px' });

});

</script>



</body>
</html>