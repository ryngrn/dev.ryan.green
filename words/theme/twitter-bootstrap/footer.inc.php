<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      footer.inc.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
    </div> <!-- /container -->
    <?php get_footer(); ?>
<script>
$(document).ready(function(){   
     if (window.location.href.indexOf('post') >= 0) {
         $('#index').removeAttr('id');
     }     
});
</script>

<script src="<?php get_theme_url(); ?>/js/script.js"></script>

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

</body>
</html>