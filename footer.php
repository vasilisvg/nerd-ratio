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
</script>
<?php
$key="has-code-block";
$hasBlock = get_post_meta($post->ID, $key, true);
if(!is_home() && $hasBlock != '') {
?>
<script src="/wp-content/themes/nerd-ratio/js/prism.js"></script>
<?php } ?>
