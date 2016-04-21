<?php 
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse") or die('failed'.mysql_error()); 

if(isset($_POST['contact'])){
	
$to="ambatikirankumar4@gmail.com";
$sub="Query";
$message=$_POST['message'];
$email=$_SESSION['email'];


if(mail($to,$sub,$message,$email))
{
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
<title>C-Introduction</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
	function slide2()
	{
		$('#week-2').slideToggle();	
	}
	function slide3()
	{
		$('#week-3').slideToggle();	
	}
	function slide4()
	{
		$('#week-4').slideToggle();	
	}
	function slideG()
	{
		$('#grand').slideToggle();	
	}
</script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top large" id="main-nav">
  <div class="container-fluid"  style=" background-color:#CCC;"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">e-nstitute</a></div>
    
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
      <ul class="nav navbar-nav navbar-right">
        <ul class='nav navbar-nav navbar-right' >
          <li><a href='dashboard.php' id='link'>Dashboard</a></li>
          <div class='dropdown' style='float:right; margin-top:15px'> <a id='dLabel' data-target='#' href='http://example.com' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-cog' style="margin-right:10px;"></span> </a>
            <ul class='dropdown-menu' aria-labelledby='dLabel'>
              <a href='view_profile.php'>
              <li style='padding-left:5px;'>View your profile</li>
              </a> <a href='logout.php'>
              <li style='padding-left:5px;'>Logout</li>
              </a>
            </ul>
          </div>
        </ul>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!--Modal goes here-->

<div class="container" style="margin-top:80px; width:100%; padding:30px">
<div class="row">
<div class="col-md-4 well-grey text-center" style="color:#FFF; font-size:18px !important; ">C-Introduction<br>
  <span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span> 4.6<br>
  <br>
  Reviews from students : <br>
  <br>
  <img class="img-thumbnail img-responsive img-circle" src="img/9.jpg" style="width:200px; height:200px"><br>
  " This course is very useful as it covers in detail from the basics.It lays a strong foundation to learn more languages with great ease."<br>
  <br>
  <img class="img-thumbnail img-responsive img-circle" src="img/9.jpg" style="width:200px; height:200px"><br>
  <p> " This course is very useful as it covers in detail from the basics.It lays a strong foundation to learn more languages with great ease."</p>
</div>
<div class="col-md-8 well">
<div class="panel">
  <div class="panel-heading text-center" style="font-size:22px; ">Course contents</div>
  <div class="panel-body"> <a class="btn butn-orange">WEEK 1:</a>
    <ol>
      <li><a href="c-1-1.php">Introduction</a></li>
      <li><a href="#">Decision control</a></li>
      <li><a href="#">Loop control</a></li>
    </ol>
    <ul>
      <li style="list-style:none; float:left"><span class="fa fa-desktop"></span> <a href="quiz-1.php" target="_blank">Weekend quiz</a></li>
    </ul>
    <br>
    <br>
    <?php 
							$email=$_SESSION['email'];
							$check_user="select c_status from users where u_email='$email'";
							$run_check=mysqli_query($conn,$check_user);
							$row=mysqli_fetch_array($run_check);
							$c_status=$row['c_status'];
							
							if($c_status>=1)
							{
								echo "<a class='btn butn-orange' onClick='slide2()'>WEEK 2</a>
								<ol id='week-2' style='display:none;'>
								  <li><a href='c-2-1.php'>Case control</a></li>
								  <li><a href='c-2-2.php'>Functions and pointers</a></li>
								  <li><a href='c-2-3.php'>Data types</a></li>
								  <li style='list-style:none; float:left'><span class='fa fa-desktop'></span> <a href='quiz-2.php' 			target='_blank'>Weekend quiz</a></li>
								</ol>
								<br>";
	}
							else
							{
								echo "<a class='btn butn-orange disabled'><span class='glyphicon glyphicon-lock'></span> WEEK 2</a>
								<ol id='week-2' style='display:none;'>
								  <li><a href='c-2-1.php'>Case control</a></li>
								  <li><a href='c-2-2.php'>Functions and pointers</a></li>
								  <li><a href='c-2-3.php'>Data types</a></li>
								  <li style='list-style:none; float:left'><span class='fa fa-desktop'></span> <a href='#' target='_blank'>Weekend quiz</a></li>
								</ol>
								<br>";
	}
	
	
							if($c_status>=2)
							{
								echo "<a class='btn butn-orange' onClick='slide3()'>WEEK 3</a>
								<ol id='week-3' style='display:none;'>
								  <li><a href='c-3-1.php'>Arrays</a></li>
								  <li><a href='c-3-2.php'>Strings</a></li>
								  <li><a href='c-3-3.php'>Structures and unions</a></li>
								  <li style='list-style:none; float:left'><span class='fa fa-desktop'></span> <a href='quiz-3.php' 			target='_blank'>Weekend quiz</a></li>
								</ol>
								<br>";
	}
							else
							{
								echo "<a class='btn butn-orange disabled'><span class='glyphicon glyphicon-lock'></span> WEEK 3</a>
								<ol id='week-3' style='display:none;'>
								  <li><a href='c-3-1.php'>Arrays</a></li>
								  <li><a href='c-3-2.php'>Strings</a></li>
								  <li><a href='c-3-3.php'>Structures and unions</a></li>
								  <li style='list-style:none; float:left'><span class='fa fa-desktop'></span> <a href='#' 			target='_blank'>Weekend quiz</a></li>
								</ol>
								<br>";
	}
	
	
	
							if($c_status>=3)
							{
								echo "<a class='btn butn-orange' onClick='slide4()'>WEEK 4</a>
								<ol id='week-4' style='display:none;'>
								  <li><a href='c-4-1.php'>Files</a></li>
								  <li><a href='c-4-2.php'>C preprocrssing</a></li>
								  
								  <li style='list-style:none; float:left'><span class='fa fa-desktop'></span> <a href='quiz-4.php' 			target='_blank'>Weekend quiz</a></li>
								</ol>
								<br>";
	}
							else
							{
								echo "<a class='btn butn-orange disabled'><span class='glyphicon glyphicon-lock'></span> WEEK 4</a>
								<ol id='week-4' style='display:none;'>
								  <li><a href='#'>Files</a></li>
								  <li><a href='#'>C preprocessing</a></li>
								 
								  <li style='list-style:none; float:left'><span class='fa fa-desktop'></span> <a href='#' target='_blank'>Weekend quiz</a></li>
								</ol>
								<br>";
	}
	
	
						
							if($c_status>=4)
							{
								echo "<a  class='btn butn-orange' href='grand-test.php'</span> GRAND TEST</a>";
	}
							else
							{
								echo "<a  class='btn butn-orange disabled' ><span class='glyphicon glyphicon-lock'></span> GRAND TEST</a>";
	}
	
	
					
							
							
							
							
							
							
	?>
    
    <!--a class="btn butn-orange" onClick="$('#week-9').slideDown()"><span class="glyphicon glyphicon-lock"></span> WEEK 2</a>
    <ol id="week-9" style="display:none;">
      <li><a href="#">Case control</a></li>
      <li><a href="#">Functions and pointers</a></li>
      <li><a href="#">Data types</a></li>
      <li style="list-style:none; float:left"><span class="fa fa-desktop"></span> <a href="#" target="_blank">Weekend quiz</a></li>
    </ol>
    <br>
    
    
    
    <a  class="btn butn-orange disabled" onClick="$('#week-3').slideDown()"><span class="glyphicon glyphicon-lock"></span> WEEK 3</a>
    <ol id="week-3" style="display:none; ">
      <li><a href="#">Arrays</a></li>
      <li><a href="#">Strings</a></li>
      <li><a href="#">Structure and union</a></li>
      <li style="list-style:none; float:left"><span class="fa fa-desktop"></span> <a href="#" target="_blank">Weekend quiz</a></li>
      <br>
    </ol>
    <br>
    
    
    
    <a  class="btn butn-orange disabled" onClick="$('#week-4').slideDown()"><span class="glyphicon glyphicon-lock"></span> WEEK-4 </a>
    <ol id="week-4" style="display:none; ">
      <li><a href="#">Files</a></li>
      <li><a href="#">C preprocessing</a></li>
      <li style="list-style:none; float:left"><span class="fa fa-desktop"></span> <a href="#" target="_blank">Weekend quiz</a></li>
      <br>
    </ol>
    <br--> 
    
    <!--a  class="btn butn-orange disabled" ><span class="glyphicon glyphicon-lock"></span> GRAND TEST</a--> 
    
  </div>
</div>
<!--div class="panel">
  <div class="panel-body"><center><a  class="btn butn-orange disabled"><span class="glyphicon glyphicon-lock"></span> Download certificate</a></center></div>
</div-->

<?php if($c_status>=5)
							{
								echo "<div class='panel'>
  <div class='panel-body'><center><a  class='btn butn-orange' href='certificate_c.php'>Download certificate</a></center></div>
</div>";
	}
							else
							{
								echo "<div class='panel'>
  <div class='panel-body'><center><a  class='btn butn-orange disabled'><span class='glyphicon glyphicon-lock'></span> Download certificate</a></center></div>
</div>";
	}?>
<div class="container">
  <h3 style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Facing any doubt ? Ask here : </h3>
  <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
      <textarea class="form-control" name="message" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-default" name='contact'>Send</button>
  </form>
</div>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>