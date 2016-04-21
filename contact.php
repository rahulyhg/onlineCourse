<?php 
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse") or die('failed'.mysql_error()); 

if(isset($_POST['contact'])){
	
$to="ambatikirankumar4@gmail.com";
$sub="Query";
$name=$_POST['name'];
$email='From'.$_POST['email'];
$message=$_POST['message'];

if(mail($to,$sub,$message,$email))
{
	echo 'Query asked.';
}
else
{ 
	echo 'Query failed.';
}
}
?>

<!doctype html>
<html>
        <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
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
              <a class="navbar-brand" href="#">e-nstitute</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
        <li><a href="index.php" id="link">Home</a></li>
        <li><a href="index.php#about us"  id="link">About us</a></li>
        <li><a href="courses.php" id="link">Courses</a></li>
        <li><a href="#" id="link">Contact us</a></li>
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
            </div>
    <!-- /.navbar-collapse --> 
  </div>
          <!-- /.container-fluid --> 
        </nav>
        
<div class="container" style="width:80%; height:80%">
<div class="row" style="padding-top:120px">
<div class="inner-page">
          <div id="contact" class="well">
    <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30241.153296337015!2d78.88398387829588!3d18.65752576835136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x1d7d45b247486230!2sJNTUH+College+Of+Engneering!5e0!3m2!1sen!2sin!4v1459582929007" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <br />
    <br>
    <br>
    <button id="address" href="#" class="btn btn-lg btn-primary" data-toggle="popover" title="Address" data-content="JNTUH College Of Engineering Jagtial,
Nachupally (Kondagattu), Kodimyal mandal,
Karimnagar Dist. Telangana 505 501 India" role="button">Get Address</button>
    <br>
    <br>
    <h3>Contact Us</h3>
    <p>Please use the form below to contact us</p>
    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
      </div>
              <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
      </div>
              <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="5"></textarea>
      </div>
              <button type="submit" class="btn btn-default" name='contact'>Send</button>
            </form>
  </div>
        </div>
<!-- /. col-md-8 --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>