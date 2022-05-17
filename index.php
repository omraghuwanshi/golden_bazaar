
<?php 
include ("config.php");
/*error_reporting(E_PARSE | E_ERROR);*/

$sqlm = "SELECT * From morning_last_update where s_no='2'" ;
$sqle = "SELECT * From evening_last_update where s_no='2'" ;
									
$Number1m="";
$Number2m="";
$Number3m="";
$Number4m="";
$Number5m="";
$Number6m="";
$Number7m="";
$Number8m="";

$Number1e="";
$Number2e="";
$Number3e="";
$Number4e="";
$Number5e="";
$Number6e="";
$Number7e="";
$Number8e="";


$resultm = mysqli_query($conn, $sqlm);

	      if (mysqli_num_rows($resultm)>0) 
{
         // output data of each row
         while($rowm = mysqli_fetch_assoc($resultm)) 
	     {
			
             $Number1m = $rowm['n1'];
             $Number2m= $rowm['n2'];
             $Number3m = $rowm['n3'];
			 $Number4m =$rowm['n4'];
			 $Number5m = $rowm['n5'];
             $Number6m= $rowm['n6'];
             $Number7m = $rowm['n7'];
			 $Number8m =$rowm['n8'];
		 }
} 
$resulte = mysqli_query($conn, $sqle);

	      if (mysqli_num_rows($resulte)>0) 
{
         // output data of each row
         while($rowe = mysqli_fetch_assoc($resulte)) 
	     {
			 
             $Number1e = $rowe['n1'];
             $Number2e= $rowe['n2'];
             $Number3e = $rowe['n3'];
			 $Number4e = $rowe['n4'];
             $Number5e= $rowe['n5'];
             $Number6e = $rowe['n6'];
			 $Number7e = $rowe['n7'];
             $Number8e= $rowe['n8'];
            
		 }
}
?>


<!DOCTYPE html>
<!-- 
Version: 1.0.0
Author: Avinash Sharma & Om Raghuwanshi
Website: http://www.goldenbazaar.in/
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]-->
<!-- Begin Head -->
<head>
<title>Golden Bazaar</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="Numerology">
<meta name="keywords" content="Astrology, horoscopes, numerology, Golden Bazaar">
<meta name="author" content="Avinash Sharma & Om Raghuwanshi" >
<meta name="MobileOptimized" content="320">
<!--Srart Style -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
<!-- Favicon Link -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png">
</head>
<body>
<!-- Header Start 
<div class="ast_top_header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ast_contact_details">
					<ul>
						
						<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@goldenbazaar.in</a></li>
					</ul>
				</div>
				<div class="ast_autho_wrapper">
					<ul >
						<li style="border:1px solid red; padding-right:20px; padding-top:3px;padding-bottom:3px; margin-bottom: -2px;"><a class="popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp &nbsp  Log In</a></li>
						
					</ul>
					<div id="login-dialog" class="zoom-anim-dialog mfp-hide">
					    <h1> Golden Bazaar Login </h1>
						
						<form method="post" action="login.php">
							<input type="email" placeholder="Email" name="Email" required>
							<input type="password" placeholder="Password" name="Password" required>
							<button type="submit" class="ast_btn" name="Submit">Login</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div> -->
<div class="ast_header_bottom">
	<div class="container fixed" style="padding-top:8px;" >
		<div class="row" >
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="ast_logo" style="padding-top:5px">
					<a href="index.html"><img src="images/header/logo.png" alt="Golden Bazaar " title="Logo"></a>
					<button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="ast_main_menu_wrapper">
					<div class="ast_menu">
						<ul>
							<li><a href="index.php" class="active">Home</a>								
							</li>
							<li><a href="reportmorning.php">Morning Reports</a></li>
							<li><a href="reportevening.php">Evening Reports</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header End -->  
<!--Slider Start-->
<div class="ast_slider_wrapper" style="background-image: url(images/header/backno.gif);">
	<div class="ast_banner_text">
		<div class="starfield">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<div class="ast_waves">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="ast_waves2">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="ast_waves3">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="ast_bannertext_wrapper">
		   
			<h1>Numerology revels the will of God</h1>
			<ul class="ast_toppadder40 ast_bottompadder50">
				<li>Numerology</li>
				<li>Horoscopes</li> 
				
			</ul>
			
		</div>
	</div>
