<?php

session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link rel="stylesheet" href="main%20style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script src="jquery.uilock.js"></script>
    <script src="jquery.uilock.min.js"></script>
    </head>
    <body>
        <section class="header">
           <div class="sec">
             <video autoplay muted loop>
                <source src="videos/swim.mp4" type="video/mp4">
               </video>
            </div>
            <nav>
                <a href="https://www.spotify.com/us/download/windows/"><img src="images/spotify-logo-png-7053.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()" ></i>
                 <ul>
                    <li><a href="main.html">HOME</a></li>
                     <li><a href="#">ABOUT</a></li>
                     <li><a href="">BLOG</a></li>
                     <li><a href="contri.html">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        
        <div class="text-box">
            <h1>WellnesShip</h1>
            <p>Fitness Site.<br>Your one stop solution.</p>
            <a href="http://localhost:8501/" class="hero-btn"><span>Start Now</span></a>        
        </div>
        
        </section>
<!--quote section-->
        
<!-------2ND PAGE------>
        
<section class="page2">
    <h1>Welcome to WellnesShip</h1>
    <p>Some Quotes to Energize you before your Workout</p>
    
    <div class="row">
        <div class="page-col"> 
            <h3>KINGDOM!</h3>
            <p>Exercise is king. Nutrition is queen. Put them together and you’ve got a kingdom.</p>
        </div>
        <div class="page-col">
            <h3>Just Think!</h3>
            <p>You have to think it before you can do it. The mind is what makes it all possible.</p>
        </div>
        <div class="page-col">
            <h3>Keep Trying!</h3>
            <p>No matter how many mistakes you make or how slow you progress, you are still way ahead of everyone who isn’t trying.</p>
        </div> 
    </div>
        
        </section>
        
<!-------3RD PAGE------>
   <section class="page3">
       <h1>What would you like to do today?</h1>
       <p>These are the main features of our website. What would to like to try?</p>
        <div id="countdown_box">
	 <div id="countdown_title">&nbsp;</div>
	 <div id="countdown_div">&nbsp;</div>
	 <div id="countdown_msg"><p>Please drink a glass of water! STAY HYDRATED ≧◠‿◠≦✌</p></div>
 </div>
            
            <div class="page-col">
                <button class="learn-more" onclick="javascript:view_blog_countdown('hydrated.html','10')">CLICK HERE AND STAY HYDRATED</button><br />
            </div>
        <div class="row">
        <div class="page3-col">
            <video autoplay muted loop>
            <source src="videos/BMI%202.mp4" type="video/mp4">
            </video>
            <a href="index.html">
            <div class="layer">
            </div>
            </a>
            </div>
            <div class="page3-col">
            <video autoplay muted loop>
            <source src="videos/FOOD%20N%20CALORIE.mp4" type="video/mp4">
            </video>
            <a href="Food.html">   
            <div class="layer">
            </div>
            </a> 
          </div>
            <div class="page3-col">
            <video autoplay muted loop>
            <source src="videos/WORKOUT.mp4" type="video/mp4">
            </video>
            <a href="videoindex.html">
            <div class="layer">
            </div>
            </a>
          </div>
            <div class="page3-col">
            <video autoplay muted loop>
            <source src="videos/macros.mp4" type="video/mp4">
            </video>
            <a href="macros.html">
            <div class="layer">
            </div>
            </a>
          </div>
          <div class="page3-col">
            <video autoplay muted loop>
            <source src="videos/BMI%20CALCULATOR.mp4" type="video/mp4">
            </video>
            <a href="#">
            <div class="layer">
            </div>
            </a>
            </div>
            </div>
           
       
        
        </section>  
<!--------DRINKHEALTHY------->        
        <section class="page4">
            <h1>Before you go ahead, we would like to remind you to-</h1>

            <div class="sec">
             <video autoplay muted loop>
                <source src="videos/drink%20healthy.mp4" type="video/mp4">
               </video>
                
                <div class="text-box">
            <h1>DRINK HEALTHY :D</h1>
            </div>
            </div>
        
        </section>
        
<!--------EATHEALTHY------->
<section class="page5">
    <h1>AND ALSO</h1>
    
    <div class="sec">
         <video autoplay muted loop>
                <source src="videos/eat%20healthy.mp4" type="video/mp4">
               </video>
        
        <div class="text-box">
            <h1>EAT HEALTHY :D</h1>
        </div>    
    </div>
            
        
        </section>
