<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie9" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 lt-ie9" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <title>Home | Yet Another Web Designer</title>
    <meta charset="utf-8"/> 
    <meta name="author" content="Anthony Teo"/> 
    <meta name="description" content="The homepage of yet another web designer."/> 
    <meta name="keywords" content="web designer, web design, css, html, javascript, responsive design"/>
    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">
    <!-- necc. to use width=device-width to fit content into device screen size-->
    <!-- setting target-densitydpi makes image/text look smaller on high-res device & vice versa. (Android only)-->
    <!-- initial-scale=1.0 prevents default zooming of pages-->

    <!-- For all browsers -->
    <link rel="stylesheet" href="css/minified/style.css">
    <!-- For progressively larger displays -->
    <link rel="stylesheet" media="only screen and (min-width: 320px)" href="css/minified/mobile.css">
    <link rel="stylesheet" media="only screen and (min-width: 768px)" href="css/minified/desktop.css">
    <!--[if lte IE 8]><script src="/js/libs/respond.min.js"></script><![endif]-->   
    <!--[if (lt IE 9) & (!IEMobile)]>
	<script src="http://cdn.yetanotherwebdesigner.com/js/libs/selectivizr-min.js"></script>
	<![endif]-->
    <script src="http://cdn.yetanotherwebdesigner.com/js/libs/modernizr.canvas.js"></script>    
    <link rel="shortcut icon" type="image/x-icon" href="http://cdn.yetanotherwebdesigner.com/images/favicon.ico" /> 
  </head>
  <body>
    <h1 class="title"><a href="/">Yet Another Web Designer</a></h1> 
    <article class="content" id="home"> 
      <p>Or not. I play around with HTML, CSS, Javascript, Photoshop - all that fancy stuff. 
	Yet the Web is my playground, and I am no less an artist than one who paints on canvas.
	Hire me full-time, find out more about me, or simply drop me a line.</p> 
      <nav id="menu"> 
	<a class="tooltips sans-serif" href="tweets.php" class="menu" id="blog" title="Tweets">Tweets</a>
	<a class="tooltips sans-serif" href="portfolio.php" class="menu" id="portfolio" title="Portfolio">Portfolio</a>
	<a class="tooltips sans-serif" href="contact.php" class="menu" id="contact" title="Contact">Contact</a>
	<a id="y-gplus" class="tooltips sans-serif" title="Blog" href="/blog">Blog</a>
      </nav> 
    </article>
    <footer itemscope itemtype="http://schema.org/Person" class="copyright"><p>Copyright <time>2013</time> &copy; <span itemprop="name">Teo Wei Pin (a.k.a Anthony)</span></p></footer>
    <canvas><a class="tooltips" title="Blog" href="/blog"><img src="images/y-idle.png" width="64" height="64" alt="The letter Y, with the Wordpress logo on it."></a></canvas>
    <script>yepnope({
      test:Modernizr.canvas,
      yep:["http://code.createjs.com/easeljs-0.4.2.min.js","js/entrance.js"],
      both:["http://cdn.yetanotherwebdesigner.com/js/jquery.min.js","http://cdn.yetanotherwebdesigner.com/js/jquery.tools.min.js","js/yawd.js"],
      complete:function(){$j(".tooltips[title]").tooltip({effect:"fade",opacity:.9, delay:5});if(Modernizr.canvas&&screen.width>768)init();}
  });</script>
<script>
  var clicky_site_ids = clicky_site_ids || [];
  clicky_site_ids.push(66561433);
  (function() {
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//static.getclicky.com/js';
  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
  })();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
</body>
</html>
