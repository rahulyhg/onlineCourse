<?php 
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse") or die('failed'.mysql_error());
	
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>C</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
	
</script>
</head>


<body>
<nav class="navbar navbar-default navbar-fixed-top large" id="main-nav"> 
  <div class="container-fluid"  style=" background-color:#CCC;"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">e-nstitute</a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php" id="link">Home</a></li>
        <li><a href="index.php#about us"  id="link">About us</a></li>
        <li><a href="courses.php"  id="link">Courses</a></li>
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
    <a href='view_profile.php'<li style='padding-left:5px;'>View your profile</li></a>
    <a href='logout.php'><li style='padding-left:5px;'>Logout</li></a>
  </ul>
</div>
				</ul>";
			}?>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container" style="margin-top:80px; width:100%; padding:30px">
<div class="row">
  <div class="col-md-4 well-grey text-center" style="color:#FFF; font-size:18px !important; ">C-Introduction<br>
    <span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span>  4.6<br>
    <br>
    Reviews from students : <br>
    <br>
    <img class="img-thumbnail img-responsive img-circle" src="img/9.jpg" style="width:200px; height:200px"><br>
    " This course is very useful as it covers in detail from the basics.It lays a strong foundation to learn more languages with great ease."<br><br>  <img class="img-thumbnail img-responsive img-circle" src="img/9.jpg" style="width:200px; height:200px"><br>
  <p>  " This course is very useful as it covers in detail from the basics.It lays a strong foundation to learn more languages with great ease."</p></div>
  <div class="col-md-8 well">
    <div class="panel">
      <div class="panel-heading text-left" style="font-size:22px; "> About the course</div>
      <div class="panel-body">This course aims to teach everyone the basics of programming computers using C language. We cover the basics of how one constructs a program from a series of simple instructions. The course has no pre-requisites and avoids all but the simplest mathematics. Anyone with moderate computer experience should be able to master the materials in this course. This course will cover all the chapters of the standard textbook “ANSI C”.Once a student completes this course, they will be ready to take more advanced programming courses.<br>
        <br>
        <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 2-4 hours/week<br>
        <span class="glyphicon glyphicon-globe"></span> Language : English </div>
    </div>
    <div class="panel">
      <div class="panel-heading text-center" style="font-size:22px; ">Upcoming session : April 15 - July 14</div>
      
      <?php 
						if(isset($_SESSION['email']))
						{
							
							$email=$_SESSION['email'];
							$check_user="select c_enroll from users where u_email='$email'";
							$run_check=mysqli_query($conn,$check_user);
							$row=mysqli_fetch_array($run_check);
							if($row['c_enroll']==NULL)
							{
								
								echo "<form method='post'><div class='panel-body'><center><button type='submit' id='enroll' name='enroll' class='btn butn-orange center-block' style='margin-left:230px; margin-right:230px; font-size:18px'>Enroll</button></center></div></form>";
							}
							else
							{
								echo "<form method='post'><div class='panel-body'><center><button type='submit' id='resume' name='resume' class='btn butn-orange center-block' style='margin-left:230px; margin-right:230px; font-size:18px'>Resume</button></center></div></form>";
							}
						}
						else
							{
								echo "<form method='post'><div class='panel-body'><center><button type='submit' id='enroll' name='enroll' class='btn butn-orange center-block' style='margin-left:230px; margin-right:230px; font-size:18px'>Enroll</button></center></div></form>";
							}
		?>
      
    </div>
    <?php 
					if(isset($_POST['enroll']))
					{
						if(isset($_SESSION['email']))
						{
							//mysqli_query($conn,'');
							//header('location:c-content.php');
							$email=$_SESSION['email'];
							$check_user="select c_enroll from users where u_email='$email'";
							$run_check=mysqli_query($conn,$check_user);
							$row=mysqli_fetch_array($run_check);
							if($row['c_enroll']==NULL)
							{
								$sql = "UPDATE users SET c_enroll=1 WHERE u_email='$email'";	
								mysqli_query($conn,$sql);
								echo "<script>window.open('c-content.php','_self')</script>";
							}
							else
							{
								 }
							
							
							
						}
						else
						{
							//header('location:sign_in.php');
							echo "<script>window.open('sign_in.php','_self')</script>";
						}
					}
					
					if(isset($_POST['resume']))
					{
						if(isset($_SESSION['email']))
						{
							
								echo "<script>window.open('c-content.php','_self')</script>";
						
							
							
							
						}
					}
					?>
    
    <div class="panel">
      <div class="panel-heading text-center" style="font-size:23px; ">Instructor</div>
      <div class="panel-body"><center><img class="img-circle img-responsive img-thumbnail" src="img/9.jpg" style="width:200px; height:200px; "></center>
        <p class="text-center"><span style="font-size:20px">Charles Severance</span><br>
          Associate Professor<br>
          School of Information</p>
      </div>
    </div>
    <div class="panel">
      <div class="panel-heading" style="font-size:23px; ">Share : </div>
      <div class="panel-body"><span class="fa fa-4x fa-facebook-official" style="margin-right:5px;"> </span><span class="fa fa-4x fa-linkedin-square"  style="margin-right:5px;"></span><span class="fa fa-4x fa-twitter-square" style="margin-right:5px;"></span><span class="fa fa-4x fa-google-plus-square" style="margin-right:5px;"></span>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>