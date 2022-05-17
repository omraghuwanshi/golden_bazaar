<?php
session_start();
if(!isset($_SESSION['Email']))
{
header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Bazaar Administrator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/adminstyles.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
</head>

<body><nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgb(0,0,0);">
    <div class="container"><a href="#" class="navbar-brand" style="color:#ff6f00;font-family:ABeeZee, sans-serif; ">GOLDEN BAZAAR </a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="color:#ff6f00"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1" style="height:38px;">
            <form target="_self" class="form-inline mr-auto">
                <div class="form-group"><label for="search-field"></label></div>
            </form>
			<form action="logout.php" method="post">
			<input class="btn btn-light action-button" name="logout" type="submit" value="Log Out" style="width:134px;color:rgb(255,255,255);font-size:16px;background-color:rgb(230,86,6);height:42px;"></form></div>
    </div>
</nav><center> <a href="#"><img src="images/header/logo.png" alt="Golden Xpress " title="Logo" style="padding-top:40px;"></a>
<h3 style="margin:50px;">Welcome to Golden Bazaar Administrator</h3></center><center><h5 style="margin:50px;">Select the Administrator Options</h5></center>
    <div class="features-boxed">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center features">
                <div class="col-sm-4 col-md-4 col-lg-4  item">
                    <div class="box"><i class="fa fa-sort-numeric-asc icon" style="color:rgb(255,92,0);"></i>
                        <h3 class="name">Update Numbers</h3>
                        <p class="description">Update Numbers on your website through your application</p> <div class="reportwrap"><form action="updatenumbers.php"><button  class="reportbutton" style="padding-left: 50px;padding-right: 50px;">Update Now</button></form></div></div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4  item">
                    <div class="box"><i class="fa fa-key icon" style="color:rgb(255,92,0);"></i>
                        <h3 class="name">Change Password</h3>
                        <p class="description">Change your Website Administrator password</p> <div class="reportwrap"><form action="changepassword.php"><button  class="reportbutton" style="padding-left: 50px;padding-right: 50px;">Change Now</button></form></div></div>
                </div>
				<div class="col-sm-4 col-md-4 col-lg-4  item">
                    <div class="box"><i class="fa fa-paper-plane-o icon" style="color:rgb(255,92,0);"></i>
                        <h3 class="name">Access Webmail</h3>
                        <p class="description">Access your webmail through your administrator application</p> <div class="reportwrap"><form action="https://webmail.goldenbazaar.in"><button  class="reportbutton" style="padding-left: 50px;padding-right: 50px;">GO</button></form></div></div>
                </div>
        </div>
    </div>
	<div class="container" style="padding-bottom:40px; align-content: center;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading" >
					<h3>Download our Administrator <span>Mobile App</span></h3>
					<p>Manage your administrator section directly by our mobile app, anytime anywhere.</p>
				</div>
				
			</div>
			    
			</div>
		<div class="reportwrap"><form action="http://files.appsgeyser.com/Golden%20Bazaar_7210316.apk"><button  class="reportbutton" style="padding-left: 50px;padding-right: 50px;">DOWNLOAD NOW</button></form></div></div>	
		</div>
		    
	</div>
	<div style="background-color: black">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
					<p style="color:white; padding-top:3px;padding-bottom:3px;">&copy; Copyright 2018,  <a href="#" style="color:#ff6f00">GOLDEN EXPRESS</a>&nbsp &nbsp Powered by <a href="https:\\www.techwormsolutions.com" style="color:#ff6f00">Techworm Solutions</a></p>				
							
			</div>	
	</div>		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>