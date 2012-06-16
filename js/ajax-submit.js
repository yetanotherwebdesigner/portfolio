$(document).ready(function(){
		      $("input.submit").click(function(e){
      $("p.submit input").css("background-position","1em 50%");
      var dataString = 'name='+$("input#name").val()+'&email='+$("input#email").val()+'&message='+$("textarea#message").val();
      e.preventDefault();
      $.ajax({
      type:"POST",
      url:"sendmail.php",
      data:dataString,
      success: function(){
      $("div.postcard").animate({
      height:['toggle','swing'],width:['toggle','swing'],top:'153',left:'300'
      },500
      ).before("<p>Thank you for your message. I will get back to you soon.</p>");
      $("div.postbox").css("top","45px");
      $(".copyright").css("margin-top","650px");
	  $("h1").focus();
      }
      });
      });
      });