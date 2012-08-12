<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <title>Tweets | Yet Another Web Designer</title>
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
    <article class="content" id="tweets">
      <div id="organizer-wrapper">
	<div class="organizer holder">
	  <h2><a title="Visit my Twitter page" href="http://twitter.com/yetanotherwebd" target="blank">Tweets</a></h2>
	  <p>Yet another web designer's tweets. (Or not.)
	    Here I tweet about my daily learnings on
	    Web Design & Development, both for
	    personal record and for sharing
	    with the world.</p>
	  <div id="ribbon-top"></div>
	  <div class="scroll-pane">
	    <div class="tweet holder content"></div>
	  </div>
	  <a title="Visit my Twitter page" id="twitter-home" href="http://twitter.com/yetanotherwebd"><img width="42" height="30" src="http://cdn.yetanotherwebdesigner.com/images/twitter-small.png" alt="Small Twitter logo"/></a>
	</div><!-- ends .organizer holder-->
      </div><!-- ends #organizer-wrapper-->
      <nav id="menu">
	<a class="tooltips sans-serif" href="portfolio.php" id="snapshots-small" title="Portfolio">Portfolio</a>
	<a class="tooltips sans-serif" href="contact.php" id="contact-small" title="Contact">Contact</a>
	<!--<a id="y-gplus" class="tooltips sans-serif" title="Google+" href="https://plus.google.com/b/101251082499312129098/101251082499312129098/posts">Google+</a>-->
      </nav>
    </article>
    <footer class="copyright"><p>Copyright 2012 &copy; Anthony Teo</p></footer>
    <div class="error"><p>Javascript has to be enabled for the tweets to be loaded. Please enable Javascript on your browser and try again. Alternatively, you may visit my Twitter page by clicking on the Twitter logo below.</p></div>
    <script>yepnope({
      load:["js/jquery.min.js","js/jquery.jscrollpane.min.js","js/jquery.tweet.js","js/jquery.tools.min.js","js/yawd.js","//static.getclicky.com/js"],
      complete:function(){
      $(".tweet").tweet({username:"yetanotherwebd",count:3,refresh_interval:10,loading_text:"loading tweets..."});
      if($(window).width()>768){
        $(".scroll-pane").bind(
      'jsp-initialised',
      function(event, isScrollable){
      $j(".jspDrag").attr( 'title', 'Drag Me!' ).addClass("tooltips");$j(".tooltips[title]").tooltip({effect:"fade",opacity:.9, delay:5});
      });
      $(".scroll-pane").jScrollPane({verticalDragMinHeight:200});
  }
      }
      });
    </script>
    <script>try{ clicky.init(66561433); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
  </body>
  </html>