<!--------page6------->
    <section class="testimonials">
       <h1>What our Testers say!</h1>
    <p>We are glad to see such positive reviews</p>
    
    <div class="row">
        <div class="testimonial-col"> 
            <img src="images/boy.png">
            <div>
            <p>The vibes I get while using this website is unreal. It is soooo amazingly designed, never seen such eye appealing fitness website. Would have given it 5 stars if there were more features. But otherwise this website is amazing and helps me in maintaing my physique!</p>
            <h3>Aman Hanspal</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>    
            </div>
        </div>
        <div class="testimonial-col"> 
            <img src="images/girl.png">
            <div>
            <p>I am in love with WellnesShip. The looks the responsiveness, the visuals all are up to the mark. I feel like using this website the whole day, it's that cool looking. Totally recommendable to all types of people.</p>
            <h3>Kimaya</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            </div>
        </div>
    </div>
         
</section>
        
<!--------page7-------> 
    <section class="page7">
                    
        <div class="row">
        <div class="page-col"> 
         <a href="contri.html"><button class="learn-more">Our Contributors</button></a>
        </div>
        <div class="page-col">
         <a href="https://earth.google.com/web/search/nerul+gyms/@19.03327381,73.01855651,8.01674993a,10960.39383998d,35y,0h,0t,0r/data=CigiJgokCTGMhrT1DDNAEQTY1IETBDNAGe6W7uhwQ1JAIaxUeSfvPlJA"><button class="learn-more">Gyms Near You</button></a>
        </div>
        <div class="page-col">
           <a href="https://open.spotify.com/playlist/37i9dQZF1DZ06evO3ZDXwt"><button class="learn-more">Wanna Vibe? Click this</button></a>
        </div> 
    </div>
           
</section>

<!--------footer------->
        
    <div class="foot">
        <h4>ABOUT US</h4>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-github"></i> 
            </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Kaif, Gaurav, Vaibhav & Aman</p>
        </div>
        
   
        
        
        
        
           
    
        
<!--------JAVASCRIPT------->
        
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px";
            }
            function load_url(url) {
	var load = window.open(url);
	}
            function do_countdown(duration) {
	 //10 seconds fix
	 start_num = duration;
	 var countdown_output = document.getElementById('countdown_div');

	 if (start_num > 0) {
	 countdown_output.innerHTML = format_as_time(start_num);
	 var t=setTimeout("update_clock(\"countdown_div\", "+start_num+")", 1000);
	 }

	 return false;
	 }
            	 function update_clock(countdown_div, new_value) {
	 var countdown_output = document.getElementById(countdown_div);
	 var new_value = new_value - 1;

	 if (new_value > 0) {
	 new_formatted_value = format_as_time(new_value);
	 countdown_output.innerHTML = new_formatted_value;

	 var t=setTimeout("update_clock(\"countdown_div\", "+new_value+")", 1000);
	 } else {
		//finish!
		countdown_output.innerHTML = "";
		$('#countdown_box').hide();
		
		//unlock UI
		$.uiUnlock();
		
		//perform anything here after the web page is unfrozen
	 }
	 }

	//helper function to calculate the time (seconds) remaining as minutes and seconds
	 function format_as_time(seconds) {
	 var minutes = parseInt(seconds/60);
	 var seconds = seconds - (minutes*60);

	 if (minutes < 10) {
	 minutes = "0"+minutes;
	 }

	 if (seconds < 10) {
	 seconds = "0"+seconds;
	 }

	 var return_var = minutes+':'+seconds;

	 return return_var;
	 }
            function view_blog_countdown(blog_url, duration) {
				load_url(blog_url);
				$('#countdown_box').show(); //countdown
				$('#countdown_title').html(blog_url);
				$.uiLock('');
				do_countdown(duration);
	  }
            $(document).ready(function() {
			$('#lock').click(function(){
				
				//show content
				$('#countdown_box').show(); //countdown
				
				//lock interface
				$.uiLock('');
				
				//start the countdown (unlocks interface at end)
				do_countdown();
				
			});
			
			//Initial settings
			$('#countdown_box').hide();
			
		});
        </script>
        
    </body>
</html>

<style>
    .foot{
    width: 100%;
    text-align: center;
    background: #00ffff;
    background-size: cover;
    background-position: center;
}
   .icons .fa{
        color: #dc143c;
        margin: 0 13px;
        cursor: pointer;
        padding 18px 0;
    }
    .fa-heart-o{
        color: #dc143c;
    }
#countdown_box {
	position:fixed;
	top:30%;
	left:40%;
	width:300px;
	border:4px solid blue;
	padding:70px;
	overflow: hidden;
	text-overflow: ellipsis;
    justify-content: center;
}
#countdown_title {
	font-family: tahoma;
	font-weight: bold;
	color: #dc143c;
	font-size: 18px;
}
#countdown_div {
	font-family: tahoma;
	font-weight: bold;
	font-size: 56px;
}
#countdown_msg p{
        color: #dc143c;
    }
.page4 h1{
    padding-bottom: 50px;
    font-size: 30px;
    font-weight: 600;
    color: #dc143c;
}
    .page3 .page-col{
        background: #191919;
    }

</style>
        
