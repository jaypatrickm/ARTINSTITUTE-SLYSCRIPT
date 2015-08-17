<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/slystyle.css" />
<link rel="stylesheet" type="text/css" media="all" href="fancybox/jquery.fancybox.css">
<script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.0.6"></script>
<script type="text/javascript">
$(document).ready(function() {
  
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
				
				$('#profile_body').hide();
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
		    $("html, body").animate({ scrollTop: 0 }, "slow");
  			return false;
		}
		
		function hideProfile () {
			$('#profile_body').slideUp(300);
			$('header').show();
		
		}
		
		
		$(".profile_link").toggle(showProfile, hideProfile);
		/*$(".profile_link").click(function() {
  			
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
    	
    </header>
   	 <?php include("includes/nav.php");?>
	 <div id="inner_top">
        	<ul>
        	<li><h6>select project:</h6></li>
        	<li><a href="zoo.php"><img src="sources/icon_zoo_sm.png" alt="SlyScript" /></a></li>
            <li><a href="tam.php"><img src="sources/icon_tam_sm.png" alt="SlyScript" /></a></li>
            <li><a href="gamehunter.php"><img src="sources/icon_gamehunter_sm.png" alt="SlyScript" /></a></li>
            <li><a href="dinosaurus.php"><img src="sources/icon_dinosaurus_sm.png" alt="SlyScript" /></a></li>
            <li><a href="kiosk.php"><img src="sources/icon_kiosk_sm.png" alt="SlyScript" /></a></li>
            <li><a href="ourblog.php"><img src="sources/icon_ourblog_sm.png" alt="SlyScript" /></a></li>
        	</ul>
       </div>
       <div id="inner_body">
     	
       <div id="inner_middle">
       		<div id="inner_mid_left">
            	<img src="sources/monitor_tam2.png" alt="SlyScript" />
                <img src="sources/innerimage_tam3.png" alt="SlyScript" />
                <img src="sources/innerimage_tam4.png" alt="SlyScript" />
            </div>
            <div id="inner_mid_right">
            	<ul>
                	<li><img src="sources/icon_zoo.png" /> <p id="TAM_title">Tomorrow's Aeronautical Museum</p></li>
                    <li><h5>type:</h5><p class="mid_centering">Website</p></li>
                    <li><h5>role:</h5><p class="mid_centering" id="space_fix">Front-End Designer/Coder</p></li>
                    <li><h5>skills:</h5><p class="mid_centering">HTML/CSS/Javascript/jQuery</p></li> 
                </ul>
                <p><a href="zoo2.php"><h5 id="launch_space">Launch Project >></h5></a></p>
                <h1>Executing a clever hierarchy</h1>
              
                <p class="inner_padding">Tomorrow's Aeronautical Museum (TAM) is a non-profit organization that helps underprivileged kids stay out of trouble and guides them to become future leaders. The demographic for this site are parents, businesses, and philanthropists. The challenge was to discover a way to let the user immediately recognize the kind of organization they are while also organizing all of the information into a way that was easy to navigate. My solution was to create a website that made sure every section was created to successfully look impressive on its own.</p>
                <p class="inner_padding"> By designing everything within a grid I was able to make it seem as if there wasn't a block of information that you had to read through, instead, the text is carefully spaced out and accompanied by images representing that body of text. The navigation is also done using verb words identifying what you might be trying to do at the site, such as Learn, Participate, or Help. TAM was a great way to showcase how the basics of a layout can cleverly push your website to the next level.</p>
          
            </div>
       </div>
       <div id="inner_bottom">
        	<ul>
        	<li><h6>select project:</h6></li>
        	<li><a href="zoo.php"><img src="sources/icon_zoo_sm.png" alt="SlyScript" /></a></li>
            <li><a href="tam.php"><img src="sources/icon_tam_sm.png" alt="SlyScript" /></a></li>
            <li><a href="gamehunter.php"><img src="sources/icon_gamehunter_sm.png" alt="SlyScript" /></a></li>
            <li><a href="dinosaurus.php"><img src="sources/icon_dinosaurus_sm.png" alt="SlyScript" /></a></li>
            <li><a href="kiosk.php"><img src="sources/icon_kiosk_sm.png" alt="SlyScript" /></a></li>
            <li><a href="ourblog.php"><img src="sources/icon_ourblog_sm.png" alt="SlyScript" /></a></li>
        	</ul>
       </div>
     </div>
     <?php include("includes/footer.php");?>
</div>
</body>
</html>