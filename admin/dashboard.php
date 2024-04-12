<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/job/login.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/job/login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style1.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/logo.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>Admin  </h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Build Your Career..! <span> 😀 </span></h4>
                  <ul class="list-unstyled components">
                     <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                    
                    
                     <li><a href="widgets.php"><i class="fa fa-user orange_color"></i> <span>Employer Profile</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list-ul blue2_color"></i> <span>Master</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="state.php">> <span>State Master</span></a></li>
                           <li><a href="city.php">> <span>City Master</span></a></li>
                          
                        </ul>
                     </li>
                     
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Pending Request</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="panding_employer.php">> <span>Panding Employer</span></a>
                           </li>
                        </ul>
                     </li>

                     
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list-ul "></i> <span>Reports</span></a>
                        <ul class="collapse list-unstyled" id="element">
                        <li><a href="reg_candidate.php">> <span>Registered Candidate</span></a></li>
                           <li><a href="reg_employer.php">> <span>Registered Employer</span></a></li>
                           <li><a href="apply.php">> <span>Apply Job</span></a></li>
                           
                        </ul>
                     </li>
                     <li><a href="media_gallery.php"><i class="fa fa-object-group blue2_color"></i> <span>Job Listing</span></a></li>
                    
                     <li>
                        <a href="contactmessages.php">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li>
                     
                     <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Log-Out</span></a></li>
                  </ul>
               </div>
            </nav>
			
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <br>
                           <h1 class="text-center" style="font-style: italic; color:white">Job Needers</h1>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="contactmessages.php"><i class="fa fa-envelope-o"></i></a></li>
                                 <li><a href="logout.php"><i class="fa fa-sign-out"></i></a></li>
                              </ul>
                              
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
			  
               <!-- end topbar -->
               <?php
$con = mysqli_connect("localhost","root","","job_db");

$str = "select*from employer_reg where status='accepted' ";
$result = mysqli_query($con,$str);
$tutornumber = mysqli_num_rows($result);

$string = "select*from candidate_reg  ";
$results = mysqli_query($con,$string);
$parentnumber = mysqli_num_rows($results);

$string2 = "select*from contactus ";
$results2 = mysqli_query($con,$string2);
$bookingnumber = mysqli_num_rows($results2);

$string1 = "select*from jobs  ";
$results1 = mysqli_query($con,$string1);
$ebooknumber = mysqli_num_rows($results1);

$strdestut ="select*from employer_reg order by employer_id DESC LIMIT 4";
$restut =mysqli_query($con,$strdestut);

$strdespar ="select*from candidate_reg order by candidate_id DESC LIMIT 4  ";
$respar =mysqli_query($con,$strdespar);

$strresbook ="select*from jobs order by id DESC LIMIT 4";
$resbook =mysqli_query($con,$strresbook);

?>
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <center>
                     <div class="row column1 ">
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div class="text-center">
                                 <h3>Employer</h3>
                                 <?php  echo"<h4>$tutornumber</h4>";   ?> 
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div class="text-center">
                                 <h3>Candidate</h3>
							 <?php   echo"<h4>$parentnumber</h4>";  ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div class="text-center">
                                 <h3>Job</h3>
								<?php   echo"<h4>$ebooknumber</h4>";  ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     </center>
<!-- chart -->
                     <div style="display: flex;
    		justify-content: space-between;
    		align-items: center;
			margin: 0px 0px 30px;">
	<canvas id="myChart" style="width:100%;max-width:785px;
								background: white;
								padding:20px;"></canvas>
	
	<canvas id="myChartLine" style="width:100%;max-width:785px;
								background: white;
								padding:20px;"></canvas>




</div>
<div style="display: flex;
    		justify-content: space-between;
    		align-items: center;
			margin: 0px 0px 30px;">
	<canvas id="myChartMultiLine" style="display:block;width:100%;max-width:1000px;
								background: white;
								padding:20px;
								margin: auto;"></canvas>
</div>
<!-- end chart  -->

<div>
                        <div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New Employers</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">

									<?php
									while($tutrow=mysqli_fetch_array($restut))
                                    {    echo "<a style='background: #fff !important;' class='list-group-item media' href=''>
                                             <div class='pull-left'>
                                                <img class='lg-item-img' src='../$tutrow[photo]' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$tutrow[f_name]</div>
                                                	<small class='lg-item-text'>$tutrow[l_name]</small>
                                                </div>
												<div>
												
												</div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$tutrow[phone]</div>
                                                </div>
                                            </div>
										</a>";
									}
                           ?>


                                   	</div>
                                </div>
                            </div>
							</div>
						</div>
                  
						<div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list ">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New candidate</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">

									<?php
									while($parrow=mysqli_fetch_array($respar))
                                    {    echo "<a style='background: #fff !important;' class='list-group-item media' href=''>
                                             <div class='pull-left'>
                                                <img class='lg-item-img' src='../$parrow[photo]' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$parrow[f_name]</div>
                                                	<small class='lg-item-text'>$parrow[l_name]</small>
                                                </div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$parrow[phone]</div>
                                                </div>
                                            </div>
										</a>";
									}
                                    ?>

                                   	</div>
                                </div>
                            </div>
							</div>
						</div>
               

						<div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New job</h3>
                                </div>
                                 <div class="card-body p-b-20">
                                    <div class="list-group">
									<?php
									while($parrow=mysqli_fetch_array($resbook))
                                    {    echo "<a style='background: #fff !important;' class='list-group-item media' href=''>
                                             
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$parrow[company_name]</div>
                                                	<small class='lg-item-text'>$parrow[position]</small>
                                                </div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$parrow[salary]</div>
                                                </div>
                                            </div>
										</a>";
									}
                                    ?>
									


                                   	</div> 
                                </div>
                            </div>
							</div>
						</div> 
					</div>




