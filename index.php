<?php
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse");


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top large" id="main-nav">
  <div class="container-fluid"  style=" background-color:#CCC;"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#" style="font-size:24px">e-nstitute</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#" id="link">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#about us"  id="link">About us</a></li>
        <li><a href="courses.php" id="link">Courses</a></li>
        <li><a href="contact.php" id="link">Contact us</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <?php
			if(!isset($_SESSION['email']))
			{
							
				echo "<ul class='nav navbar-nav navbar-right' >
				<li><a href='register.php' id='link'>Register</a></li> 
				<li><a href='sign_in.php' id='link'>Sign in</a></li> 
				</ul>";
			}
			else
			{
				echo "<ul class='nav navbar-nav navbar-right' >
				<li><a href='dashboard.php' id='link'>Dashboard</a></li> 
				<div class='dropdown' style='float:right; margin-top:15px'>
				  <a id='dLabel' data-target='#' href='http://example.com' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
					<span class='glyphicon glyphicon-cog'</span> 
				  </a>
				
				  <ul class='dropdown-menu' aria-labelledby='dLabel'>
					<a href='view_profile.php'><li style='padding-left:5px;'>View your profile</li></a>
					<a href='logout.php'><li style='padding-left:5px;'>Logout</li></a>
				  </ul>
				</div>
				</ul>";
			}?>
      <!--ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="link" data-toggle="modal" data-target="#register">Register</a></li>
        <li><a href="#" id="link" data-toggle="modal" data-target="#sign-in">Sign in</a></li> 
      </ul--> 
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="jumbotron" id="jumbo-home">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="img/1.jpg" alt="Chania" style=" width:100%;height:600px"> </div>
      <div class="item"> <img src="img/2.jpg" alt="Chania" style=" width:100%;height:600px"></div>
      <div class="item"> <img src="img/3.jpg" alt="Flower" style=" width:100%;height:600px"> </div>
      <div class="item"> <img src="img/4.jpg" alt="Flower" style=" width:100%;height:600px"> </div>
    </div>
    
    <!-- Left and right controls --> 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
</div>

<div class="container" id="about us">
  <div class="row">
    <div class="col-md-6"> <img src="img/5.jpg" class="img-responsive" alt="text"> </div>
    <div class="col-md-6">
      <div class="about-text">
        <div class="section-title" style="padding-top:100px; ">
          <h4>ABOUT US</h4>
          <h2>Some words <strong>about us</strong></h2>
          <hr>
          <div class="clearfix"></div>
        </div>
        <p class="intro">We love to educate people and make them skilled. We offer various courses at free of cost with top quality material and help them equip with latest technologies.</p>
        <ul class="about-list">
          <li style="list-style:none"> <span class="fa fa-dot-circle-o"></span> <strong>Mission</strong> - <em>We deliver uniqueness and quality</em> </li>
          <li style="list-style:none"> <span class="fa fa-dot-circle-o"></span> <strong>Skills</strong> - <em>Delivering fast and excellent results</em> </li>
          <li style="list-style:none"> <span class="fa fa-dot-circle-o"></span> <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container" id="our-team" style="background-color:rgb(60,60,60);">
  <div class="text-center">
    <h3 class="h2"><strong>Our Team</strong></h3>
  </div>
  <div class="row">
    <div class="col-sm-12 col-lg-3"><img src="img/9-b.jpg" class="img-responsive img-circle" id="our-img-1" onMouseOver="this.src='img/9.jpg';" onMouseOut="this.src='img/9-b.jpg'" style="width:250px; height:250px;">
      <p class="panel-body">He is a man of hard work. If he is committed to do some work, he does finish it on time.</p>
    </div>
    <div class="col-sm-12 col-lg-3"><img src="img/9-b.jpg" class="img-responsive img-circle" id="our-img-2" onMouseOver="this.src='img/9.jpg';" onMouseOut="this.src='img/9-b.jpg'" style="width:250px; height:250px;">
      <p class="panel-body">He is a man of hard work. If he is committed to do some work, he does finish it on time.</p>
    </div>
    <div class="col-sm-12 col-lg-3"><img src="img/9-b.jpg" class="img-circle img-responsive" id="our-img-3" onMouseOver="this.src='img/9.jpg';" onMouseOut="this.src='img/9-b.jpg'" style="width:250px; height:250px;">
      <p class="panel-body">He is a man of hard work. If he is committed to do some work, he does finish it on time.</p>
    </div>
    <div class="col-sm-12 col-lg-3"><img src="img/9-b.jpg" class="img-circle img-responsive" id="our-img-4" onMouseOver="this.src='img/9.jpg';" onMouseOut="this.src='img/9-b.jpg'" style="width:250px; height:250px;">
      <p class="panel-body">He is a man of hard work. If he is committed to do some work, he does finish it on time.</p>
    </div>
  </div>
</div>
<div class="panel-heading">
  <p class="text-center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; font-size:28px">testimonials</p>
</div>
<div id="myCarousel2" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
    <li data-target="#myCarousel2" data-slide-to="3"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <img src="img/test1.jpg" alt="Chania" style=" width:100%;height:100%"> </div>
    <div class="item"> <img src="img/test1.jpg" alt="Chania"></div>
    <div class="item"> <img src="img/test1.jpg" alt="Flower"> </div>
    <div class="item"> <img src="img/test1.jpg" alt="Flower"> </div>
  </div>
  
  <!-- Left and right controls --> 
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<footer class="panel-footer" id="foo">
  <p style="color:#CCC" class="text-center">copyright &copy; 2016 e-institute &trade; </p>
</footer>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>
