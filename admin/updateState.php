<?php

session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/job/admin/dashboard.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/job/admin/dashboard.php");
    die();
}

   include 'config.php';

	$a = $_POST['statename'];

	$str = "update statemaster set statename='$a' where stateid = ".$_GET['stateid'];
	mysqli_query($con,$str);


	header("location:state.php");

?>