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

<?php
error_reporting(0);

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>City Page</title>
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

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a style='background: #fff !important;' href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>City</li>
</ol>

<div class="container-fluid">
	<div class="grid-form1">
		<h3>City</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<?php
				$a = "";

				if (isset($_GET['cityid'])) {
					include "config.php";
					$str = "select * from citymaster where cityid=" . $_GET['cityid'];
					$result = mysqli_query($con, $str);
					$r = mysqli_fetch_array($result);
					$a = $r['cityname'];
				}
				?>
				<form class="form-horizontal" method="post" action="<?php
																	if (isset($_GET['cityid'])) {
																		echo "updateCity.php?cityid=" . $_GET['cityid'];
																	} else {
																		echo "addCity.php";
																	}
																	?>">
					<div class="form-group">

						<div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">Select your state :</label>
							<div class="col-sm-8">
								<select name="state" class="form-control1">
									<option>--Select State--</option>
									<?php
									include "config.php";
									$str = "select*from statemaster";
									$result = mysqli_query($con, $str);
									while ($row = mysqli_fetch_array($result)) {
										echo "<option value=" . $row['stateid'] . ">" . $row['statename'] . "</option>";
									}
									echo "</select>";
									?>
							</div>
						</div>

						<br>
						<br>
						<br>
						<div class="form-group">
							<label for="inputadd4reg" class="col-sm-2 control-label hor-form">City</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="city" id="inputadd4reg" placeholder="Enter your city" value="<?php echo $a; ?>" required>
							</div>
						</div>
						<div class="col-sm-8 col-sm-offset-2">
							<br /> <br />
							<div>
								<button class="btn-primary btn">Submit</button>
								<input type="reset" class="btn-inverse btn" value="Cancel">

							</div>
				</form>
			</div>
		</div>
	</div>
	<br />
	<div class="container">
		<div class="row">
			<div class="col m-auto">
				<div class="card mt-5">
					<table id="table">
						<thead>
							<tr>
								<th> City Id </th>
								<th> State Name </th>
								<th> City Name </th>

								<th> Edit </th>
								<th> Delete </th>
							</tr>
						</thead>

						<?php
						include "config.php";
						$str = "select * from citymaster";
						$result = mysqli_query($con, $str);
						while ($row = mysqli_fetch_array($result)) {
							echo "<tr>";
							echo "<td>" . $row['cityid'] . "</td>";
							$okyar = $row['stateid'];
							$query = "SELECT statename FROM `statemaster` WHERE stateid='$okyar'";
							$results = mysqli_query($con, $query);
							$roww = mysqli_fetch_assoc($results);
							echo "<td>" . $roww['statename'] . "</td>";
							echo "<td>" . $row['cityname'] . "</td>";
							echo "<td> <a style='background: #fff !important;' href = 'city.php?cityid=" . $row['cityid'] . "'>Edit </a> </td>";
							echo "<td> <a style='background: #fff !important;' href = 'deletecity.php?cityid=" . $row['cityid'] . "'>Delete </a> </td>";
							echo "</tr>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>