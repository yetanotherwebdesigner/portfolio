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
    <!--[if lte IE 8]><script src="js/libs/respond.min.js"></script><![endif]-->   
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="js/libs/selectivizr-min.js"></script>
    <![endif]-->
    <script src="js/libs/modernizr.canvas.js"></script>    
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
	<a id="y-gplus" class="tooltips sans-serif" title="Blog" href="http://www.yetanotherwebdesigner.com/blog/">Blog</a>
      </nav> 
    </article>
    <footer class="copyright"><p>Copyright 2012 &copy; Anthony Teo</p></footer>
    <canvas><a class="tooltips" title="Google+" href="https://plus.google.com/b/101251082499312129098/101251082499312129098/posts"><img src="images/y-gplus.png" width="64" height="64" alt="The letter Y, with Google Plus icon on it."></a></canvas>
    <script>yepnope({
      test:Modernizr.canvas,
      yep:["js/easeljs/utils/UID.4.2.js","js/easeljs/geom/Matrix2D.4.2.js","js/easeljs/events/MouseEvent.4.2.js","js/easeljs/events/MouseEvent.4.2.js","js/easeljs/utils/SpriteSheetUtils.4.2.js","js/easeljs/display/SpriteSheet.4.2.js","js/easeljs/display/Shadow.js","js/easeljs/display/DisplayObject.4.2.js","js/easeljs/display/Container.4.2.js","js/easeljs/display/Stage.4.2.js","js/easeljs/display/Bitmap.4.2.js","js/easeljs/display/BitmapAnimation.4.2.js","js/easeljs/utils/Ticker.js","js/easeljs/geom/Rectangle.4.2.js","js/entrance.js"],
      both:["js/jquery.min.js","js/jquery.tools.min.js","js/yawd.js","//static.getclicky.com/js"],
      complete:function(){if(Modernizr.canvas&&screen.width>768) init();$j(".tooltips[title]").tooltip({effect:"fade",opacity:.9, delay:5});}
      });</script>
    <script>try{ clicky.init(66561433); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
  </body>
  </html>
