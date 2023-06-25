<?php require($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<style type="text/css">
.lift-wrap {
	height: 979px;
    overflow: hidden;
    position: relative;
}

.lift-image {
	position: absolute;
    left: 50%;
    margin-left: -653px;
    background:url('https://s3-us-west-2.amazonaws.com/konversation/liftedbg.jpg') no-repeat;
    width:1306px;
    height:979px;
    opacity:.8;
    filter: alpha(opacity=80);
}

#text {
    position: absolute;
    top: 100px;
    left: 0;
    width: 100%;
}

#text p {
    width: 720px;
    margin: 0 auto 15px auto;
    font-size: 23px;
    text-align: left;
    font-weight: 600;
    font-family: Garamond;
    -webkit-font-smoothing: antialiased;
    text-shadow: 0 1px 3px rgba(255,255,255,.4);
}

.lift-image2 {
	position: absolute;
    left: 50%;
    margin-left: -653px;
    background:url('https://s3-us-west-2.amazonaws.com/konversation/lifted.jpg') no-repeat;
    width:1306px;
    height:979px;
}
</style>

<h1>lifted</h1>
<div id="container">
    <div class="nav" id="later">
        <a href="http://konversation.us/sidewalk" style="color: #404040" onmouseover="this.style.color='#98775F'" onmouseout="this.style.color='#404040'">&larr; sidewalk</a>
        <div class="clear"></div>
    </div>
    <div class="nav" id="earlier">
        <a href="http://konversation.us/ptc" style="color: #404040" onmouseover="this.style.color='#874c9c'" onmouseout="this.style.color='#404040'">ptc &rarr;</a>
        <div class="clear"></div>
    </div>
        
    <div class="clear" style="height:50px;"></div> 
    
    <div class="lift-wrap">
         <div class="lift-image"></div>
         <div id="text">
             <p>(based on a true event)</p>
             <p>i can feel every piece of sand in my sandbag body. the curl of my joints crunches me uncomfortably so i just sit tight on this flight. im on the verge of sleep when the captain turns our attention to the right side of the plane- the side i'm on. it takes a few seconds to turn my head over, locking it in place over my right shoulder and releasing myself from the seat, the sand bag body dispersing into a million microscopic pieces to dissolve out of the window and on the other side of the universe.</p> 

             <p>im on the other side.</p>

             <p>my grains magnetize together and i'm watching only from my eyes a line of light coming from a lit up east coast launchpad. it's like watching a kid throw a paper cup telephone across a light well. it's sweet in that dumb innocent way, and also ineffective. the line of light dropped something and then carried on in warpspeed. i wanted to see how far my eyes could go with the rocket, how far into the universe could i see? am i seeing the past accelerate..or is it like i'm getting closer to the present moment- something like that.</p>

             <p>the light arches up toward some layer of the atmosphere, i'm literally watching a rocket from the point of view of probably nobody ever. there's a smoke trail that looks kind of like a caterpillar. what if the caterpillar was caught in a worm hole? would they make creepy crawly star babies?</p>

             <p>anyway, i'm in awe. i just watched humans send out a rocket ship to collect data from the beyond. i'm somewhere in the middle of human and "out there" enough to notice in this exact moment the peace of every grain in my body and where they might end up.</p>
         </div>
    </div>

    <div class="clear" style="height:75px;"></div>  
    
    <div class="lift-wrap">
         <div class="lift-image2"></div>
    </div>
    
    
    <div class="clear" style="height:100px;"></div> 
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
