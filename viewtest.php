<?php


include("auth.php");  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    
    
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
  <body class="app sidebar-mini">
    
    <header class="app-header"><a class="app-header__logo" href="index.html">AYUSH</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
   
        
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Edit Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a></li>
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
			<li><a class="treeview-item" href="specilalist.php"><i class="icon fa fa-circle-o"></i>Find and book specialist</a></li>
            
			<li><a class="treeview-item" href="apstatus.php"><i class="icon fa fa-circle-o"></i>Appointment status</a></li>
            <li><a class="treeview-item" href="deletephp.php"><i class="icon fa fa-circle-o"></i>Cancel appointment</a></li>
  
          </ul>
        </li>
         <li><a class="app-menu__item" href="chat.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Chat with Doctor</span></a></li>
        
       
		 <li><a class="app-menu__item" href="treatmenthistory.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Treatment history</span></a></li>
        
        <li><a class="app-menu__item" href="nearby.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Near by search</span></a></li>
	<li><a class="app-menu__item" href="notification.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Notification</span></a></li>
	
 <li><a class="app-menu__item" href="emmergency.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Emmergency request</span></a></li>
		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">SEARCH SUBJECTWISE TEST</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH SBJECT HERE!!!</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                <div class="form-group col-md-3">
                  <label class="control-label">SELECT SUBJECT</label>
                    <select class="form-control" name="p1">
				  <option value="NULL">---SELECT SUBJECT--</option>
              <option value="PHYSICS">PHYSICS</option>
              <option value="CHEMISTRY">CHEMISTRY</option>
              <option value="BIOLOGY">BIOLOGY</option>
              <option value="BASIC">BASIC ACTIVITIES</option>
               <option value="OTHER">OTHER</option>
      
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
	 
	 $a=$_POST['p1'];



$query="SELECT * FROM test where subject='$a' "; 



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
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
		  	  <img src="img/<?php echo $data['img']; ?>" alt="..."/> 
			<h2><?php echo $data['about']; ?></h2><br>
			 A :<?php echo $data['ob1']; ?><br>
					 B :<?php echo $data['ob2']; ?><br>
					 C :<?php echo $data['ob3']; ?><br>
					 D :<?php echo $data['ob4']; ?><br>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
             
                  
                 
				  <th>Choose Currect Option</th>
					<th>Test ID</th>
                  
                   <th>Your ID </th>
				    <th>Send </th>
                  </tr>
                </thead>
                <tbody>
				 
				
				  <tr>
					
				
                   
                    
					<form class="row"  action="ansdb.php" method="post"> <td> <select class="form-control" name="p2">
				  <option value="NULL">---Choose Answer--</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              
            </select></td>
					<td><input  type="text" readonly name="p1" value="<?php echo $data['testid']; ?>"  /></td>
					
			<td><input  type="text" name="p3" readonly value="<?php echo $_SESSION['username']; ?>"  /></td>
					<td>
					
					
					<button class="btn btn-primary" type = "submit"  >Send Answer</button>
					</form></td>
                 
                  </tr>
               
                
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
		

            </div>
          </div>
        </div>
      </div>
      <?php  }?>
	   
    </main>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="js/plugins/pace.min.js"></script>
    
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