<?php 
include ("config.php");


if(isset($_POST['Submit']))
{
	$currentpass = $_POST['cp'];
	$newpass = $_POST['np'];
	$confirmpass = $_POST['conf'];
}

$sql = "SELECT * From admin_record where ID='1'" ;
$password="";

$result = mysqli_query($conn, $sql);

	      if (mysqli_num_rows($result)>0) 
{
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) 
	     {
			 $password =$row['Password'];
            }
} 

if($password==$currentpass)
{
	if($newpass == $confirmpass )
	{
		$update = "UPDATE admin_record SET Password = '$newpass' WHERE ID = 1";
	     mysqli_query($conn, $update);
		 echo '<script type="text/javascript">alert("update successfully")</script>';
		  header("refresh:0; url=administrator.php");
	}
	else
	{
		echo '<script type="text/javascript">alert("Password doesnt match")</script>';
	    header("refresh:0; url=changepassword.php");
	}
}
else
{
	echo '<script type="text/javascript">alert("wrong password")</script>';
	header("refresh:0; url=changepassword.php");
	
	
}


?>