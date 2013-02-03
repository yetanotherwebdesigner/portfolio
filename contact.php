<?php

$message = "";
$name = "";
$email = "";
$errors = "";
extract($_GET);

?>

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
    <link rel="stylesheet" href="css/minified/style.css">
    <!-- For progressively larger displays -->
    <link rel="stylesheet" media="only screen and (min-width: 320px)" href="css/minified/mobile.css">
    <link rel="stylesheet" media="only screen and (min-width: 768px)" href="css/minified/desktop.css">
    <!--[if lte IE 8]><script src="/js/libs/respond.min.js"></script><![endif]-->     
    <!--[if (lt IE 9) & (!IEMobile)]>
	<script src="../js/libs/selectivizr-min.js"></script>
	<![endif]-->
    <script src="../js/libs/modernizr.canvas.js"></script>    
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
	      <textarea name="message" id="speak" cols="23" rows="3" class="required" minlength="2"><?php echo $message; ?></textarea>
	      <?php
	      
	      if(strstr($errors, 'message_empty')) {
		  echo '<label for="speak" generated="true" class="error">Please say something.</label>';
	      } elseif(strstr($errors, 'message_two')) {
		  echo '<label for="speak" generated="true" class="error">Please enter at least 2 characters.</label>';
	      }
	      
	      ?>
	    </div>
	    <div id="postcard-right">
	      <p class="remain"><span>480</span>
		characters
		remaining</p>
	      <p class="name">
		<label for="name">Your Name?</label>
		<input name="name" type="text" id="name" size="30" class="required" minlength="2" value="<?php echo $name; ?>" />
		<?php
		
		if(strstr($errors, 'name_empty')) {
		  echo '<label for="name" generated="true" class="error" style="display: block;">Please enter your name.</label>';
		} elseif(strstr($errors, 'name_two')) {
		  echo '<label for="name" generated="true" class="error">Please enter at least 2 characters for your name.</label>';
		}
		
		?>
	      </p>
	      <p class="email">
		<label for="email">Your Email?</label>
		<input name="email" type="text" id="email" size="30" class="required email" value="<?php echo $email; ?>" />
		<?php
		
		if(strstr($errors, 'email_empty')) {
		  echo '<label for="email" generated="true" class="error" style="display: block;">Please enter your email address.</label>';
		} elseif(strstr($errors, 'email_invalid')) {
		  echo '<label for="email" generated="true" class="error">Please enter a valid email address.</label>';
		}
		
		?>
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
	<a class="tooltips sans-serif" href="tweets.php" id="blog-small" title="Tweets">Tweets</a>
	<a class="tooltips sans-serif" href="portfolio.php" id="snapshots-small" title="Portfolio">Portfolio</a>    
      </nav> 
    </article> 
    <footer itemscope itemtype="http://schema.org/Person" class="copyright"><p>Copyright <time>2013</time> &copy; <span itemprop="name">Teo Wei Pin (a.k.a Anthony)</span></p></footer>
    <script>yepnope({
      load:["../js/jquery.min.js","http://malsup.github.com/jquery.form.js","../js/jquery.validate.min.js","../js/jquery.tools.min.js","../js/yawd.js"],
      complete:function(){
      $j(".tooltips[title]").tooltip({effect:"fade",opacity:.9,delay:5});
      $("textarea").focus();
      $("textarea").keypress(function(e){
      var tval=$("textarea").val(),tlength=tval.length,set=480,remain = parseInt(set - tlength);
      $("p.remain span").text(remain);
      if ((remain <= 0) && (e.which !== 0) && (e.charCode !== 0)) {
		     $("textarea").val((tval).substring(0, tlength - 1));
		     }//end if
		     });//end keypress
		    $("#cform").validate({
		     submitHandler: function(form) {
		     $(form).ajaxSubmit({
		     beforeSubmit:function(){$("p.submit input").css("background-position","1em 50%")},
		     success: function(){
		     $("div.postcard").animate({
		     height:['toggle','swing'],width:['toggle','swing'],top:'153',left:'15'
		     },400
		     ).before("<p>Thank you for your message. I will get back to you soon.</p>");
		     $("div.postbox").css("top","45px");$(".copyright").css("margin-top","650px");$("h1").focus();
		     }
		     });
		     return false;// return false to prevent normal browser submit and page navigation 
		     }
		     });//ends validate
		    }//ends complete
		    });//ends yepnope
		     </script>
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
