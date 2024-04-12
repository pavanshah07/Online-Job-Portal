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
  $statename = $_POST['statename'];
  	$sql_u = "SELECT * FROM statemaster WHERE statename='$statename'";
  	$res_u = mysqli_query($con, $sql_u);
  	
  	if (mysqli_num_rows($res_u) > 0) {
        $errormsg = "StateName already exist";
        echo "<script type='text/javascript'>alert('$errormsg');location='state.php';</script>";                           
        
  	}
      else
      {
           $query = "insert into statemaster(statename)values('$statename')";
           $results = mysqli_query($con, $query);
           echo 'Saved!';
           header('location:state.php');
           exit();
  	}



?>