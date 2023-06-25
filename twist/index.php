<?php require($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<style type="text/css">
    .content_800 {text-align:center;}
    .content_800 img {display: block; margin: 0 auto;}
.content_800 p {width: 500px; margin: 0 auto 20px auto; font-size: 14px; line-height: 17px; text-align: left;}
	.content_800 p a {color:#5c93d6;}
	.content_800 p a:hover {text-decoration:underline;}
	
	#fade_wrapper {
		position: relative;
	}
	#fade_wrapper img {
		position: absolute;
		top: 0;
		left: 0;
	}
	#dark {
		display: none;
	}	
</style>

<h1 style="margin-bottom:0;">twist</h1>
<div id="container" style="width:1000px;"> 
    <div class="nav" id="later">
        <a href="http://konversation.us/opulence" style="color: #000" onmouseover="this.style.color='#5b6598'" onmouseout="this.style.color='#000'">&larr; opulence</a>
        <div class="clear"></div>
    </div>
    <div class="nav" id="earlier">
        <a href="http://konversation.us/passageway" style="color: #000" onmouseover="this.style.color='#a2a2a2'" onmouseout="this.style.color='#000'">passageway &rarr;</a>
        <div class="clear"></div>
    </div>

    <p class="title">FEATURING <a href="http://tarabyars.tumblr.com"  target="_blank" style="color: #e48556;">Tara Byars</a></p>
    <a href="http://browntourage.com/magazine/twist-ft-tara-byars" target="_blank" style="color: #e48556;">Read Artist Interview</a>

    <div class="clear" style="height:25px;"></div>
    
    <iframe width="100%" height="600" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147432663&amp;auto_play=true&amp;hide_related=false&amp;visual=true"></iframe>
    Cover Art & Rap by Tara <br />
    Visceral Tribe ft. Rave-On Beautiful
    
    <div id="fade_wrapper" style="width: 1000px; height: 700px;">
        <!--<img id="map" class="rotating-item" src="twist-map.jpg" />-->
        <img id="light" class="rotating-item" src="https://s3-us-west-2.amazonaws.com/konversation/twist-light.jpg" />
        <img id="dark" class="rotating-item" src="https://s3-us-west-2.amazonaws.com/konversation/twist-dark.jpg" />
        <!--<img id="face" class="rotating-item" src="twist-face.jpg" />-->
        <div class="clear" style="height:25px;"></div>
    </div>
    Edit by Tonia<br />
    Using Original Photography by Tara<br />
    
          
    <div class="clear" style="height:100px;"></div>

</div>

<script type="text/javascript">
$(window).load(function() { //start after HTML, images have loaded
 
    var InfiniteRotator =
    {
        init: function()
        {
 
            //cross-fade time (in milliseconds)
            var fadeTime = 900;
 
            //count number of items
            var numberOfItems = $('.rotating-item').length;
 
            //set current item
            var currentItem = 0;
 			var prevItem;
 			var reverseDir = false;
            //loop through the items
            var infiniteLoop = setInterval(function(){
 				
                if(currentItem == numberOfItems-1){
					//console.log("make rd true");
					reverseDir = true;
                }else if (currentItem == 0 && reverseDir) {
					//console.log("make rd false");
					reverseDir = false;
				}	
				
				prevItem = currentItem;
				if (reverseDir) {
					currentItem--;
					$('.rotating-item').eq(prevItem).fadeOut(fadeTime);
				} else {
                    currentItem++;
					$('.rotating-item').eq(currentItem).fadeIn(fadeTime);
                }
				console.log(currentItem);

				
 
            }, fadeTime);
        }
    };
 
    InfiniteRotator.init();
 
});
</script>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
