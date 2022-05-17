<?php
session_start();
include ("config.php");

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
    <center><h4 style="margin:50px;">Update Today's Numbers</h4></center>
<div class="features-boxed">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center features">
                <div class="col-sm-12 col-md-6 col-lg-6  item">
                    <div class="box"><div class="user-imagia"><img src="images/content/sun.jpg" class="img-circle" width="150px;" height="150px;" alt="" ></div><br><br>
                        <h5 class="name" style="color:red;">Golden Morning</h5><br>
						
						<?php

                            $sqlm = "SELECT * From morning_last_update where s_no='2'" ;
                            $resultm = mysqli_query($conn, $sqlm);

                            if (mysqli_num_rows($resultm)>0) 
                                { 
                                    // output data of each row
                                    while($rowm = mysqli_fetch_assoc($resultm)) 
									{                         
						?>
						
						
						
						<form action="morningupdate.php" method="post" >
						<h4 class="name" style="padding-bottom:5px;">Time: 10;00AM - 3:00 PM </h4>
                        <p class="description"> Week Starting date : <input type="date" name="wksdate" required /><?php echo $rowm['wk_start_date'];   ?></p>
					    <p class="description"> Week Ending date : <input type="date" name="wkedate" required /><?php echo $rowm['wk_start_date'];   ?></p>
						<p class="description"> Select week day : 
						<select name="wkday" required><optgroup >
						<option value="Monday" selected>Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
						</optgroup></select>
						<?php echo $rowm['day']; ?>
						</p>
						
                        <p class="description">Enter numbers in fields below</p> 
						<div style="padding-bottom:20px;">
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n1"  value ="<?php echo $rowm['n1'];   ?>"/>  
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n2"  value ="<?php echo $rowm['n2'];   ?>"/> 
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n3"  value ="<?php echo $rowm['n3'];   ?>"/> - 
                        <input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n4"  value ="<?php echo $rowm['n4'];   ?>"/>
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n5"  value ="<?php echo $rowm['n5'];   ?>"/> -
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n6"  value ="<?php echo $rowm['n6'];   ?>"/>  
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n7"  value ="<?php echo $rowm['n7'];   ?>"/>
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n8"  value ="<?php echo $rowm['n8'];   ?>"/>
						</div><?php }} ?>
						<div class="reportwrap"><button class="reportbutton" style="padding-left: 50px;padding-right: 50px;" type="submit" name="submit">Update Now</button></div></div>
                   </form>           
			   </div>
                <div class="col-sm-12 col-md-6 col-lg-6  item">
                    <div class="box"><div class="user-imagia"><img src="images/content/moon.png" class="img-circle" width="150px;" height="150px;" alt="" ></div><br><br>
                        <h5 class="name" style="color:red;">Golden Evening</h5><br>
						<h4 class="name" style="padding-bottom:5px;">Time: 10;00AM - 3:00 PM </h4>
						
						<?php
									$sqle = "SELECT * From evening_last_update where s_no='2'" ;
									
									$resulte = mysqli_query($conn, $sqle);

	                                if (mysqli_num_rows($resulte)>0) 
                                       {
                                         // output data of each row
                                        while($rowe = mysqli_fetch_assoc($resulte)) 
	                                      {
						?>
						<form action="eveningupdate.php" method="post" >
                        <p class="description"> Week Starting date : <input type="date" name="wksdate"  required  /><?php echo $rowe['wk_start_date'];   ?></p>
						<p class="description"> Week Ending date : <input type="date" name="wkedate"  required  /><?php echo $rowe['wk_start_date'];   ?></p>
						<p class="description"> Select week day : 
						<select name="wkday" required><optgroup >
						<option value="Monday" selected>Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
						</optgroup></select>
						<?php echo $rowe['day']; ?>
						</p>
						
                        <p class="description">Enter numbers in fields below</p> 
						<div style="padding-bottom:20px;">
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n1" value ="<?php echo $rowe['n1'];   ?>"/>  
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n2" value ="<?php echo $rowe['n2'];   ?>"/> 
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n3" value ="<?php echo $rowe['n3'];   ?>"/> - 
                        <input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n4" value ="<?php echo $rowe['n4'];   ?>"/>
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n5" value ="<?php echo $rowe['n5'];   ?>"/> -
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n6" value ="<?php echo $rowe['n6'];   ?>"/>  
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n7" value ="<?php echo $rowe['n7'];   ?>"/>
						<input type="text" maxlength="1" minlength="1" style="width:20px; text-align: center; font-size: 24px; color: red; " name="n8" value ="<?php echo $rowe['n8'];   ?>"/>
					  </div><?php }}?>
						<div class="reportwrap"><button class="reportbutton" style="padding-left: 50px;padding-right: 50px;" type="submit" name="submit" >Update Now</button></div></div>
                      </form>
						</div>
				
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