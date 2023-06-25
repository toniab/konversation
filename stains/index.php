<!DOCTYPE html>
<head>
	<title>532 - Project 2</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

	<style type="text/css">
	body {
		margin: 0;
		padding: 0;
	}

	h1 {
		position: fixed;
		top: 15px;
		left: 15px;
		margin: 0;
		padding: 0;
		font-weight: 400;
	}

	.blue {
		color: #3f729b;
	}

	.clear {
		clear: both;
	}

	.insta_feed {
		font-family: 'Montserrat', "Helvetica Neue", Helvetica, sans-serif;
		width: 600px;
		margin: 20px auto;
	}

	#insta_feed_2 {
		width: 1124px;
		margin: 20px auto;
		overflow: hidden;
	}

	#insta_feed_2 .insta_post {
		float: left;
		margin: 20px;
	}

	.insta_post {
	    width: 520px;
    border: 1px solid #ccc;
    box-shadow: 0px 3px 6px #ccc;
    border-radius: 8px;
    margin-bottom: 20px;
	}

	.post_content {
		padding: 10px;
		width: 500px;
	}

	.user_info {
		margin-bottom: 10px;
	}

	.user_pic {
		display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 25px;
    vertical-align: middle;
    	margin-right: 10px;
	}

	.user_name {
		font-weight: bold;
		font-size: 14px;
	}

	.user_name:hover {
		text-decoration: underline;
	}

	.screenshot_wrapper {
		position: relative;
		height: 500;
		overflow: hidden;
	}

	.screenshot {
		width: 100%;
	}

	.play_button {
		    position: absolute;
    width: 200px;
    top: 152px;
    left: 152px;
	}

	.video_pad {
		padding: 100px 0;
		display: none;
	}

	.video_pad.active {
		display: block;
	}

	.video_wrapper {
		width: 500px;
		height: 300px;
		margin: 0;
	}

	.post_caption {
		font-weight: 200;
		font-size: 14px;
		line-height: 17px;
		color: #555;
    	margin: 10px 0 5px 0;
	}

	.post_stats {
		background: #eee;
		color: #999;
		padding: 10px;
		border-radius: 0 0 8px 8px;
	}

	.stat {
		margin-right: 10px;
		font-size: 14px;
	}

	.stat img {
		    vertical-align: bottom;
	}

	.logo {
		float: right;
	}
	</style>
</head>
<body>

<h1 id="header">we<br />dont<br /> dye</h1>

<div id="insta_feed_1" class="insta_feed" data-feed=1>
	<div id="chinwe1" class="insta_post">
		<div class="post_content">
			<div class="user_info">
				<img class="user_pic" src="http://d2145rpqkz4imh.cloudfront.net/chinwe_user.png" />
				<span class="user_name blue">lise_eye_view</span>
			</div>
			<div class="screenshot_wrapper">
				<img class="screenshot" src="http://d2145rpqkz4imh.cloudfront.net/chinwe1_screenshot.png" />
				<img class="play_button" src="http://d2145rpqkz4imh.cloudfront.net/play_button.png"/>
			</div>
			<div id="chinwe1_video" class="video_pad">
				<video class="video_wrapper">
		  			<source src="http://d2145rpqkz4imh.cloudfront.net/chinwe1_clip.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div class="clear"></div>
			<p class="post_caption">Some days srsly pull you in every direction. <span class="blue">#outheretrynawalk</span></p>
		</div>
		<div class="post_stats">
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/like_icon.png" /> 47 likes</span>
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/comment_icon.png" /> 6 comments</span>
			<span class="logo">Expigram</span>
		</div>
	</div>
</div>

