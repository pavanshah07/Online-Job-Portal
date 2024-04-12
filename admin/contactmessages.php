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
      <title> Contact</title>
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
                <li class="breadcrumb-item"><a style='background: #fff !important;' href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Contact Messages</li>
            </ol>
<div class="container-fluid">
 	    <div class="grid-form1">
			 <h3>Contact Messages</h3>
			 <?php  include 'config.php';
							$str = "select * from contactus";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Messages found: $number</h4>";  ?>
<hr>

  	         <div class="tab-content table table-dark">
						<div class="tab-pane active" id="horizontal-form">
<div class="form-group">
<div class="container-fluid">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
<b>
	 <table id="table">
	 <tr>
	 <th class="text-danger text-center"> Name </th>
	 <th class="text-danger text-center"> Email </th>
     <th class="text-danger text-center"> Message </th>

	 <th class="text-danger text-center"> Delete </th>
	 </tr>

					 <?php
					
							$str = "select * from contactus";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr style='color:black'>";
								
                                echo "<td>" .$row['name']. "</td>"; 
								
								echo "<td>" .$row['email']. "</td>";
                                echo "<td>" .$row['message']. "</td>";

								echo "<td> <a style='background: #fff !important;' href = 'deletemessage.php?contactid=".$row['contactid']."'>Delete </a> </td>";
								echo "</tr>";
                     
							}
                     
                     
                     
							?>


				 </table>
                 </b>

			 </div>
		 </div>
	 </div>
 </div></div></div></div></div></div>