<!-- pie chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>

	var candidate = <?php echo $parentnumber;?>;

	var employer = <?php echo $tutornumber;?>;



	var xValues = ["candidate", "Employer"];
	var yValues = [candidate, employer];
	var barColors = [
  		"#a2d200",
	  	"#8e44ad"
	];

	new Chart("myChart", {
  		type: "doughnut",
  		data: {
    			labels: xValues,
    		datasets: [{
      			backgroundColor: barColors,
      			data: yValues
    		}]
  		},
  		options: {
    		title: {
      			display: true,
      			text: "Proporation of Registered Admin,candidate and Employer"
    		}
  		}
	});
</script>
<!-- start line bar -->

<?php

	$xValues = array();
	$yValues = array();

	$cuurent_date = date('y-m-d');

	$split_date = str_split($cuurent_date,6);

	$split_date = intval($split_date[1]);
	
	array_push($xValues,$split_date - 4,$split_date - 3,$split_date - 2,$split_date - 1,$split_date);


	foreach ($xValues as $value_line) {
	
		$sql_line = "select COUNT(at_create) as count from `jobs` where day(at_create)=$value_line";
		$result_line = mysqli_query($con,$sql_line);
	
		$r2_line = mysqli_fetch_array($result_line);
		$m = $r2_line['count'];

		array_push($yValues,$m);
	

	}


?>
<!-- pie chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>

	const xValues1 = <?php echo json_encode($xValues);?>;
	const yValues1 = <?php echo json_encode($yValues);?>;




	new Chart("myChartLine", {
  		type: "line",
  		data: {
    		labels: xValues1,
    		datasets: [{
		  		label: "JOBS",
		  		tension: 0.4,
      			cubicInterpolationMode: 'monotone',
      			fill: true,
    	  		borderColor: '#E64A19',
	      		backgroundColor: 'transparent',
      			borderDash: [20, 10, 60, 10],
	  			pointBorderColor: '#E64A19',
		  		pointBackgroundColor: '#FFA726',
	      		pointRadius: 5,
      			pointHoverRadius: 10,
      			pointHitRadius: 30,
      			pointBorderWidth: 4,
      			pointStyle: 'rectRounded',
      			data: yValues1
    		}]
  		},
  		options: {
    		legend: {display: true},
    		scales: {
    	  			yAxes: [{ticks: {min: 0, max:5}}],
    			},
			title: {
      			display: true,
      			text: "Numbers of JOBS"
    		}
  		}
	});
</script>

<!-- end line bar  -->


<!-- multi-line graph start -->

<?php
	$xValues_date = array();
	$yValues_multi_1 = array();
	$yValues_multi_2 = array();

	$cuurent_date = date('y-m-d');

	$split_date = str_split($cuurent_date,6);

	$split_date = intval($split_date[1]);
		
	array_push($xValues_date,$split_date - 5,$split_date - 4,$split_date - 3,$split_date - 2,$split_date - 1,$split_date);


	foreach ($xValues_date as $value) {
		
		$sql_multi = "select COUNT(at_date) as count from `employer_reg` where day(at_date)=$value";
		$result_Multi = mysqli_query($con,$sql_multi);
		
		$r2 = mysqli_fetch_array($result_Multi);
		$m = $r2['count'];

		array_push($yValues_multi_1,$m);
		

	}


	foreach ($xValues_date as $value) {
		
		$sql_multi = "select COUNT(at_date) as count from `candidate_reg` where day(at_date)=$value";
		$result_Multi = mysqli_query($con,$sql_multi);
		
		$r2 = mysqli_fetch_array($result_Multi);
		$m = $r2['count'];

		array_push($yValues_multi_2,$m);
		

	}
	
?>


<script>
	const xValues_date = <?php echo json_encode($xValues_date);?>;
	const yValues_multi_1 = <?php echo json_encode($yValues_multi_1);?>;
	const yValues_multi_2 = <?php echo json_encode($yValues_multi_2);?>;

	new Chart("myChartMultiLine", {
  		type: "line",
  		data: {
    		labels: xValues_date,
    		datasets: [{
				data: yValues_multi_1,
				label: "Employers",
		  		tension: 0.4,
      			cubicInterpolationMode: 'monotone',
      			fill: true,
    	  		borderColor: '#E64A19',
	      		backgroundColor: 'transparent',
      			borderDash: [20, 10, 60, 10],
	  			pointBorderColor: '#E64A19',
		  		pointBackgroundColor: '#FFA726',
	      		pointRadius: 5,
      			pointHoverRadius: 10,
      			pointHitRadius: 30,
      			pointBorderWidth: 4,
      			pointStyle: 'rectRounded'
    		}, { 
	      		data: yValues_multi_2,
				label: "Candidate",
		  		tension: 0.4,
      			cubicInterpolationMode: 'monotone',
      			fill: true,
    	  		borderColor: 'green',
	      		backgroundColor: 'transparent',
      			borderDash: [20, 10, 60, 10],
	  			pointBorderColor: 'green',
		  		pointBackgroundColor: 'green',
	      		pointRadius: 5,
      			pointHoverRadius: 10,
      			pointHitRadius: 30,
      			pointBorderWidth: 4,
      			pointStyle: 'rectRounded'
    		}]
  		},
		options: {
    		legend: {display: true},
    		scales: {
    	  			yAxes: [{ticks: {min: 0, max:3}}],
    			},
			title: {
      			display: true,
      			text: "Numbers of Employers and Candidates"
    		}
  		}
	});
</script>

<!-- multi-line graph ends  -->
                     
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p style="color:black">Copyright © 2024 Created by Team Groups. All rights reserved.<br>
                        </p>
                     </div>
                  </div>
               </div>
               
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/chart_custom_style1.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>