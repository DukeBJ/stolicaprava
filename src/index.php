<?php
defined('_JEXEC') or die;?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>

  <jdoc:include type="head" />

  <meta charset="<?php echo $this->_charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/app.css" />

  <!-- Put this script tag to the <head> of your page | не понятно работает ли это еще
  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?82"></script>
  <script type="text/javascript">  VK.init({apiId: 3475637, onlyWidgets: true});</script>
  -->
  <!-- END VK SCRIPT -->
  <meta name="google-site-verification" content="GnaXzxsaDdifwCGb6XfrlDDQ2iu4U_KnhxLEUAXdhVk" />
  <meta name='yandex-verification' content='7a88dd530a8265cb' />

  <!--Скрипт поделиться <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script> -->

</head>

<body>

<!-- тут было мобильное меню
<nav class="pushy pushy-left">
<jdoc:include type="modules" name="position-7" />
</nav> -->
<!-- Site Overlay -->

<div class="site-overlay"></div>
<!-- Your Content -->
<div id="container">


<div id="top-menu-container">
  <center><div class="top-menu">
  <!-- Menu Button -->
    <div class="menu-btn">&#9776;</div>
    <ul>      
    <li class="art1"><a href="http://stolicaprava.ru/cons/cons.html">Бесплатная консультация юриста</a></li>
    <li><a href="tel:+74955107016">Тел. 8 (495) 510-70-16</a></li>
        </ul>
  </div></center>  
</div>


<center>
<div class="header">
    <a href="/"><img class="picture1" src="/templates/stolicaprava/images/logo1.png" width="50" height="60" alt="Лого. Московский Юридический Центр" /></a>
    <ul class="shapka" itemscope itemtype="http://schema.org/Organization">
    <li class="headermain" itemprop="name">ЮрЦентр &laquo;Столица&raquo;</li>
    <li class="headermain2">Консультации. Иски. Представительство в суде</li>
    </ul>
    </div><!-- end .header -->
    
<div class="container">

  <div class="sidebar1">

   <jdoc:include type="modules" name="position-7" />
  <!-- end .sidebar1 --></div>

  <div class="content">
<jdoc:include type="modules" name="position-2" />
<jdoc:include type="component" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <!-- end .content --></div>

  <div class="footer">
<br />
<br />
<br />
<br />
<p class="footermenu">
<jdoc:include type="modules" name="position-12" />
</p>

    <p class="dline3"><jdoc:include type="modules" name="position-10" /></p>

<a href="http://stolicaprava.ru/"><img  class="padtop1" src="/templates/stolicaprava/images/hat.gif" width="38" height="36" /></a>
<br />
<br />
<jdoc:include type="modules" name="position-11" />
<br />
<br />
<br />
<br />
  <!-- end .footer --></div>

  <!-- end .container --></div>
</center>  
</div>  
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-32368634-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter17516107 = new Ya.Metrika({id:17516107, enableAll: true, webvisor:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/17516107" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

<!-- Pushy JS -->
<script>//<![CDATA[
$(function(){function a(){e.toggleClass(j),d.toggleClass(i),f.toggleClass(k),g.toggleClass(l)}function b(){e.addClass(j),d.animate({left:"0px"},n),f.animate({left:o},n),g.animate({left:o},n)}function c(){e.removeClass(j),d.animate({left:"-"+o},n),f.animate({left:"0px"},n),g.animate({left:"0px"},n)}var d=$(".pushy"),e=$("body"),f=$("#container"),g=$(".push"),h=$(".site-overlay"),i="pushy-left pushy-open",j="pushy-active",k="container-push",l="push-push",m=$(".menu-btn, .pushy-item"),n=200,o=d.width()+"px",p=".pushy-submenu",q="pushy-submenu-open",r=".pushy-submenu ul",s=$(p);if(s.children("a").on("click",function(a){a.preventDefault(),$(this).toggleClass(q).next(r).slideToggle(200).end().parent(p).siblings(p).children("a").removeClass(q).next(r).slideUp(200)}),cssTransforms3d=function(){var a=document.createElement("p"),b=!1,c={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};document.body.insertBefore(a,null);for(var d in c)void 0!==a.style[d]&&(a.style[d]="translate3d(1px,1px,1px)",b=window.getComputedStyle(a).getPropertyValue(c[d]));return document.body.removeChild(a),void 0!==b&&b.length>0&&"none"!==b}())m.click(function(){a()}),h.click(function(){a()});else{d.css({left:"-"+o}),f.css({"overflow-x":"hidden"});var t=!0;m.click(function(){t?(b(),t=!1):(c(),t=!0)}),h.click(function(){t?(b(),t=!1):(c(),t=!0)})}});
//]]></script>

<jdoc:include type="modules" name="debug" />
</body>
</html>
