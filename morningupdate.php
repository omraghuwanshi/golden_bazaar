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
	
 
$sql = "SELECT * FROM morning_record WHERE wk_start_date ='$wksdate'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)==0) 
   { 
     if($wkday == "Monday")
	 {
	  //$sql1 = "INSERT INTO `morning_record` (`s_no`, `wk_start_date`, `wk_end_date`, `mm1`, `mm2`, `mm3`, `mm4`, `mm5`, `mm6`, `mm7`, `mm8`, `mt1`, `mt2`, `mt3`, `mt4`, `mt5`, `mt6`, `mt7`, `mt8`, `mw1`, `mw2`, `mw3`, `mw4`, `mw5`, `mw6`, `mw7`, `mw8`, `mth1`, `mth2`, `mth3`, `mth4`, `mth5`, `mth6`, `mth7`, `mth8`, `mf1`, `mf2`, `mf3`, `mf4`, `mf5`, `mf6`, `mf7`, `mf8`, `ms1`, `ms2`, `ms3`, `ms4`, `ms5`, `ms6`, `ms7`, `ms8`) VALUES (\'1\', \'2018-06-10\', \'2018-06-17\', \'4\', \'5\', \'2\', \'3\', \'1\', \'4\', \'7\', \'7\', \'3\', \'5\', \'7\', \'5\', \'3\', \'6\', \'7\', \'9\', \'1\', \'2\', \'5\', \'4\', \'3\', \'5\', \'3\', \'8\', \'6\', \'2\', \'5\', \'4\', \'7\', \'3\', \'8\', \'3\', \'1\', \'9\', \'0\', \'3\', \'3\', \'2\', \'4\', \'6\', \'6\', \'3\', \'7\', \'3\', \'3\', \'8\', \'3\', \'2\')";
	  $up=  "INSERT into morning_record (s_no, wk_start_date, wk_end_date, mm1, mm2, mm3, mm4, mm5, mm6, mm7, mm8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	    mysqli_query($conn, $up);
		
	 }	

	 if($wkday == "Tuesday")
	 {
	    $up=  "INSERT into morning_record (s_no, wk_start_date, wk_end_date, mt1, mt2, mt3, mt4, mt5, mt6, mt7, mt8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	    mysqli_query($conn, $up);
		
	 }	
	 
	 if($wkday == "Wednesday")
	 {
	   $up=  "INSERT into morning_record (s_no, wk_start_date, wk_end_date, mw1, mw2, mw3, mw4, mw5, mw6, mw7, mw8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
	   
	 }	
	 
	 if($wkday == "Thursday")
	 {
	   $up=  "INSERT into morning_record (s_no, wk_start_date, wk_end_date, mth1, mth2, mth3, mth4, mth5, mth6, mth7, mth8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
	   
	 }	
	 
	 if($wkday == "Friday")
	 {
	   $up=  "INSERT into morning_record (s_no, wk_start_date, wk_end_date, mf1, mf2, mf3, mf4, mf5, mf6, mf7, mf8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
	  
	 }	
	 
	 if($wkday == "Saturday")
	 {
	    $up=  "INSERT into morning_record (s_no, wk_start_date, wk_end_date, ms1, ms2, ms3, ms4, ms5, ms6, ms7, ms8) VALUES (NULL, '$wksdate', '$wkedate', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
	   mysqli_query($conn, $up);
		
	 }	
   echo '<script type="text/javascript">alert("Insert Successfully")</script>';
	header("refresh:0; url=loginapp.html");	 
   }
   
 if (mysqli_num_rows($result) >0) 
 {
	 if($wkday == "Monday")
	 {
		 $sql1 = "UPDATE morning_record SET mm1 = '$n1', mm2 = '$n2', mm3 = '$n3', mm4 = '$n4', mm5 = '$n5', mm6 = '$n6', mm7 = '$n7', mm8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 
	 
	  if($wkday == "Tuesday")
	 {
		 $sql1 = "UPDATE morning_record SET mt1 = '$n1', mt2 = '$n2', mt3 = '$n3', mt4 = '$n4', mt5 = '$n5', mt6 = '$n6', mt7 = '$n7', mt8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 }

     if($wkday == "Wednesday")
	 {
		 $sql1 = "UPDATE morning_record SET mw1 = '$n1', mw2 = '$n2', mw3 = '$n3', mw4 = '$n4', mw5 = '$n5', mw6 = '$n6', mw7 = '$n7', mw8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 

      if($wkday == "Thursday")
	 {
		 $sql1 = "UPDATE morning_record SET mth1 = '$n1', mth2 = '$n2', mth3 = '$n3', mth4 = '$n4', mth5 = '$n5', mth6 = '$n6', mth7 = '$n7', mth8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 

      if($wkday == "Friday")
	 {
		 $sql1 = "UPDATE morning_record SET mf1 = '$n1', mf2 = '$n2', mf3 = '$n3', mf4 = '$n4', mf5 = '$n5', mf6 = '$n6', mf7 = '$n7', mf8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 

     if($wkday == "Saturday")
	 {
		 $sql1 = "UPDATE morning_record SET ms1 = '$n1', ms2 = '$n2', ms3 = '$n3', ms4 = '$n4', ms5 = '$n5', ms6 = '$n6', ms7 = '$n7', ms8 = '$n8' WHERE 	wk_start_date = '$wksdate'";
	     mysqli_query($conn, $sql1);
		 
	 } 	 
     echo '<script type="text/javascript">alert("Update Successfully")</script>';
     header("refresh:0; url=loginapp.html");	 
   		 
 }
 
 $lsql="SELECT * FROM morning_last_update where s_no='2'";
 $lresult = mysqli_query($conn, $lsql);
 if (mysqli_num_rows($lresult)>0)
 {
   $del="DELETE FROM morning_last_update where s_no='2'";
   mysqli_query($conn, $del);
   
 }

 $llsql="SELECT * FROM morning_last_update where s_no='2'";
 $llresult = mysqli_query($conn, $llsql);
 if (mysqli_num_rows($llresult)==0)
 {
	$ins = "INSERT INTO morning_last_update (s_no, wk_start_date, wk_end_date, day, n1, n2, n3, n4, n5, n6, n7, n8) VALUES ('2', '$wksdate', '$wkedate', '$wkday', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$n8')";
    mysqli_query($conn, $ins);
 }
}
?>