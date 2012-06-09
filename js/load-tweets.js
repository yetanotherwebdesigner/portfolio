      $(document).ready(function(){
      var pageSize=5;
      var username='yetanotherwebd';
      var currentPage=1;
      var appendTweet=function(tweet,id){
      $("<p />").html(tweet)
      .append($("<a />")
      .attr("href", "http://twitter.com/" + username + "/status/" + id)
      .attr("class","inner-tooltip-invoke")
      .attr("title", "Go to Twitter status")
      .append($("<img />")
      .attr("src", "images/link.png")
      )
      )
      .appendTo($(".tweet"));
      };
      var loadTweets = function() {
		var url = "http://twitter.com/status/user_timeline/"+ username + ".json?count="+pageSize+"&page="+currentPage+"&callback=?";
		$.getJSON(url,function(data) {
			$.each(data, function(i, post) {
				appendTweet(post.text, post.id);
			});
			// We're done loading the tweets, so hide the overlay and update the UI
			$("#overlay").fadeOut();
		});

	};
      loadTweets();
      $(".tweet").scroll(function() {
      // We check if we're at the bottom of the scrollcontainer
      if ($(this)[0].scrollHeight - $(this).scrollTop() == $(this).outerHeight()) {
      
      // If we're at the bottom, show the overlay and retrieve the next page
      currentPage++;
      $("#overlay").fadeIn();
      loadTweets();
      }
      });
      });