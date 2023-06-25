<?php include("http://konversation.us/header.php"); ?>

<style type="text/css">
    body {
        background: url("balloon-end.jpg");
    } 
    
    .nav {
        z-index: 1;
        } 
        
    .title a {
        color: #000;
    }       
    
    .title a:hover {
        color: #e08e90;
    }   
    
    /*.preload_balloon {
        background: url("balloon-long.gif");
    } */  
    
    .balloon {
        display: block;
        width: 200px;
        height: 356px;
        position: absolute;
    }   
    
    #b1 {
        top: -100px;
        left: auto;
        right: -280px;
    }   
    
    #b2 {
        top: 350px;
        left: auto;
        right: -220px;
    }   
    
    #b3 {
        top: 630px;
        left: 25px;
    }   
    
    #b4 {
        top: 280px;
        left: -250px;
    }
    
    #b5 {
        top: -160px;
        left: -230px;
    }      
</style>

<h1 style="padding-top: 20px;"><img alt="easy" src="easy-title.png" /></h1>
<div id="container" style="width:auto;">
    <div class="nav" id="later">
        <a href="/shadow" style="color: #000" onmouseover="this.style.color='#b2e1c2'" onmouseout="this.style.color='#000'">&larr; shadow</a>
        <div class="clear"></div>
    </div>
    <div class="nav" id="earlier">
        <a href="/opulence" style="color: #000" onmouseover="this.style.color='#5b6598'" onmouseout="this.style.color='#000'">opulence &rarr;</a>
        <div class="clear"></div>
    </div>
      
    <p class="title">feat. <a href="http://marcelo-gutierrez.com/"  target="_blank">M A R C E L O</a></p>
    <a href="http://www.browntourage.com/magazine/konversation-easy-ft-m-a-r-c-e-l-o" style="color: #e08e90;text-shadow: 0 1px 1px rgba(255,255,255,.5);" target="_blank">Read Artist Interview</a>
    
    <div style="position:relative; width:600px; margin:30px auto 100px auto; text-align:center;">
        <div class="preload_balloon"></div>
        <img src="easy.jpg" />
    
        <img id="b1" class="balloon" src="https://s3-us-west-2.amazonaws.com/konversation/balloon-still.jpg" />
        <img id="b2" class="balloon" src="https://s3-us-west-2.amazonaws.com/konversation/balloon-still.jpg" />
        <img id="b3" class="balloon" src="https://s3-us-west-2.amazonaws.com/konversation/balloon-still.jpg" />
        <img id="b4" class="balloon" src="https://s3-us-west-2.amazonaws.com/konversation/balloon-still.jpg" />
        <img id="b5" class="balloon" src="https://s3-us-west-2.amazonaws.com/konversation/balloon-still.jpg" />
  
    </div>
    
    <div style="width:500px;text-align:right; margin: 0 auto;">
    creative : m a r c e l o & hawa<br />
    photography : hawa<br />
    model: m a r c e l o<br />
    dev: tonia
    </div>
    
    
    <div class="clear" style="height:300px;"></div>
    

    
</div>

<script>
var pop_counter = 0;
var pop_order = [0,4,1,5,2,3];
function pop_balloon() { 
    var delay_time = (pop_counter == 0) ? 2000 : 5900;
    if (pop_counter <= 5) {
        var $balloon = $("#b"+pop_order[pop_counter]);
        if ($balloon.length) $balloon.attr("src","https://s3-us-west-2.amazonaws.com/konversation/balloon-short.gif");
        var sup = setTimeout(function(){
            if ($balloon.length) $("#b"+pop_order[pop_counter]).attr("src","https://s3-us-west-2.amazonaws.com/konversation/balloon-end.jpg");
            pop_counter++;
            pop_balloon();
        }, delay_time);
    } else {
//        clearInterval(pop_time);
    }   
}   


$().ready(function() {
    window.onload=function(){
            setTimeout(function(){
                pop_balloon();
            }, 100);    
        };      
});
</script>

<?php include("http://konversation.us/footer.php"); ?>
