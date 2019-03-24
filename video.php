

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
    
    <header class="app-header"><a class="app-header__logo" href="index.html">Indian Sign Language Portal/a>
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel .item{
    min-height: 480px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
	margin: 20px;
}
</style>
</head>
<body>
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        
        <div class="carousel-inner">
            <div class="item active">
                <img src="img\img\a.jpg" alt="Slide">
            </div>
           <div class="item ">
                <img src="img\img\b.jpg" alt="Slide">
            </div>
			<div class="item">
                <img src="img\img\c.jpg" alt="Slide">
            </div>
				<div class="item ">
                <img src="img\img\d.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\e.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\f.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\g.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\h.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\i.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\j.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\k.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\l.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\m.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\n.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\o.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\p.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\q.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\r.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\s.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\t.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\u.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\v.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\w.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\x.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\y.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\z.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\aa.jpg" alt="Slide">
            </div>
			</div>
            
			
			
        </div>
        
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
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