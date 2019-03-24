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
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">AYUSH</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Edit Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
        <div>
          <p class="app-sidebar__user-name">WELCOME : <?php echo $_SESSION['username']; ?></p>
         
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a></li>
       <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Book appointment</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
			<li><a class="treeview-item" href="specilalist.php"><i class="icon fa fa-circle-o"></i>Find and BOOK Specialist</a></li>
         
			<li><a class="treeview-item" href="calltohome.php"><i class="icon fa fa-circle-o"></i>Home check up</a></li>
         
          </ul>
        <li><a class="app-menu__item" href="charts.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Reminder</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="form-components.php"><i class="icon fa fa-circle-o"></i>Medicine</a></li>
            <li><a class="treeview-item" href="form-custom.php"><i class="icon fa fa-circle-o"></i>Diet plan</a></li>
            <li><a class="treeview-item" href="form-samples.php"><i class="icon fa fa-circle-o"></i>Next routine checkup</a></li>
          
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Treatment history</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.php"><i class="icon fa fa-circle-o"></i>last check up</a></li>
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i>blood report</a></li>
			   <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i>blood report</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Search nearby</span><i class="treeview-indicator fa fa-angle-right"></i></a>
<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Chat</span><i class="treeview-indicator fa fa-angle-right"></i></a>
		 <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Emergency request</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">SEARCH SPECIALISED DOCTOR AND BOOK-APPOINMENT</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH DOCTOR HERE!!!</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                <div class="form-group col-md-3">
                  <label class="control-label">SELECT YOUR CITY</label>
                  <select class="form-control" name="pp">
				  <option value="NULL">---SELECT CITY--</option>
              <option value="MYSORE">MYSORE</option>
              <option value="BANGLORE">BANGLORE</option>
              <option value="MANGLORE">MANGLORE</option>
              <option value="HASSAN">HASSAN</option>
               <option value="HUBLI">HUBLI</option>
      
            </select>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">SELECT SPECIALIST TYPE</label>
                 	<select class="form-control" name="ppp">
			  <option value="NULL">---SELECT SPECIALIST--</option>
			 <option value="cardiology"> Anesthesiologist</option>
              <option value="cardiologist">cardiologist</option>
              <option value="Neurologist">Neurologist</option>
              <option value="Nephrologist">Nephrologist</option>
              <option value="orthopedics">orthopedics</option>
               <option value="Dermatologist">Dermatologist</option>  
            </select>
                </div>
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary" type = "submit" value ="Submit" name = "submit" >SEARCH</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		   <?php
	 error_reporting(0);
	  if(isset($_POST["submit"])){
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "pocketclinic";
$a=$_POST['ppp'];
$b=$_POST['pp'];
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");// we are now connected to database

$result = mysql_query("SELECT * FROM doctorprofile where specilisation='$a' and city='$b'"); // selecting data through mysql_query()



while($data = mysql_fetch_array($result))
{

?>
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Responsive Table</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Doctor Name</th>
                  
                    <th>Clinic Name</th>
                    <th>Phone Number</th>
					<th>Direction</th>
					<th>Experience</th>
                    <th>Avail Time</th>
                    <th> BOOK APPOINTMENT</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                 
                    <td><?php echo $data['firstname']; ?> <?php echo $data['firstname']; ?></td>
                    <td><?php echo $data['clinicname']; ?></td>
                   
					 <td><a href="https://www.truecaller.com/search/in/=<?php$data['phonenumber']; ?>" target="_blank"><?php echo $data['phonenumber']; ?></a></td> 
					
					<td><a href="https://www.google.co.in/maps/place/<?php $data['address'];?>" target="_blank">DIRECTION</a></td> 
                    <td><?php echo $data['workexperience']; ?> YEAR</td>
                    <td><?php echo $data['tfrom']; ?> TO <?php echo $data['tfrom']; ?></td>
					<td><form class="row"  action="" method="post"> 
				
					<input type ="submit" value ="BOOK-APPOINMENT" name = "submit1"/ >
					</form></td>
                 
                  </tr>
               
s
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     <?php } }?>
	    <?php
         if(isset($_POST["submit1"])){
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "pocketclinic";
           $a=$_POST['ppp'];
$b=$_POST['pp'];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
			$result = mysql_query("SELECT * FROM doctorprofile where specilisation='$a' and city='$b'"); // selecting data through mysql_query()



         while($data = mysql_fetch_array($result))
{ $q=$_SESSION['username'];
			$w=$data['firstnumber'];
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO send_request (sender_id,user_id) VALUES ('$q','$')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
		 
		 }      ?>
	    
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
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