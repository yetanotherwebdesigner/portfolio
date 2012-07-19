<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <title>Portfolio | Yet Another Web Designer</title>
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
    
    <!--[if lte IE 8]><script src="js/libs/respond.min.js"></script><![endif]-->     
    <!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/libs/selectivizr-min.js"></script>
	<![endif]-->
    <script src="js/libs/modernizr.canvas.js"></script>        
    <link rel="shortcut icon" type="image/x-icon" href="http://cdn.yetanotherwebdesigner.com/images/favicon.ico" /> 
  </head>
  <body>
    <h1 class="title"><a href="/">Yet Another Web Designer</a></h1> 
    <article class="content" id="snapshots"> 
      <div class="slideshow"> 
	<div class="polaroid holder"> 
	  <img src="http://cdn.yetanotherwebdesigner.com/images/gh2-screenshot.jpg" alt="Screenshot of GH-2" title="GH-2 Home" /> 
	  <h2><a href="http://www.gh-2.net" title="GH-2 Home">GH-2</a></h2> 
	  <p>A product site for one of Pure Science Supplements' flagship product, GH-2. This is a makeover from the previous text-heavy, plain design to a more
	  engaging design. Tags: HTML5, CSS3, Cufon</p> 
	  <div class="arrows"> 
	    <a title="Previous" class="prev" href="#">&lt;</a><a title="Next" class="next" href="#">&gt;</a> 
	  </div>
	</div>
	<div class="polaroid holder"> 
	  <img src="http://cdn.yetanotherwebdesigner.com/images/yawd-screenshot.jpg" alt="Screenshot of Yet Another Web Designer's Homepage" title="I.e. the site you're browsing" /> 
	  <h2><a href="/" title="I.e. the site you are browsing">Yet Another Web Designer</a></h2> 
	  <p>A personal project that entails collecting some of my previous work,  my tweets on web design & development, as well as some experimentation. Tags: Responsive Design, Twitter API, Google Web Fonts</p> 
	  <div class="arrows"> 
	    <a title="Previous" class="prev" href="#">&lt;</a><a title="Next" class="next" href="#">&gt;</a> 
	  </div>

	</div><!-- ends .polaroid--> 
	<div class="polaroid holder"> 
	  <img src="http://cdn.yetanotherwebdesigner.com/images/ak-screenshot.jpg" alt="Screenshot of Amber KNowles Homepage" title="Amber Knowles Home" /> 
	  <h2><a target="blank" href="http://www.amberknowles.com" title="Visit Amber Knowles">Amber Knowles</a></h2> 
	  <p>A portfolio site that showcases the photographer's works. She has come up with the designs and requested me to turn them into a Wordpress site. Tags: Javascript, Wordpress, Cufon, SEO</p> 
	  <div class="arrows"> 
	    <a title="Previous" class="prev" href="#">&lt;</a><a title="Next" class="next" href="#">&gt;</a> 
	  </div> 
	</div><!-- ends .polaroid-->       
	<div class="polaroid holder"> 
	  <img src="http://cdn.yetanotherwebdesigner.com/images/es-screenshot.jpg" alt="Screenshot of ES Lifestyle" title="ES Lifestyle Home" /> 
	  <h2>ES Lifestyle</h2> 
	  <p>A fashion project at Notion Bank. Contribution includes layout design, Flash movies, jQuery slideshows, and product ads design. Tags: Flash, jquery, Photoshop, CSS3, HTML 5</p> 
	  <div class="arrows"> 
	    <a title="Previous" class="prev" href="#">&lt;</a><a title="Next" class="next" href="#">&gt;</a> 
	  </div>
	</div><!-- ends .polaroid--> 
	<div class="polaroid holder"> 
	  <img src="http://cdn.yetanotherwebdesigner.com/images/ezy-screenshot.jpg" alt="Screenshot of EZY English" title="EZY English Home" /> 
	  <h2>EZY English</h2> 
	  <p>A squeezpage that worked hand in hand with a Google Adwords campaign to sell subscription to an educational e-magazine to English learners in Japan. Tags: Wordpress, YUI, EDM, Adwords</p> 
	  <div class="arrows"> 
	    <a title="Previous" class="prev" href="#">&lt;</a><a title="Next" class="next" href="#">&gt;</a> 
	  </div> 
	</div><!-- ends .polaroid--> 
      </div><!-- ends .slideshow --> 
      <nav id="menu">
	<a class="tooltips" href="tweets.php" id="blog-small" title="Tweets">Tweets</a>
	<a class="tooltips" href="contact.php" id="contact-small" title="Contact">Contact</a>
      </nav> 
    </article> 
    <footer class="copyright"><p>Copyright 2012 &copy; Anthony Teo</p></footer>
    <div class="error"><p>Javascript has to be enabled for the portfolio to be loaded. Please enable Javascript on your browser and try again.</p></div>
    <script>yepnope({
      load:["js/jquery.min.js","js/jquery.cycle.min.js","js/jquery.tools.min.js","js/yawd.js","//static.getclicky.com/js"],
      complete:function(){
      $j(".tooltips[title]").tooltip({effect:"fade",opacity:.9, delay:5});
      $(".slideshow").cycle({fx:'fade',speed:'slow',timeout:0,next:'.next',prev: '.prev'});
      }
      });</script>
    <script>try{ clicky.init(66561433); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
  </body>
  </html>
