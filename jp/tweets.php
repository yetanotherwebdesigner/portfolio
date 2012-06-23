<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="ja"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="ja"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="ja"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="ja"><!--<![endif]-->
  <!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="ja"><!--<![endif]-->
  <head>
    <title>ツイート | Yet Another Web Designer</title>
    <meta charset="utf-8"/> 
    <meta name="author" content="Teo Wei Pin, Anthony"/> 
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
    <link rel="stylesheet" media="only screen and (min-width: 320px)" href="/css/mobile-jp.css">
    <link rel="stylesheet" media="only screen and (min-width: 768px)" href="/css/desktop.css">
    <link rel="stylesheet" media="only screen and (min-width: 768px)" href="/css/desktop-jp.css">
    
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
    <h1 class="title"><a href="/jp">Yet Another Web Designer</a></h1>
    <article class="content" id="tweets">
      <div id="organizer-wrapper">
	<div class="organizer holder">
	  <h2><a title="ぼくのTwitterページを見てください" href="http://twitter.com/yetanotherwebd" target="blank">ツイート</a></h2>
	  <p>もう一人のウェブデザイナーのツイートだ。こうやっで
	    毎日学んだウェブ開発やウェブデザインのことを記録して、
	    そして世界とシェアしようと思います。</p>
	  <div id="ribbon-top"></div>
	  <div class="scroll-pane">
	    <div class="tweet holder content"></div>
	  </div>
	  <a title="ぼくのTwitterページをご覧になってください" class="inner-tooltip-invoke" id="twitter-home" href="http://twitter.com/yetanotherwebd"><img width="42" height="30"  src="/images/twitter-small.png" alt="Twitterのロゴ" /></a>
	</div><!-- ends .organizer holder-->
      </div><!-- ends #organizer-wrapper-->
      <nav id="menu">
	<a href="portfolio.php" id="snapshots-small" title="作品集">作品集</a>
	<a href="contact.php" id="contact-small" title="連絡">連絡</a>
      </nav>
    </article>
    <footer class="copyright"><p>Copyright 2012 &copy; Teo Wei Pin, Anthony&nbsp;|&nbsp;<a href="http://www.yetanotherwebdesigner.com" class="inner-tooltip-invoke" title="英語でこのサイトをご覧になってください">English</a>&nbsp;|&nbsp;<a href="http://www.yetanotherwebdesigner.com/ch" class="inner-tooltip-invoke" title="中国語でこのサイトをご覧になってください">中文</a></p></footer>
    <div class="error"><p>ツイートをロードするために、Javascriptを有効に設定して
	ください。それとも、下記のTwitterイメージをクリックして
	ぼくのTwitterページをご覧になってください。</p></div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.jscrollpane.min.js"></script>
    <script src="/js/jquery.tweet.js"></script>
    <script>$(".tweet").tweet({username:"yetanotherwebd",count:3,refresh_interval:10,loading_text:"ローディング..."});</script>
    <script src="/js/jquery.tools.min.js"></script>
    <script src="/js/yawd-non-en.js"></script>
    <script>$(document).ready(function(){
      $(".scroll-pane").bind(
				'jsp-initialised',
				function(event, isScrollable)
				{
      $j(".jspDrag").attr( 'title', 'リボンをドラッグしてみてください' ).addClass("inner-tooltip-invoke");$j(".inner-tooltip-invoke[title]").tooltip({effect:"fade",delay:5,tipClass:'inner-tooltip'});
				}
			);
      $(".scroll-pane").jScrollPane({verticalDragMinHeight:200})
      });
    </script>
    <script src="//static.getclicky.com/js"></script>
    <script>try{ clicky.init(66561433); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66561433ns.gif" /></p></noscript>
  </body>
  </html>
