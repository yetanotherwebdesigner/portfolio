<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="zh"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="zh"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="zh"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="zh"><!--<![endif]-->
  <!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="zh"><!--<![endif]-->
  <head>
    <title>联系我 | Yet Another Web Designer</title>
    <meta charset="utf-8"/> 
    <meta name="author" content="Anthony Teo"/> 
    <meta name="description" content="The homepage of yet another web designer, i.e. Teo Wei Pin, Anthony."/> 
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
    <link rel="stylesheet" media="only screen and (min-width: 320px)" href="/css/mobile-ch.css">
    <link rel="stylesheet" media="only screen and (min-width: 768px)" href="/css/desktop.css">
    <link rel="stylesheet" media="only screen and (min-width: 768px)" href="/css/desktop-ch.css">
    
    <!--[if lte IE 8]><script src="/js/libs/html5shiv.js"></script><script src="/js/libs/respond.min.js"></script><![endif]-->   
    <!--[if (lt IE 9) & (!IEMobile)]>
	<script src="/js/libs/selectivizr-min.js"></script>
	<![endif]-->
    
    <!-- html5 & css3 features for less capable browsers -->
    <!--<script src="/js/libs/modernizr-2.0.6.min.js"></script>-->
    <script>document.getElementsByTagName("html")[0].setAttribute("class","js");</script>
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    
  </head>
  <body>
    <h1 class="title"><a href="/ch">Yet Another Web Designer</a></h1> 
    <article class="content" id="message"> 
      <div class="postcard">
	<div class="holder">
	  <form id="cform" name="cform" method="post" action="http://www.yetanotherwebdesigner.com/sendmail.php">
	    <div id="postcard-left">
	      <h1><label for="message">请将您的想法写下:</label></h1>
	      <textarea name="message" id="message" cols="23" rows="3" class="required" minlength="2"></textarea>
	    </div>
	    <div id="postcard-right">
	      <p class="remain"><span>480</span>
		剩余字数</p>
	      <p class="name">
		<label for="name">您的名字是？</label>
		<input name="name" type="text" id="name" size="30" class="required" minlength="2" />
	      </p>
	      <p class="email">
		<label for="email">您的电邮地址是？</label>
		<input name="email" type="text" id="email" size="30" class="required email" />
	      </p>
	      <p class="submit">
		<input class="submit inner-tooltip-invoke" name="submit" type="submit" value="发送 →" />
	      </p>
	    </div>
	  </form>
	</div>
      </div><!-- ends .postcard -->
      <div class="postbox"></div>
      <nav id="menu">
	<a href="tweets.php" id="blog-small" title="Twitter消息">Twitter消息</a>
	<a href="portfolio.php" id="snapshots-small" title="代表作品">代表作品</a>    
      </nav> 
    </article> 
    <footer class="copyright"><p>Copyright 2012 &copy; Teo Wei Pin, Anthony&nbsp;|&nbsp;<a href="http://www.yetanotherwebdesigner.com" class="inner-tooltip-invoke" title="用英语浏览这个网站">English</a>&nbsp;|&nbsp;<a href="http://www.yetanotherwebdesigner.com/jp" class="inner-tooltip-invoke" title="用日语浏览这个网站">日本語</a></p></footer>
    <script src="/js/jquery.min.js"></script> 
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/jquery.tools.min.js"></script>
    <script src="/js/yawd-non-en.js"></script>
    <script>
      $("textarea").focus();
      $("textarea").keypress(function(e){
      var tval=$("textarea").val(),
      tlength=tval.length,
      set=480,
      remain = parseInt(set - tlength);
      $("p.remain span").text(remain);
      if (remain <= 0 && e.which !== 0 && e.charCode !== 0) {
	  $("textarea").val((tval).substring(0, tlength - 1))
      }
      });
$("#cform").validate({
	      rules: {
		  name: "required",
		  email: {
		      required: true,
		      email: true
		  },
		  message: "required"
	      },
	      messages: {
		  name: "请输入至少两个字",
		  email: {
		      required: "请注明您的电邮",
		      email: "请输入正确的电邮地址"
		  },
		  message: "请输入至少两个字"
	      }
});
</script>
    <script src="/js/ajax-submit-ch.js"></script>
    <script src="//static.getclicky.com/js"></script>
    <script>try{ clicky.init(66561433); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
  </body>
  </html>
