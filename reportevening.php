<?php 
include ("config.php");

$Number1e="";
$Number2e="";
$Number3e="";
$Number4e="";
$Number5e="";
$Number6e="";
$Number7e="";
$Number8e="";

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
<div class="ast_header_bottom" >
	<div class="container-fluid fixed" style="padding-top:8px; background-color:black; " >
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
							<li><a href="index.php">Home</a>								
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

<!-- Evening Report start-->

	<!-- Horoscope start-->

	<div class="container-fluid" style="padding-top:170px; padding-bottom:0px;  background-color:#f7f8f9;>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0" style= "padding-bottom:0px;">
				<div class="ast_heading" style="padding-top:70px; padding-bottom:1px; margin-bottom: 0px;">
					<h1>Evening <span>Numerology Horoscope</span> Reports</h1>
					<p>Get the todays latest Numerology Horoscope by Golden Bazaar</p>
					<p style="color: orange; padding-top:30px; padding-bottom:30px; ">_______________________________________</p>
					<br><br><br><br><br><h3>Current Report<h3><br>
				</div>
			</div>
		</div>	
	</div>
		
				<!-- cards section-->
               <section class="card-section-imagia" style="background-color:#f7f8f9; >
        <div class="container"  >
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" ></div>
				<div class="col-sm-4 col-md-4 col-lg-6 offset-lg-1 offset-xl-1">
                    <div class="card-container-imagia" style="background-color:white; height: 350px;">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img src="images/content/nimage.jpg" alt=""></div>
                                <div class="user-imagia"><img src="images/content/moon.png" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia" style="color:#ff9502;">GOLDEN EVENING</h3>
									<?php
									
									
									$sqle = "SELECT * From evening_last_update where s_no='2'" ;
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
                                    <h5 class="subtitle-imagia" style="padding-top:5px;">Time: 03:45 PM - 05:45 PM </h5>
                                    <h2 class="text-center">
									<span style=" color: red">&nbsp<?php echo $Number1e ; echo $Number2e ; echo $Number3e ;?></span>&nbsp-&nbsp
									<span style=" color: red">&nbsp <?php echo $Number4e ;echo $Number5e ; ?> </span>&nbsp-&nbsp
									<span style="color: red">&nbsp <?php echo $Number6e ; echo $Number7e ; echo $Number8e ;?></span>&nbsp
									</h2>
                                </div>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" ></div>
            </div>
        </div>
    </section>		 
       
    
            <!-- cards section end-->	
<div class="container-fluid" style="padding-top:20px; padding-bottom:0px;  background-color:#fff;>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0" style= "padding-bottom:0px;">
				<div class="ast_heading" style="padding-top:20px; padding-bottom:1px; margin-bottom: 0px;">

					<p style="color: orange; padding-top:15px; padding-bottom:30px; ">_______________________________________</p>
					<h3>Previous Evening Numerology Horoscope Report<h3><br>
				</div>
			</div>
		</div>	
	</div>	
	
   <div class="container">
   <div class="table-responsive" style="margin-left: 0px;margin-right: 20px;">
        <table class="table table-striped table-bordered table-hover table-sm">
            <thead>
                <tr class="table-primary" style="background-color:#ff6f00; color:white; ">
                     <th style=" text-align:center; width: 150px">DATE</th>
                    
                    <th style=" text-align:center; width: 50px">MONDAY</th>
                    <th style=" text-align:center; width: 50px">TUESDAY</th>
                    <th style=" text-align:center; width: 50px">WEDNESDAY</th>
                    <th style=" text-align:center; width: 50px">THURSDAY</th>
                    <th style=" text-align:center; width: 50px">FRIDAY</th>
                    <th style=" text-align:center; width: 50px">SATURDAY</th>
                   
					</tr>
            </thead>
            <tbody>
	        <?php
				     
					 $sql ="SELECT * FROM evening_record order by wk_start_date desc";
					 $result = mysqli_query($conn,$sql);
					 
					 if (mysqli_num_rows($result) > 0)
					 {
						 while($row=mysqli_fetch_assoc($result))
						 {
					 
				 ?>		  
		  
			   <tr>
			     <td style=" text-align:center;"><?php echo $row['wk_start_date']; ?> &nbsp - &nbsp <?php echo $row['wk_end_date']; ?></td>
				 <td style=" text-align:center;">
				  &nbsp<?php echo $row['em1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['em6']; ?>
				 <br> <?php echo $row['em2']; ?> &nbsp <?php echo $row['em4']; ?> &nbsp <?php echo $row['em5']; ?> &nbsp&nbsp <?php echo $row['em7']; ?><br><?php echo $row['em3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['em8']; ?> </td>
				<td style=" text-align:center;">
				  &nbsp<?php echo $row['et1']; ?>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['et6']; ?>
				 <br> <?php echo $row['et2']; ?> &nbsp <?php echo $row['et4']; ?> &nbsp <?php echo $row['et5']; ?> &nbsp&nbsp <?php echo $row['et7']; ?><br><?php echo $row['et3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['et8']; ?> </td>
				 <td style=" text-align:center;">
				  &nbsp<?php echo $row['ew1']; ?>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['ew6']; ?>
				 <br> <?php echo $row['ew2']; ?> &nbsp <?php echo $row['ew4']; ?> &nbsp <?php echo $row['ew5']; ?> &nbsp&nbsp <?php echo $row['ew7']; ?><br><?php echo $row['ew3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['ew8']; ?> </td>
				<td style=" text-align:center;">
				  &nbsp<?php echo $row['eth1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['eth6']; ?>
				 <br> <?php echo $row['eth2']; ?> &nbsp <?php echo $row['eth4']; ?> &nbsp <?php echo $row['eth5']; ?> &nbsp&nbsp <?php echo $row['eth7']; ?><br><?php echo $row['eth3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['eth8']; ?> </td>
                 <td style=" text-align:center;">
				  &nbsp<?php echo $row['ef1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['ef6']; ?>
				 <br> <?php echo $row['ef2']; ?> &nbsp <?php echo $row['ef4']; ?> &nbsp <?php echo $row['ef5']; ?> &nbsp&nbsp <?php echo $row['ef7']; ?><br><?php echo $row['ef3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['ef8']; ?> </td>
                 <td style=" text-align:center;">
				  &nbsp<?php echo $row['es1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['es6']; ?>
				 <br> <?php echo $row['es2']; ?> &nbsp <?php echo $row['es4']; ?> &nbsp <?php echo $row['es5']; ?> &nbsp&nbsp <?php echo $row['es7']; ?><br><?php echo $row['es3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['es8']; ?> </td>

				 </tr> <?php }}  ?>
			   <tr> </tr>
			</tbody>
       </table>
    </div>
    </div>                
    <br><br><br><br>                   
                		
                    
    
<!-- Horoscope End-->

		
				
    
<!-- Evening Report End-->

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