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
	<link rel="stylesheet" href="css1/style.css" />
    <title>AYUSH</title>
  </head>
  <body class="app sidebar-mini">
  <?php
	require('db.php');
	session_start();
    
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	
        $query = "SELECT * FROM `entrepreneur` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: entprofile.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='entlogin.php'>Login</a></div>";
				}
    }else{
	
?>
    
    <header class="app-header"><a class="app-header__logo" href="http://localhost/pocketclinic/">AYUSHSS</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      
      
    </header>
    
 
   <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">HOME</span></a></li>
		 <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">KNOW MORE</span></a></li
		  <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">CONTACT US</span></a></li>
         </ul>
		 </aside>

  
          </ul>
    <main class="app-content">
      <div class="app-title">
        <div> 
          <h1><i class="fa fa-dashboard"></i> Entrepreneur LOGIN</h1>
          
        </div>
       
      </div>
     
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
          <div class="form">
<h1> Entrepreneur Log In</h1>
<form action="" method="post" name="entlogin">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='entregistration.php'>Register Here</a></p>
<p> <a href='efgp.php'>Forgot password</a></p>
<br /><br />

</div>
<?php } ?>
          </div>
        </div>
		 <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
           
			  
              
            <div class="tile-body">
               <h3 class="title">Welcome Service provider</h3><br>
			  <br>
              <b>"better service which keep track the business in healthy way, doing a business is not only for money it also for good service for others"</b>
			  <br>
			  <br>
			  <br><br>
			  <b> "Your service which helps to save the life , please don't comeback for other reasons"<b><br><br> <br><br>
            </div>
          </div>
        </div></DIV>
		
 <marquee behavior="scroll" direction="left">
																		  
                  
                              
                                  
                                    <img src="assets/img/faces/face-4.jpg" alt="..."/>  <img src="assets/img/faces/face-2.jpg" alt="..."/><img src="assets/img/faces/face-1.jpg" alt="..."/>

                                      

                             
                         
                           
                        </marquee>
    </main>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="js/plugins/pace.min.js"></script>
    
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
   
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