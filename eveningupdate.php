<?php
session_start();
include ("config.php");

if(!isset($_SESSION['Email']))
{
header("Location: index.php");
}

if (isset($_POST['submit']))
{
	$wksdate = $_POST['wksdate'] ;
	$wkedate = $_POST['wkedate'] ;
	$wkday = $_POST['wkday'] ;
	$n1 = $_POST['n1'] ;
	$n2 = $_POST['n2'] ;
	$n3 = $_POST['n3'] ;
	$n4 = $_POST['n4'] ;
	$n5 = $_POST['n5'] ;
	$n6 = $_POST['n6'] ;
	$n7 = $_POST['n7'] ;
	$n8 = $_POST['n8'] ;
	
 
$sql = "SELECT * FROM evening_record WHERE wk_start_date ='$wksdate'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)==0) 
   { 
     if($wkday == "Monday")
	 {
	   $up=  "INSERT into evening_record (s_no, wk_start_date, wk_end_date, em1, em2, em3, em4, em5, em6, em7, em8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	    mysqli_query($conn, $up);
		
	 }	

	 if($wkday == "Tuesday")
	 {
	    $up=  "INSERT into evening_record (s_no, wk_start_date, wk_end_date, et1, et2, et3, et4, et5, et6, et7, et8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	    mysqli_query($conn, $up);
		
	 }	
	 
	 if($wkday == "Wednesday")
	 {
	   $up=  "INSERT into evening_record (s_no, wk_start_date, wk_end_date, ew1, ew2, ew3, ew4, ew5, ew6, ew7, ew8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
	   
	 }	
	 
	 if($wkday == "Thursday")
	 {
	   $up=  "INSERT into evening_record (s_no, wk_start_date, wk_end_date, eth1, eth2, eth3, eth4, eth5, eth6, eth7, eth8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
	   
	 }	
	 
	 if($wkday == "Friday")
	 {
	   $up=  "INSERT into evening_record (s_no, wk_start_date, wk_end_date, ef1, ef2, ef3, ef4, ef5, ef6, ef7, ef8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
	   echo "insert fri";
	 }	
	 
	 if($wkday == "Saturday")
	 {
	    $up=  "INSERT into evening_record (s_no, wk_start_date, wk_end_date, es1, es2, es3, es4, es5, es6, es7, es8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
		
	 }	
     echo '<script type="text/javascript">alert("Insert Successfully")</script>';
     header("refresh:0; url=loginapp.html");	 
   	
  }
   
 if (mysqli_num_rows($result) >0) 
 {
	 if($wkday == "Monday")
	 {
		 $sql1 = "UPDATE evening_record SET em1 = '$n1', em2 = '$n2', em3 = '$n3', em4 = '$n4', em5 = '$n5', em6 = '$n6', em7 = '$n7', em8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 
	 
	  if($wkday == "Tuesday")
	 {
		 $sql1 = "UPDATE evening_record SET et1 = '$n1', et2 = '$n2', et3 = '$n3', et4 = '$n4', et5 = '$n5', et6 = '$n6', et7 = '$n7', et8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 }

     if($wkday == "Wednesday")
	 {
		 $sql1 = "UPDATE evening_record SET ew1 = '$n1', ew2 = '$n2', ew3 = '$n3', ew4 = '$n4', ew5 = '$n5', ew6 = '$n6', ew7 = '$n7', ew8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 

      if($wkday == "Thursday")
	 {
		 $sql1 = "UPDATE evening_record SET eth1 = '$n1', eth2 = '$n2', eth3 = '$n3', eth4 = '$n4', eth5 = '$n5', eth6 = '$n6', eth7 = '$n7', eth8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 

      if($wkday == "Friday")
	 {
		 $sql1 = "UPDATE evening_record SET ef1 = '$n1', ef2 = '$n2', ef3 = '$n3', ef4 = '$n4', ef5 = '$n5', ef6 = '$n6', ef7 = '$n7', ef8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		
	 } 

     if($wkday == "Saturday")
	 {
		 $sql1 = "UPDATE evening_record SET es1 = '$n1', es2 = '$n2', es3 = '$n3', es4 = '$n4', es5 = '$n5', es6 = '$n6', es7 = '$n7', es8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		
	 } 	 
     echo '<script type="text/javascript">alert("Update Successfully")</script>';
     header("refresh:0; url=loginapp.html");
 }
 
 $lsql="SELECT * FROM evening_last_update where s_no='2'";
 $lresult = mysqli_query($conn, $lsql);
 if (mysqli_num_rows($lresult)>0)
 {
   $del="DELETE FROM evening_last_update where s_no='2'";
   mysqli_query($conn, $del);
   
 }

 $llsql="SELECT * FROM evening_last_update where s_no='2'";
 $llresult = mysqli_query($conn, $llsql);
 if (mysqli_num_rows($llresult)==0)
 {
	$ins = "INSERT INTO evening_last_update (s_no, wk_start_date, wk_end_date, day, n1, n2, n3, n4, n5, n6, n7, n8) VALUES ('2', '$wksdate', '$wkedate', '$wkday', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
    mysqli_query($conn, $ins);
 }
}
?>