<?php
session_start();
include ("config.php");
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "golden_xpress";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
            }  
 */

if (isset($_SESSION['Email']) == "") {
header("Location:loginapp.html");
} 
if (isset($_SESSION['Email']) != "") {
header("Location:administrator.php");
} 
 
 
 
 
 
if(isset($_POST['Submit'] ))
{
     $email=$_POST['Email'];
     $pass=$_POST['Password'];
     
      $sql ="select * from admin_record where Email='$email' AND Password='$pass'";
	  $result=mysqli_query( $conn,$sql);
	  //$numrow=mysqli_num_rows($result);
     
      if(mysqli_num_rows($result) > 0)
        {
			$_SESSION['Email']= $email;
	        header('location:administrator.php');
	    
	       // echo "<br/><br/>login successfully";
        }
      else 
        {
	     //echo "your username and password is wrong login1";
         echo '<script type="text/javascript">alert("Invalid User")</script>';
		 header("refresh:0; url=index.php");
        }
}
?>