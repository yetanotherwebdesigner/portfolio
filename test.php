<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
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
    <link rel="stylesheet" href="css/style.css">
    <!-- For progressively larger displays -->
    <link rel="stylesheet" media="only screen and (min-width: 320px)" href="css/mobile.css">
    <link rel="stylesheet" media="only screen and (min-width: 768px)" href="css/desktop.css">
    <!--[if lte IE 8]><script src="js/libs/html5shiv.js"></script><script src="js/libs/respond.min.js"></script><![endif]-->   
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="js/libs/selectivizr-min.js"></script>
    <![endif]-->
    <script src="js/libs/modernizr.canvas.js"></script>    
    <script src="js/yepnope.1.5.4-min.js"></script>
    <script>document.getElementsByTagName("html")[0].setAttribute("class","js");</script>
    <script src="js/libs/modernizr-2.0.6.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="http://cdn.yetanotherwebdesigner.com/images/favicon.ico" /> 
  </head>
  <body>
    <h1 class="title"><a href="/">Yet Another Web Designer</a></h1> 
    <article class="content" id="home"> 
      <p>Or not. I play around with HTML, CSS, Javascript, Photoshop - all that fancy stuff. 
	Yet the Web is my playground, and I am no less an artist than one who paints on canvas.
	Hire me full-time, find out more about me, or simply drop me a line.</p> 
      <nav id="menu"> 
	<a href="tweets.php" class="menu" id="blog" title="Tweets">Tweets</a>
	<a href="portfolio.php" class="menu" id="portfolio" title="Portfolio">Portfolio</a>
	<a href="contact.php" class="menu" id="contact" title="Contact">Contact</a>
      </nav> 
    </article>
    <footer class="copyright"><p>Copyright 2012 &copy; Teo Wei Pin, Anthony&nbsp;|&nbsp;<a href="http://www.yetanotherwebdesigner.com/jp" class="inner-tooltip-invoke" title="View this site in Japanese">日本語</a>&nbsp;|&nbsp;<a href="http://www.yetanotherwebdesigner.com/ch" class="inner-tooltip-invoke" title="View this site in Chinese">中文</a></p></footer>
    <canvas></canvas><a id="canvas-link" class="inner-tooltip-invoke" title="Find Me on Google+" href="https://plus.google.com/b/101251082499312129098/101251082499312129098/posts"></a>
    <script>yepnope({
      test:Modernizr.canvas,
      yep:["js/easeljs/utils/UID.4.2.js","js/easeljs/geom/Matrix2D.4.2.js","js/easeljs/events/MouseEvent.4.2.js","js/easeljs/events/MouseEvent.4.2.js","js/easeljs/utils/SpriteSheetUtils.4.2.js","js/easeljs/display/SpriteSheet.4.2.js","js/easeljs/display/Shadow.js","js/easeljs/display/DisplayObject.4.2.js","js/easeljs/display/Container.4.2.js","js/easeljs/display/Stage.4.2.js","js/easeljs/display/Bitmap.4.2.js","js/easeljs/display/BitmapAnimation.4.2.js","js/easeljs/utils/Ticker.js","js/easeljs/geom/Rectangle.4.2.js","js/entrance.js"],
      complete:function(){init();}
      });</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/yawd.js"></script>
    <script src="//static.getclicky.com/js"></script>
    <script>try{ clicky.init(66561433); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
  </body>
  </html>
