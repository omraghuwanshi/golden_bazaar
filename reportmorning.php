<?php 
include ("config.php");


$Number1m="";
$Number2m="";
$Number3m="";
$Number4m="";
$Number5m="";
$Number6m="";
$Number7m="";
$Number8m="";

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
						
						<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> golden@goldenbazaar</a></li>
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

<!-- Morning Report start-->

	<!-- Horoscope start-->

	<div class="container-fluid" style="padding-top:170px; padding-bottom:0px;  background-color:#f7f8f9;>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0" style= "padding-bottom:0px;">
				<div class="ast_heading" style="padding-top:70px; padding-bottom:1px; margin-bottom: 0px;">
					<h1>Morning <span>Numerology Horoscope</span> Reports</h1>
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
                                <div class="cover-imagia"><img src="images/content/mimage.jpg" alt=""></div>
                                <div class="user-imagia"><img src="images/content/sun.jpg" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia" style="color:#ff9502;">GOLDEN MORNING</h3>
									<?php
									
									$sqlm = "SELECT * From morning_last_update where s_no='2'" ;
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
                                     ?>
                                    <h5 class="subtitle-imagia" style="padding-top:5px;">Time: 10:45 AM - 12:30 PM </h5>
                                    <h2 class="text-center">
									<span style=" color: red">&nbsp<?php echo $Number1m ; echo $Number2m ; echo $Number3m ;?></span>&nbsp-&nbsp
									<span style=" color: red">&nbsp <?php echo $Number4m ; echo $Number5m ;?> </span>&nbsp-&nbsp
									<span style="color: red">&nbsp <?php echo $Number6m ; echo $Number7m ; echo $Number8m ;?></span>&nbsp
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
					<h3>Previous Morning Numerology Horoscope Report<h3><br>
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
				     
					 $sql ="SELECT * FROM morning_record order by wk_start_date desc";
					 $result = mysqli_query($conn,$sql);
					 
					 if (mysqli_num_rows($result) > 0)
					 {
						 while($row=mysqli_fetch_assoc($result))
						 {
					 
				 ?>		  
		  
			   <tr>
			     <td style=" text-align:center;"><?php echo $row['wk_start_date']; ?> &nbsp - &nbsp <?php echo $row['wk_end_date']; ?></td>
				 <td style=" text-align:center;">
				  &nbsp<?php echo $row['mm1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mm6']; ?>
				 <br> <?php echo $row['mm2']; ?> &nbsp <?php echo $row['mm4']; ?> &nbsp <?php echo $row['mm5']; ?> &nbsp&nbsp <?php echo $row['mm7']; ?><br><?php echo $row['mm3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mm8']; ?> </td>
				<td style=" text-align:center;">
				  &nbsp<?php echo $row['mt1']; ?>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mt6']; ?>
				 <br> <?php echo $row['mt2']; ?> &nbsp <?php echo $row['mt4']; ?> &nbsp <?php echo $row['mt5']; ?> &nbsp&nbsp <?php echo $row['mt7']; ?><br><?php echo $row['mt3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mt8']; ?> </td>
				 <td style=" text-align:center;">
				  &nbsp<?php echo $row['mw1']; ?>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mw6']; ?>
				 <br> <?php echo $row['mw2']; ?> &nbsp <?php echo $row['mw4']; ?> &nbsp <?php echo $row['mw5']; ?> &nbsp&nbsp <?php echo $row['mw7']; ?><br><?php echo $row['mw3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mw8']; ?> </td>
				<td style=" text-align:center;">
				  &nbsp<?php echo $row['mth1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mth6']; ?>
				 <br> <?php echo $row['mth2']; ?> &nbsp <?php echo $row['mth4']; ?> &nbsp <?php echo $row['mth5']; ?> &nbsp&nbsp <?php echo $row['mth7']; ?><br><?php echo $row['mth3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mth8']; ?> </td>
                 <td style=" text-align:center;">
				  &nbsp<?php echo $row['mf1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mf6']; ?>
				 <br> <?php echo $row['mf2']; ?> &nbsp <?php echo $row['mf4']; ?> &nbsp <?php echo $row['mf5']; ?> &nbsp&nbsp <?php echo $row['mf7']; ?><br><?php echo $row['mf3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['mf8']; ?> </td>
                 <td style=" text-align:center;">
				  &nbsp<?php echo $row['ms1']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['ms6']; ?>
				 <br> <?php echo $row['ms2']; ?> &nbsp <?php echo $row['ms4']; ?> &nbsp <?php echo $row['ms5']; ?> &nbsp&nbsp <?php echo $row['ms7']; ?><br><?php echo $row['ms3']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['ms8']; ?> </td>

				 </tr> <?php }}  ?>
			
			   <tr> </tr>
			</tbody>
       </table>
    </div>
    </div>                
    <br><br><br><br>                   
                		
                    
    
<!-- Horoscope End-->

		
				
    
<!-- Morning Report End-->

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