<?php
session_start();
/*
session_start();

if(!isset($_SESSION['username1']))
{
 header("Location: doctordashboard.php");
}
else if(isset($_SESSION['username1'])!="")
{
 header("Location:login.html");
}

if(isset($_GET['signup']))
{
 session_destroy();
 unset($_SESSION['username1']);
 header("Location:index.html");
}*/




if(isset($_POST['logout']))
{

	session_destroy();
	header("refresh:0; url=loginapp.html");
}

?>
