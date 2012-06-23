<!-- Google Web font Loader -->
      WebFontConfig = {
      google: { families: [ 'Orbitron', 'Dancing Script' ] }
      };
      (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
      })();
$j("#menu a[title]").tooltip({effect:"fade",opacity:.9, delay:5});$j(".inner-tooltip-invoke[title]").tooltip({effect:"fade",delay:5,tipClass:'inner-tooltip'});

