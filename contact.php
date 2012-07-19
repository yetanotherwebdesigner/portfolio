<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <title>Contact | Yet Another Web Designer</title>
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
    <article class="content" id="message">
      <div class="postcard">
	<div class="holder">
	  <form id="cform" name="cform" method="post" action="sendmail.php">
	    <div id="postcard-left">
	      <h1><label for="speak">Say What You Like:</label></h1>
	      <textarea name="message" id="speak" cols="23" rows="3" class="required" minlength="2"></textarea>
	    </div>
	    <div id="postcard-right">
	      <p class="remain"><span>480</span>
		characters
		remaining</p>
	      <p class="name">
		<label for="name">Your Name?</label>
		<input name="name" type="text" id="name" size="30" class="required" minlength="2" />
	      </p>
	      <p class="email">
		<label for="email">Your Email?</label>
		<input name="email" type="text" id="email" size="30" class="required email" />
	      </p>
	      <p class="submit">
		<input class="submit" name="submit" type="submit" value="Send →" />
	      </p>
	    </div>
	  </form>
	</div>
      </div><!-- ends .postcard -->
      <div id="hiddenPostbox" class="postbox"></div>
      <nav id="menu">
	<a class="tooltips" href="tweets.php" id="blog-small" title="Tweets">Tweets</a>
	<a class="tooltips" href="portfolio.php" id="snapshots-small" title="Portfolio">Portfolio</a>    
      </nav> 
    </article> 
    <div class="copyright"><p>Copyright 2012 &copy; Anthony Teo</p></div>
    <script>yepnope({
      load:["js/jquery.min.js","js/jquery.validate.min.js","js/jquery.tools.min.js","js/yawd.js","js/ajax-submit.js","//static.getclicky.com/js"],
      complete:function(){
      $j(".tooltips[title]").tooltip({effect:"fade",opacity:.9,delay:5});
      $("textarea").focus();
      $("textarea").keypress(function(e){
      var tval=$("textarea").val(),tlength=tval.length,set=480,remain = parseInt(set - tlength);
      $("p.remain span").text(remain);
      if (remain <= 0 && e.which !== 0 && e.charCode !== 0) {$("textarea").val((tval).substring(0, tlength - 1));}
      $("#cform").validate();
      });
		    }//ends complete
		    });
		     </script>
    <script>try{ clicky.init(66561433); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
  </body>
  </html>
