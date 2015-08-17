<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--[if lte IE 8]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/slystyle.css" />
<link rel="stylesheet" type="text/css" media="all" href="fancybox/jquery.fancybox.css">
<script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.0.6"></script>
<script type="text/javascript">
$(document).ready(function() {
 	document.createElement('header');
	document.createElement('nav');
        //Calculate the height of <header>
        //Use outerHeight() instead of height() if have padding
        var aboveHeight = $('header').outerHeight();
 
	//when scroll
        $(window).scroll(function(){
 
	        //if scrolled down more than the header’s height
                if ($(window).scrollTop() > aboveHeight){
 
	        // if yes, add “fixed” class to the <nav>
	        // add padding top to the #content 
            // (value is same as the height of the nav)
                $('nav').addClass('fixed').css('top','0').next()
                .css('padding-top','60px');
				
	
                } else {
 
	        // when scroll up or less than aboveHeight,
            //  remove the “fixed” class, and the padding-top
                $('nav').removeClass('fixed').next()
                .css('padding-top','0');
                }
        });
		$('#profile_body').hide();

		function showProfile () {
			$('header').hide();
			$('#profile_body').slideDown(500);
		    $("html, body").animate({ scrollTop: 0 }, 1000);
  			return false;
		}
		function hideProfile () {
			$("html, body").animate({ scrollTop: 0 }, 1000);
		
		}
		
		function portfolio1 () {
			$("html, body").animate({ scrollTop: $("#portfolio").offset().top}, 1000);
		
		}
		
		function portfolio2 () {
			$("html, body").animate({ scrollTop: $("#portfolio").offset().top}, 1000);
  			
		}
		
		
		
		$(".portfolio_link").bind('click', function() {
  			
			$("html, body").animate({ scrollTop: $("#portfolio").offset().top}, 1000);
  		
			
		});
		
		$(".portfolio_link").toggle(portfolio1, portfolio2);
		$(".profile_link").toggle(showProfile, hideProfile);
		/*$(".profile_link").click(function() {
  			
			$("html, body").animate({ scrollTop: 0 }, "slow");
  			return false;
			
		});
				/*
		$(".profile_link").bind("click", function(event){
			$('header').hide();
			$('#profile_body').slideDown(500);
		    $("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});*/



});


</script>
<title>Sly Script</title>
</head>

<body>
<?php include("includes/contact.php");?>
<div id="wrapper">
	<div id="profile_body">
    	<h1>Profile</h1>
    	<div id="profile_col1">
            	<h2>I'm fun to work with, I swear</h2>
            	<p>I’m Jay Manalansan, a web designer and web developer from the Art Institute of Orange County a college of Argosy University. I’m from Gardena, CA, and I’ve always been a creative person. I’m really into indie and electronic music. I grew up watching and reading Harry Potter and I will love it even after all this time. I like all things that are awesome. I have 3 dogs and let stray cats sleep around my house. I’m curious by nature and it fuels my growing insightfulness. I bring art and typography into all of my projects because it’s the simplest way to convey an experience; and I always want everyone to feel just as fun and clever as I do. </p>
                <h2>Feeling Sly Script</h2>
                <p>Sly script represents my identity as a web creator. Just like a fox I am clever, quick-thinking, and adaptable. Like a fox scanning its surroundings, I have the ability to research competitive companies and modern web design technologies. Like a fox hunting for food, I am great at problem solving front-end code and development. Like a fox meeting other animals, I am flexible and adaptable in my relationships with clients, bosses, and friends.  Fun, humorous, and maybe a tad bit mischievous, all of my abilities have helped me transcend into a great web designer. </p>
   		</div>
        
        <div id="profile_col2">
        	<h2>Things I know pretty well</h2>
                <ul>
                	<li>
                    	<p>HTML</p>
                        <p>CSS</p>
                        <p>Javascript</p>
                        <p>jQuery</p>
                        <p>PHP</p>
                        <p>MySQL</p>
                    </li>
                    
                    <li class="pro_col2_shift">
                    	<p>Branding</p>
                        <p>E-Commerce</p>
                        <p>User Experience/Interaction</p>
                        <p>Interface Design</p>
                        <p>Web Design</p>
                        <p>Content Management Systems</p>
                        <p>Adobe Creative Suite</p>
                    </li>
                </ul>
                
                <h2>What I look for</h2>
                <p>I am always looking for ways to strengthen and test my design capabilities. I find the best ways to grow are when you are working with teams, and you can have these immediate exchange of ideas and knowledge. I am a quick learner that pays very close attention to details and someday I want to let my natural born leader quality shine. </p>
                
                <h2><a href="sources/slyresume.pdf" alt="resume" target="_blank">My Resume</a></h2>
        </div>
           
    </div>
	<header>
    	<h1>Clever. <br />Quick-thinking. Adaptable.</h1>
        <p>Sly Script considers clever front-end problem solving, excellent research and development of web concepts, and quality interpersonal relationships key components for an amazing web experience.</p>
    </header>
 
   	 <?php include("includes/nav.php");?>
	
    <div class="content" id="portfolio">
    	<div id="port_body">
        <div id="portfolio">
        	<h1>Portfolio</h1>
        </div>
     	<ul>
        	<li><a href="zoo.php"><img src="sources/projectzoo.png" alt="SlyScript" /><p><img class="icon_shift" src="sources/icon_zoo.png" alt="SlyScript" /> Zoo Adventure - Website</p></a><p class="port_desc">An interactive story designed for children.</p></li>
            <li><a href="tam.php"><img src="sources/projecttam.png" alt="SlyScript" /><p><img class="icon_shift" src="sources/icon_tam.png" alt="SlyScript" /> Tomorrow's Aeronautical Museum - Website</p></a><p class="port_desc">A website for a non-profit organization helping underpriveleged kids.</p></li>
            <li><a href="gamehunter.php"><img src="sources/projectgamehunter.png" alt="SlyScript" /><p><img src="sources/icon_gamehunter.png" alt="SlyScript" /> Game Hunter - Website</p></a><p class="port_desc">An E-Commerce website selling video games.</p></li>
            <li><a href="dinosaurus.php"><img src="sources/projectdinosaurus.png" alt="SlyScript" /><p><img src="sources/icon_dinosaurus.png" alt="SlyScript" /> Dinosaurus - Website</p></a><p class="port_desc">A fun informational website about dinosaurs.</p></li>
            <li><a href="kiosk.php"><img src="sources/projectkiosk.png" alt="SlyScript" /><p><img src="sources/icon_kiosk.png" alt="SlyScript" /> Art Institute - Interactive Kiosk</p></a><p class="port_desc">An interactive kiosk to display the work of Art Institute graduates.</p></li>
            <li><a href="ourblog.php"><img src="sources/projectourblog.png" alt="SlyScript" /><p><img src="sources/icon_ourblog.png" alt="SlyScript" /> Our Blog - Concept</p></a><p class="port_desc">A fresh new take on online blogging.</p></li>
        </ul>
     </div>
	<?php include("includes/footer.php");?>
    </div>

</div>
</body>
</html>