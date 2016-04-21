<?php 
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top large" id="main-nav">
  <div class="container-fluid" style="background-color:#CCC"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#" style="font-size:28px; color:">e-nstitute</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php" id="link">Home</a></li>
        <li><a href="index.php#about us"  id="link">About us</a></li>
        <li><a href="courses.php" id="link">Courses</a></li>
        <li><a href="contact.php" id="link">Contact us</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class='nav navbar-nav navbar-right' >
        <li><a href='dashboard.php' id='link'>Dashboard</a></li>
        <div class='dropdown' style='float:right; margin-top:15px'> <a id='dLabel' data-target='#' href='http://example.com' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-cog'</span> </a>
          <ul class='dropdown-menu' aria-labelledby='dLabel'>
            <a href='view_profile.php'>
            <li style='padding-left:5px;'>View your profile</li>
            </a> <a href='logout.php'>
            <li style='padding-left:5px;'>Logout</li>
            </a>
          </ul>
        </div>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container" style="width:60%">
  <h1 class="text-center" style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; margin-top:100px;  ">Courses registered</h1>
  <?php 
							$email=$_SESSION['email'];
							$check_user="select c_enroll,c_status,java_enroll,java_status from users where u_email='$email'";
							$run_check=mysqli_query($conn,$check_user);
							$row=mysqli_fetch_array($run_check);
							$c_enroll=$row['c_enroll'];
							$c_status=$row['c_status'];
							$java_enroll=$row['java_enroll'];
							$java_status=$row['java_status'];
							if($c_enroll)
							{
								$c_status=($c_status*20).'%';
								echo "<h3>C-Introduction</h3>
								
    <div class='progress'><div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuemin='0' aria-valuemax='100' aria-valuenow='60' style='width:$c_status'>$c_status completed</div></div>";
	
								if($c_status==100)
								{
									echo "<CENTER><a  class='btn butn-orange'  href='certificate_c.php'></span>DOWNLOAD CERTIFICATE</a></center>";
								}
							}
							if($java_enroll)
							{
								$java_status=($java_status*20).'%';
								echo "<h3>JAVA</h3>
								
    <div class='progress'><div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuemin='0' aria-valuemax='100' aria-valuenow='60' style='width:$java_status'>$java_status completed</div></div>";
	
								if($java_status==100)
								{
									echo "<CENTER><a  class='btn butn-orange' href='certificate_java.php'></span>DOWNLOAD CERTIFICATE</a></center>";
								}
							}
	?>
  
  <!--h3>C-Introduction</h3>
    <div class="progress"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="60" style="width:60%">60%</div></div>
    
    <h3>JAVA </h3>
    <div class="progress"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="60" style="width:60%">60%</div></div--> 
</div>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>