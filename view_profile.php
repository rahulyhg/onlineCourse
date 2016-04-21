<?php 
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse");   

//echo session_id(); 
//var_dump($_SESSION);
//print_r($_SESSION);
//echo $_SESSION['email'];
$u_email=$_SESSION['email'];

$name=$email=$roll='';

$sql="select * from users where u_email='$u_email'";
$result=mysqli_query($conn,$sql);
//echo mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['u_name'];
		$email=$row['u_email'];
		$roll=$row['u_id'];
		$roll=strtoupper($roll);
		
		$u_img=$row['u_img'];	
	}
	
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My profile</title>
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
      <a class="navbar-brand" href="index.php" style="font-size:24px">e-nstitute</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php" id="link">Home <span class="sr-only">(current)</span></a></li>
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

<h2 class="text-center" style="margin-top:80px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif ">My profile</h2>
<div class="container well" style="width:60%">
<center><img class="img-responsive img-thumbnail" src="<?php echo $u_img?>" style="width:40%; height:40%;"></center>
<p class="text-center" style="margin-top:20px"><b>Name :</b> <?php echo $name?></p><br><p class="text-center"><strong>Email : </strong><?php echo $email?></p><br><p class="text-center"><b>Roll no:</b> <?php echo $roll?></p></div> 

<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>