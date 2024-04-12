<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("Location: http://localhost/job/admin/dashboard.php");
	die();
} elseif ($_SESSION["type"] != 'admin') {
	header("Location: http://localhost/job/admin/dashboard.php");
	die();
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>State Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/table-style.css" />
	<link rel="stylesheet" href="css/morris.css" type="text/css" />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
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
-->

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
								<h6>Admin </h6>
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
						
						<li><a href="logout"><i class="fa fa-sign-out"></i> <span>Log-Out</span></a></li>
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
										<li><a href="logout"><i class="fa fa-sign-out"></i></a></li>
									</ul>

								</div>
							</div>
						</div>
					</nav>
					
				</div>
				
				
				<!-- end topbar -->


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
<?php
$a = "";
if (isset($_GET['stateid'])) {
	include 'config.php';
	$str = "select * from statemaster where stateid=" . $_GET['stateid'];
	$result = mysqli_query($con, $str);
	$r = mysqli_fetch_array($result);
	$a = $r['statename'];
}
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a style='background: #fff !important;' href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>State</li>
</ol>
<div class="container-fluid">
	<div class="grid-form1">
		<h3>State</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post" action="
	<?php if (isset($_GET['stateid'])) {
		echo "updateState.php?stateid=" . $_GET['stateid'];
	} else {
		echo "addState.php";
	}
	?>">
					<div class="form-group">
						<div class="form-group">
							<label for="inputadd4reg" class="col-sm-2 control-label hor-form">State</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputadd4reg" name="statename" placeholder="Enter your state" value="<?php echo $a; ?>" required>

							</div>
						</div>
						<div class="col-sm-8 col-sm-offset-2">
							<br /> <br />
							<div>
								<button class="btn-primary btn">Submit</button>
								<input type="reset" class="btn-inverse btn" value="Cancel">

								<br />
							</div>
				</form>
				<br /><br />
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col m-auto">
						<div class="card mt-5">
							<table id="table">
								<tr>
									<th> Stateid </th>
									<th> Name </th>
									<th> Edit </th>
									<th> Delete </th>
								</tr>
								<?php
								$con = mysqli_connect("localhost", "root", "", "job_db");
								$str = "select * from statemaster";
								$result = mysqli_query($con, $str);
								while ($row = mysqli_fetch_array($result)) {
									echo "<tr>";
									echo "<td>" . $row['stateid'] . "</td>";
									echo "<td>" . $row['statename'] . "</td>";

									echo "<td> <a style='background: #fff !important;' href = 'state.php?stateid=" . $row['stateid'] . "'>Edit </a> </td>";
									echo "<td> <a style='background: #fff !important;' href = 'deleteState.php?stateid=" . $row['stateid'] . "'>Delete </a> </td>";
									echo "</tr>";
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>