</div>
<!--Slider End-->
<!--About Us Start-->
<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>about <span>Numerology</span></h1>
					<p>Start to learn something about Numerology</p>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-7 col-xs-push-0">
				<div class="ast_about_info_img">
					<img src="images\content\numerology 300.png" alt="About" style="padding-top:50px;">
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-5 col-xs-pull-0">
				<div class="ast_about_info">
					<h4>know about Numerology</h4>
					<p>Numerology is any belief in the divine or mystical relationship between a number and one or more coinciding events.It is also the study of the numerical value of the letters in words, names and ideas. It is often associated with the paranormal, alongside astrology and similar divinatory arts.</p>
					<p>Numerology is the study of numbers, and the occult manner in which they reflect certain aptitudes and character tendencies, as an integral part of the cosmic plan. Each letter has a numeric value that provides a related cosmic vibration. </p>	
				</div>
			</div>
		</div>
	</div>
</div>
<!--About Us End-->
<!-- Horoscope start-->

	<div class="container-fluid" style="padding-top:70px; padding-bottom:50px;  background-color:#f7f8f9;>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading" style="padding-top:70px; padding-bottom:1px; margin-bottom: 0px;">
					<h1>Numerology <span>Horoscope</span></h1>
					<p>Get the todays latest Numerology Horoscope by Golden Bazaar</p>
				</div>
			</div>
		</div>	
	</div>
		
				<!-- cards section-->
               <section class="card-section-imagia" style="background-color:#f7f8f9;">
        <div class="container" >
            <div class="row">
			 <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" ></div>
				<div class="col-sm-4 col-md-4 col-lg-6 offset-lg-1 offset-xl-1">
                    <div class="card-container-imagia" style="background-color:white;">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img src="images/content/mimage.jpg" alt=""></div>
                                <div class="user-imagia"><img src="images/content/sun.jpg" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia" style="color:#ff9502;">GOLDEN MORNING</h3>
                                    <h5 class="subtitle-imagia" style="padding-top:5px;">Time: 10:45 AM - 12:30 PM </h5>
                                   <h2 class="text-center">
									<span style=" color: red">&nbsp <?php echo $Number1m; echo $Number2m; echo $Number3m ; ?> </span>&nbsp-&nbsp
									<span style=" color: red"><?php echo $Number4m ;echo $Number5m ;  ?> </span>&nbsp-&nbsp
									<span style="color: red"><?php echo $Number6m ; echo $Number7m ; echo $Number8m ; ?> </span>&nbsp
									</h2>
                                </div>
                               <div class="reportwrap"><a href="reportmorning.php"><button class="reportbutton">Check Previous Report</button></a></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" ></div>
				</div>
				
				<div class="row">
			 <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" ></div>
				<div class="col-sm-4 col-md-4 col-lg-6 offset-lg-1 offset-xl-1">
                    <div class="card-container-imagia" style="background-color:white;">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img src="images/content/nimage.jpg" alt=""></div>
                                <div class="user-imagia"><img src="images/content/moon.png" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                <h3 class="name-imagia" style="color:#e82c2c">GOLDEN EVENING</h3>
                                    <h5 class="subtitle-imagia" style="padding-top:5px;">Time: 03:45 PM - 05:45 PM </h5>
                                   <h2 class="text-center">
									<span style=" color: red">&nbsp <?php echo $Number1e ; echo $Number2e ; echo $Number3e ; ?> </span>&nbsp-&nbsp
									<span style=" color: red"><?php echo $Number4e ; echo $Number5e ; ?> </span>&nbsp-&nbsp
									<span style="color: red"><?php echo $Number6e ; echo $Number7e ; echo $Number8e ; ?> </span>&nbsp
									</h2>
								</div>
                                <div class="reportwrap"><a href="reportevening.php"><button class="reportbutton" >Check Previous Report</button></a></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" ></div>
				</div>
				
		     </div>
        
    </section>		 
       
    
            <!-- cards section-->	
			
    
<!-- Horoscope End-->
<!-- About Golden Bazaar start-->

	<div class="container-fluid" style="padding-top:70px; padding-bottom: 70px;>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Know About <span>Golden Bazaar</span></h1>
					<p>About Company- at Golden bazaar, get daily numerological sets and series updated 4 times a day, </p>
					<p>so never go wrong, your daily numerology at your fingertips.</p>
					<p>Also get previous records of numeric sets and series at a glance.</p>
								
				</div>
			</div>
	
		</div>
	</div>
<!-- About Golden Bazaar End-->


<!-- Footer wrapper start
<div class="container-fluid" style="background-color: black;padding-top:70px; padding-bottom: 20px;">
		<div class="row">
		
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ast_copyright_wrapper">
					<p>&copy; Copyright 2018, All Rights Reserved, <a href="#">GOLDEN BAZAAR</a>&nbsp &nbsp Powered by <a href="https:\\www.techwormsolutions.com">Techworm Solutions</a></p>				
				</div>			
			</div>	
		</div>	
	</div>
 Footer wrapper End-->
<!--Main js file Style--> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<!--Main js file End-->
</body>
</html>