<div id="insta_feed_2" style="display: none;" class="insta_feed" data-feed=2>
	<div id="yiwen" class="insta_post">
		<div class="post_content">
			<div class="user_info">
				<img class="user_pic" src="http://d2145rpqkz4imh.cloudfront.net/yiwen_user.png" />
				<span class="user_name blue">yejithaswisher</span>
			</div>
			<div class="screenshot_wrapper">
				<img class="screenshot" src="http://d2145rpqkz4imh.cloudfront.net/yiwen_screenshot.png" />
				<img class="play_button" src="http://d2145rpqkz4imh.cloudfront.net/play_button.png"/>
			</div>
			<div id="yiwen_video" class="video_pad">
				<video class="video_wrapper">
		  			<source src="http://d2145rpqkz4imh.cloudfront.net/yiwen_clip.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div class="clear"></div>
			<p class="post_caption">My moves so bomb you cant see me! But seriously, they couldnt..</p>
		</div>
		<div class="post_stats">
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/like_icon.png" /> 32 likes</span>
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/comment_icon.png" /> 4 comments</span>
			<span class="logo">Expigram</span>
		</div>
	</div>

	<div id="xien" class="insta_post">
		<div class="post_content">
			<div class="user_info">
				<img class="user_pic" src="http://d2145rpqkz4imh.cloudfront.net/xien_user.png" />
				<span class="user_name blue">jeannie_dreams</span>
			</div>
			<div class="screenshot_wrapper">
				<img class="screenshot" src="http://d2145rpqkz4imh.cloudfront.net/xien_screenshot.png" />
				<img class="play_button" src="http://d2145rpqkz4imh.cloudfront.net/play_button.png"/>
			</div>
			<div id="xien_video" class="video_pad">
				<video class="video_wrapper">
		  			<source src="http://d2145rpqkz4imh.cloudfront.net/xien_clip.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div class="clear"></div>
			<p class="post_caption">this place got me fixing problems I didnt even know I had. <span class="blue">#smh</span></p>
		</div>
		<div class="post_stats">
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/like_icon.png" /> 24 likes</span>
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/comment_icon.png" /> 2 comments</span>
			<span class="logo">Expigram</span>
		</div>
	</div>


	<div id="anaka" class="insta_post">
		<div class="post_content">
			<div class="user_info">
				<img class="user_pic" src="http://d2145rpqkz4imh.cloudfront.net/anaka_user.png" />
				<span class="user_name blue">i_cici</span>
			</div>
			<div class="screenshot_wrapper">
				<img class="screenshot" src="http://d2145rpqkz4imh.cloudfront.net/anaka_screenshot.png" />
				<img class="play_button" src="http://d2145rpqkz4imh.cloudfront.net/play_button.png"/>
			</div>
			<div id="anaka_video" class="video_pad">
				<video class="video_wrapper">
		  			<source src="http://d2145rpqkz4imh.cloudfront.net/anaka_clip.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<p class="post_caption">When ur whitney status but dont want to dance with somebody..</p>
		</div>
		<div class="post_stats">
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/like_icon.png" /> 32 likes</span>
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/comment_icon.png" /> 4 comments</span>
			<span class="logo">Expigram</span>
		</div>
	</div>
	<div style="clear:both;"></div>
</div>

<div id="insta_feed_3" style="display: none;" class="insta_feed" data-feed=3>
	<div id="chinwe2" class="insta_post">
		<div class="post_content">
			<div class="user_info">
				<img class="user_pic" src="http://d2145rpqkz4imh.cloudfront.net/chinwe_user.png" />
				<span class="user_name blue">lise_eye_view</span>
			</div>
			<div class="screenshot_wrapper">
				<img class="screenshot" src="http://d2145rpqkz4imh.cloudfront.net/chinwe2_screenshot.png" />
				<img class="play_button" src="http://d2145rpqkz4imh.cloudfront.net/play_button.png"/>
			</div>
			<div id="chinwe2_video" class="video_pad">
				<video class="video_wrapper">
		  			<source src="http://d2145rpqkz4imh.cloudfront.net/chinwe2_clip.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<p class="post_caption">Squad magic, breathe deep and get your life! <span class="blue">@yejithaswisher</span> <span class="blue">@jeannie_dreams</span> <span class="blue">@icici</span></p>
		</div>
		<div class="post_stats">
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/like_icon.png" /> 27 likes</span>
			<span class="stat"><img src="http://d2145rpqkz4imh.cloudfront.net/comment_icon.png" /> 2 comments</span>
			<span class="logo">Expigram</span>
		</div>
	</div>
</div>

<script>

function stop_all_videos() {
	var videos = $("video");
	for (var x=0; x < videos.length; x++) {
		videos.get(x).pause();
		video_end($("video:eq("+x+")"));
	}
}
function play_clip(e) {
	stop_all_videos();
	var $this = $(e.currentTarget);
	var title = $this.closest(".insta_post").attr("id");
	$this.hide();
	$("#" + title + "_video").addClass("active");
	var video = $("#" + title + "_video video").get(0);
	video.play();
	video.onended = function(e) { video_end($(this), true) };
}

NUM_BACKSTORIES_SEEN = 0;
END_SEEN = false;
function video_end(vid, true_end){
	true_end = true_end || false;
	var expand_header = false;
	var num_visible = 0;
	var baby_scroll = false;
	if (true_end) {
		var counter = vid.closest(".insta_feed").data("feed");
		if (counter == 1) {
			$("#insta_feed_1").fadeOut();
			$("#insta_feed_2").fadeIn();
			baby_scroll = true;
		} else if (counter == 2) {
			vid.closest(".insta_post").animate({"opacity":0},600);
			$("#insta_feed_3").fadeIn();
			NUM_BACKSTORIES_SEEN++;
			baby_scroll = true;
		} else if (counter == 3) {
			END_SEEN = 1;
		}
		if (END_SEEN) {
			if (NUM_BACKSTORIES_SEEN == 3) {
				expand_header = true;
			} else {
				var new_scroll_pos = 350;
				$('html, body').animate({
					scrollTop: new_scroll_pos
				}, 1000);
			}
		}
	}

	if (expand_header) {
		$(".insta_feed").fadeOut();
		$("#header").animate({
			"font-size":"200",
			"width": "100%",
			"top": 0
		},600).css("text-align", "center");
	} else if (baby_scroll) {
		var new_scroll_pos = window.scrollY + 350;
		$('html, body').animate({
			scrollTop: new_scroll_pos
		}, 1000);
	}

	vid.removeClass("active").prev(".screenshot_wrapper").show();
}

$().ready(function() {
	$(".screenshot_wrapper").click(function(e) { play_clip(e); });
})
</script>

</body>