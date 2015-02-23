<footer id="pagefooter" role="contentinfo">
    <div></div>
    <nav>
        <p>Follow this blog <a href="http://nerd.vasilis.nl/feed/">via plain RSS</a> or
            <a href="http://www.feedly.com/home#subscription/feed%2Fhttp%3A%2F%2Fnerd.vasilis.nl%2Ffeed%2F">directly via Feedly</a>.
            Read more <a href="http://nerd.vasilis.nl/about/">about Vasilis</a>, why I <a href="http://lovenonsense.com/">Love Nonsense</a>, what I do in <a href="http://wasstra.at/">De Wasstraat</a>.
            Or contact me via <a href="https://twitter.com/vasilis">Twitter</a>. You can email me at nerd[at]vasilis.nl. 
            You might also like my <a href="http://vasilis.nl/voto/">photos</a>. None of the above? Maybe you prefer <a href="http://amorvacui.com/">Nothing</a>?
            Or maybe you're looking for <a href="http://www.webfaction.com/services/hosting?affiliate=vasilis">Hosting</a>? <small>&copy; 2009 - 2014 <a href="http://vasilis.nl/">Vasilis van Gemert</a>. <a href="http://nerd.vasilis.nl/feed/">RSS</a></small></p>
    </nav>
    <div></div>
</footer>
<script>
// https://github.com/chapmanu/fragmentions
"use strict";"fragmention"in window.location||function(){function a(b,c){for(var f,d=b.childNodes,e=0,g=[];f=d[e];++e)1==f.nodeType&&-1!==(f.innerText||f.textContent||"").replace(/\s+/g," ").indexOf(c)&&(g=g.concat(a(f,c)));return g.length?g:b}function b(){var b=location.href.match(/#((?:#|%23)?)(.+)/)||[0,"",""],d=document.getElementById(b[1]+b[2]),e=decodeURIComponent(b[2]).replace(/\+/g," ").split("  ");if(location.fragmention=e[0],location.fragmentionIndex=parseFloat(e[1])||0,c&&(c.removeAttribute("fragmention"),c.runtimeStyle&&(c.runtimeStyle.windows=c.runtimeStyle.windows)),!d&&location.fragmention){var f=a(document,location.fragmention),g=f.length,h=g&&location.fragmentionIndex%g,i=g&&h>=0?h:g+h;c=g&&f[i],c?(c.scrollIntoView(),c.setAttribute("fragmention",""),c.runtimeStyle&&(c.runtimeStyle.windows=c.runtimeStyle.windows)):c=null}}location.fragmention=location.fragmention||"";var c;"addEventListener"in window?(window.addEventListener("hashchange",b),document.addEventListener("DOMContentLoaded",b)):(window.attachEvent("onhashchange",b),document.attachEvent("onreadystatechange",function(){"c"===document.readyState[0]&&b()}))}();
(function(){'use strict';function e(a){this.a=document.createElement("div");this.a.setAttribute("aria-hidden","true");this.a.appendChild(document.createTextNode(a));this.b=document.createElement("span");this.c=document.createElement("span");this.f=document.createElement("span");this.e=document.createElement("span");this.d=-1;this.b.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";this.c.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";
this.e.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";this.f.style.cssText="display:inline-block;width:200%;height:200%;";this.b.appendChild(this.f);this.c.appendChild(this.e);this.a.appendChild(this.b);this.a.appendChild(this.c)}function r(a,b,c){a.a.style.cssText="min-width:20px;min-height:20px;display:inline-block;visibility:hidden;position:absolute;width:auto;margin:0;padding:0;top:0;white-space:nowrap;font-size:100px;font-family:"+b+";"+c}
function s(a){var b=a.a.offsetWidth,c=b+100;a.e.style.width=c+"px";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.d!==b?(a.d=b,!0):!1}function t(a,b){a.b.addEventListener("scroll",function(){s(a)&&null!==a.a.parentNode&&b(a.d)},!1);a.c.addEventListener("scroll",function(){s(a)&&null!==a.a.parentNode&&b(a.d)},!1);s(a)};function u(a,b){this.family=a;this.style=b.style||"normal";this.variant=b.variant||"normal";this.weight=b.weight||"normal";this.stretch=b.stretch||"stretch";this.featureSettings=b.featureSettings||"normal"}var v=null;
u.prototype.a=function(a){a=a||"BESbswy";var b="font-style:"+this.style+";font-variant:"+this.variant+";font-weight:"+this.weight+";font-stretch:"+this.stretch+";font-feature-settings:"+this.featureSettings+";-moz-font-feature-settings:"+this.featureSettings+";-webkit-font-feature-settings:"+this.featureSettings+";",c=document.createElement("div"),k=new e(a),l=new e(a),m=new e(a),f=-1,d=-1,g=-1,n=-1,p=-1,q=-1,h=this;r(k,"sans-serif",b);r(l,"serif",b);r(m,"monospace",b);c.appendChild(k.a);c.appendChild(l.a);
c.appendChild(m.a);document.body.appendChild(c);n=k.a.offsetWidth;p=l.a.offsetWidth;q=m.a.offsetWidth;return new Promise(function(a,y){function w(){null!==c.parentNode&&document.body.removeChild(c)}function x(){if(-1!==f&&-1!==d&&-1!==g&&f===d&&d===g){if(null===v){var b=/AppleWeb[kK]it\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent);v=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))}v?f===n&&d===n&&g===n||f===p&&d===p&&g===p||f===q&&d===q&&g===q||(w(),a(h)):(w(),
a(h))}}setTimeout(function(){w();y(h)},3E3);t(k,function(a){f=a;x()});r(k,h.family+",sans-serif",b);t(l,function(a){d=a;x()});r(l,h.family+",serif",b);t(m,function(a){g=a;x()});r(m,h.family+",monospace",b)})};window.FontFaceObserver=u;window.FontFaceObserver.prototype.check=u.prototype.a;}());
var observer1 = new FontFaceObserver('Fedra Sans Screen Regular', {});
var observer2 = new FontFaceObserver('Fedra Sans Screen Italic', {
    style: italic
});
var observer3 = new FontFaceObserver('Fedra Sans Screen Bold', {
    weight: bold
});
var observer4 = new FontFaceObserver('Fedra Sans Screen Bold Italic', {
    weight: bold,
    style: italic
});
var observer5 = new FontFaceObserver('Fedra Mono Screen Regular', {
    style: normal,
    weight: normal
});
var observer6 = new FontFaceObserver('Charlie SemiBold', {});

observer1.check().then(function () {
  document.documentElement.className += " fedra-regular-loaded";
});
observer2.check().then(function () {
  document.documentElement.className += " fedra-italic-loaded";
});
observer3.check().then(function () {
  document.documentElement.className += " fedra-bold-loaded";
});
observer4.check().then(function () {
  document.documentElement.className += " fedra-bold-italic-loaded";
});
observer5.check().then(function () {
  document.documentElement.className += " fedra-mono-loaded";
});
observer6.check().then(function () {
  document.documentElement.className += " charlie-loaded";
});
</script>
<?php
$key="has-code-block";
$hasBlock = get_post_meta($post->ID, $key, true);
if(!is_home() && $hasBlock != '') {
?>
<script src="/wp-content/themes/nerd-ratio/js/prism.js"></script>
<?php } ?>
