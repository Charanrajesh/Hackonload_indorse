
<?php


include("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AYUSH</title>
	
  </head>
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">AYUSH</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['username']; ?></p>

        </div>
      </div>
       <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a></li>
		
		 <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Lean Sign-Language</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
			<li><a class="treeview-item" href="alpha.php"><i class="icon fa fa-circle-o"></i>Learn Aplphabets</a></li>
            
			<li><a class="treeview-item" href="action.php"><i class="icon fa fa-circle-o"></i>Learn Actions</a></li>
			 <li><a class="treeview-item" href="viewvideo.php"><i class="icon fa fa-circle-o"></i>Learn Subjects</a></li>
            <li><a class="treeview-item" href="viewtest.php"><i class="icon fa fa-circle-o"></i>Take Test</a></li>
			 <li><a class="treeview-item" href="vewans.php"><i class="icon fa fa-circle-o"></i>View Result</a></li>
  
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Book appointment</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
			<li><a class="treeview-item" href="specilalist.php"><i class="icon fa fa-circle-o"></i>Find and BOOK Specialist</a></li>
            
			<li><a class="treeview-item" href="apstatus.php"><i class="icon fa fa-circle-o"></i>Appointment status</a></li>
            <li><a class="treeview-item" href="deletephp.php"><i class="icon fa fa-circle-o"></i>Cancel appointment</a></li>
  
          </ul>
        </li>
        
       
		 <li><a class="app-menu__item active" href="treatmenthistory.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Treatment history</span></a></li>
        
        <li><a class="app-menu__item" href="nearby.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Near by earch</span></a></li>
	
 <li><a class="app-menu__item" href="emmergency.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">EMMERGENCY REQUEST</span></a></li>
	<li><a class="app-menu__item" href="currentstatus.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ADD CURRENT STATUS</span></a></li>
 
      </ul>

    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i>YOUR HEALTH TREATMENT INFORMATION</h1>
          <p></p>
        </div>
		<?php
	 error_reporting(0);
	 $a=$_SESSION['username'];


$query="SELECT * from treatmentinfo,doctorprofile where treatmentinfo.pid = '$a' and treatmentinfo.doctorid=doctorprofile.doctorid"; 



$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "pocketclinic";

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{


?>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
               
                <div class="col-6">
                  <h5 class="text-right">Treatment Date:<?php echo $data['tdate']; ?> </h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">DOCTOR DETAILS
                  <address><strong><h1><?php echo $data['firstname']; ?>_<?php echo $data['lastname']; ?></h1></strong><br>Phone:<?php echo $data['phonenumber']; ?><br><?php echo $data['address']; ?><br><?php echo $data['specilisation']; ?></address>
                </div>
                
               
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>STATUS</th>
                        
						<th>NEXT ROUTINE CHECKUP</th>
						<th>MEDICINE PRESCRIBED</th>
                        <th>TRATMENT DETAILS</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $data['pstatus']; ?> </td>
						<td><?php echo $data['nextdate']; ?></td>
                        <td><?php echo $data['m1']; ?> <?php echo $data['m3']; ?></td>
                        <td><?php echo $data['treatmentdetails']; ?> </td>
                      
                      </tr>
                     
                    </tbody>
                  </table>
				   <img src="assets/img/faces/<?php echo $data['filename']; ?> " alt="..."/> 
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>
	  <?php } ?>
	
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>