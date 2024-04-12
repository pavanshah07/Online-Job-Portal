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

    include "config.php";


	$str = "delete from citymaster where cityid = ".$_GET['cityid'];
	mysqli_query($con,$str);
	header("location:city.php");

?>