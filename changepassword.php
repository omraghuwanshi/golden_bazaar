<?php
session_start();
if(!isset($_SESSION['Email']))
{
header("Location: loginapp.html");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Xpress Administrator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/adminstyles.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css"></head>

<body><nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgb(0,0,0);">
   <div class="container"><a href="#" class="navbar-brand" style="color:#ff6f00;font-family:ABeeZee, sans-serif; ">GOLDEN XPRESS </a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="color:#ff6f00"></span></button>
         <div
            class="collapse navbar-collapse" id="navcol-1" style="height:38px;">
            <form target="_self" class="form-inline mr-auto">
                <div class="form-group"><label for="search-field"></label></div>
            </form><form action="logout.php" method="post">
			<input class="btn btn-light action-button" name="logout" type="submit" value="Log Out" style="width:134px;color:rgb(255,255,255);font-size:16px;background-color:rgb(230,86,6);height:42px;"></form></div>
    &nbsp;&nbsp;<a class="btn btn-primary action-button" role="button" href="administrator.php" style="width:134px;color:rgb(255,255,255);font-size:16px;height:42px; padding-top:10px;">Back<i class="fa fa-backward" style="  padding-left:10px;
  font-size:20px;
"></i></a></div>
    </div>
</nav>
    <center><h4 style="margin:50px;">Change Account Password</h4></center>
	<div class="container">
	<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-3"></div>
	<div class="col-lg-6 col-md-6 col-sm-6"><div class="contact-clean">
    <form method="post" action="authcpass.php">
        <div class="form-group">  <input type="password" name="cp" placeholder="Current Password" class="form-control" /></div>
        <div class="form-group"> <input type="password" name="np" placeholder="New Password" class="form-control" /></div>
        <div class="form-group"> <input type="password" name="conf" placeholder="Confirm Password" class="form-control" /></div>
        <div class="form-group"><br><button class="btn btn-primary" type="submit" name="Submit" style="background-color:rgb(21,130,3);">Change Password</button></div>
    </form>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3"></div>
</div>
</div>
	<div style="background-color: black">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
					<p style="color:white; padding-top:3px;padding-bottom:3px;">&copy; Copyright 2018,  <a href="#" style="color:#ff6f00">GOLDEN EXPRESS</a>&nbsp &nbsp Powered by <a href="https:\\www.techwormsolutions.com" style="color:#ff6f00">Techworm Solutions</a></p>				
							
			</div>	
	</div>
	 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>