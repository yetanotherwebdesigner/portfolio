<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <title>404 Page Not Available | Yet Another Web Designer</title>
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
  <link rel="stylesheet" href="/css/style.css">
  <!-- For progressively larger displays -->
  <link rel="stylesheet" media="only screen and (min-width: 320px)" href="/css/mobile.css">
  <link rel="stylesheet" media="only screen and (min-width: 768px)" href="/css/desktop.css">
    <!--[if lte IE 8]><script src="/js/libs/respond.min.js"></script><![endif]-->     
  <!--[if (lt IE 9) & (!IEMobile)]>
      <script src="/js/libs/selectivizr-min.js"></script>
      <![endif]-->
  <script src="/js/libs/modernizr.canvas.js"></script>    
  <link rel="shortcut icon" type="image/x-icon" href="http://cdn.yetanotherwebdesigner.com/images/favicon.ico" /> 
</head> 
<body> 
  <h1 class="title"><a href="/">Yet Another Web Designer</a></h1> 
  <article class="content" id="home"> 
    <h2 class="fourofour">The page that you were finding is not available.</h2>
    <p>You may have clicked on a bad link, or mis-typed your URL.
      Re-orientate yourself by clicking on one of the three main sections below:</p>
    <nav id="menu"> 
      <a class="menu" id="blog" href="tweets.php" title="Tweets">Tweets</a> 
      <a class="menu" id="portfolio" href="portfolio.php" title="Portfolio">Portfolio</a> 
      <a class="menu" id="contact" href="contact.php" title="Contact">Contact</a> 
    </nav> 
  </article>
  <footer class="copyright"><p>Copyright 2012 &copy; Anthony Teo</p></footer>
  <script>yepnope({
    load:["/js/jquery.min.js","/js/jquery.tools.min.js","/js/yawd.js","//static.getclicky.com/js"],
    complete:function(){
    $j("#menu a[title]").tooltip({effect:"fade",opacity:.9,
    delay:5});$j(".inner-tooltip-invoke[title]").tooltip({effect:"fade",delay:5,tipClass:'inner-tooltip'});
    }
    });</script>
  <script>try{ clicky.init(66561433); }catch(e){}</script>
  <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>  
</body> 
</html> 
