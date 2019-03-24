
<?php


include("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AYUSH</title>
	
  </head>
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    
    <header class="app-header"><a class="app-header__logo" href="index.html">AYUSH</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      
      <ul class="app-nav">
       
   
       
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
           <li><a class="dropdown-item" href="doctoreditprofile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="doctorlogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['username']; ?></p>

        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="doctordashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Doctor profile</span></a></li>
        <li><a class="app-menu__item" href="appointmentnotification.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Appoinment request</span></a></li>
    
         <li><a class="app-menu__item" href="deleteappointmeny.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Delete Appointment</span></a></li>
        <li><a class="app-menu__item" href="addtreatment.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Add treatment history</span></a></li>
        
               <li><a class="app-menu__item active" href="viewtreatment.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View user Health details</span></a></li>
        
	  
      </ul>
    </aside>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i>VIEW USER TREATMENT INFORMATION</h1>
          
        </div>
		 <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH USER HEALTH INFORMATION</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                <div class="form-group col-md-3">
                  <label class="control-label">ENTER USER</label>
                 <input class="form-control"type="text" name="p1">
                </div>
				
                
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary" type = "submit" value ="Submit" name = "submit" >SEARCH</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		</div>
		<?php
	 error_reporting(0);
	 $c=$_POST['p1'];


$query="SELECT * from treatmentinfo,doctorprofile where treatmentinfo.pid = '$c' and treatmentinfo.doctorid=doctorprofile.doctorid"; 


$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "pocketclinic";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query);
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
                  <h5 class="text-right">Last Treatment Date:<?php echo $data['tdate']; ?> </h5>
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
                        <img src="assets/img/faces/face-10.jpg" alt="..."/> <?php echo $data['filename']; ?> 
                      </tr>
                     
                    </tbody>
                  </table>
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
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="js/plugins/pace.min.js"></script>
    
    
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