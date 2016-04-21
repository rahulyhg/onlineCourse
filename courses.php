<?php 
session_start();

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Courses</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body> 
<nav class="navbar navbar-default navbar-fixed-top large" id="main-nav">
  <div class="container-fluid"  style=" background-color:#CCC;"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php" style="color:#000; font-size:24px; background-color:#CCC;">e-nstitute</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php" id="link">Home</a></li>
        <li><a href="index.php#about us"  id="link">About us</a></li>
        <li><a class="active" id="link">Courses</a></li>
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
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="modal fade" tabindex="-1" role="dialog" id="sign-in">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sign in</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10"> 
              <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              <!--span class="glyphicon glyphicon-eye-close form-control-feedback"></span--> 
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox">
                  Remember me </label>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sign in</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="register">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="reg-name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10"> 
              <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
              <input type="text" class="form-control" id="reg-name" placeholder="Full name">
            </div>
          </div>
          <div class="form-group">
            <label for="reg-email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10"> 
              <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
              <input type="email" class="form-control" id="reg-email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="reg-pass" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10"> 
              <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
              <input type="password" class="form-control" id="reg-pass">
            </div>
          </div>
          <div class="form-group">
            <label for="reg-con-pass" class="col-sm-2 control-label">Confirm password</label>
            <div class="col-sm-10"> 
              <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
              <input type="password" class="form-control" id="reg-con-pass">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sign up</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<header class="h1 text-center" style="margin-top:80px; font-family:Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace">Courses offered</header> <br><br> 
<div class="col-md-12" style="padding:0px 100px 100px 100px">
  <div class="panel panel-default" style="border-width:2px">
    <div class="panel-heading panel-black-heading">
      <h3 class="panel-title">C-Introduction</h3>
    </div>
    <div class="panel-body">
      <div class="media"> <a class="pull-left" href="#"> <img class="media-object img-circle" src="img/c.png" style="width:40%" alt="Small Image"> </a>
        <div class="media-body">
          <h4 class="media-heading">Description</h4>
          <p>This course aims to teach everyone the basics of programming computers using C language. We cover the basics of how one constructs a program from a series of simple instructions. The course has no pre-requisites and avoids all but the simplest mathematics.....</p>
        </div>
      </div>
      <a class="btn butn" href="c.php" style="float:right">READ MORE...</a>
    </div>
  </div>
  <div class="panel panel-default"  style="border-width:2px">
    <div class="panel-heading panel-black-heading">
      <h3 class="panel-title">JAVA</h3>
    </div>
    <div class="panel-body">
      <div class="media"> <a class="pull-left" href="#"> <img class="media-object img-circle" src="img/java.jpg" style="width:20%" alt="Small Image"> </a>
        <div class="media-body">
          <h4 class="media-heading">Description</h4>
          <p>This course aims to teach everyone the basics of programming computers using JAVA language. We cover the basics of how one constructs a program from a series of simple instructions. The course has no pre-requisites and avoids all but the simplest mathematics.....</p>
        </div>
      </div>
      <a class="btn butn" href="java.php" style="float:right">READ MORE...</a>
    </div>
  </div>
  <div class="panel panel-default"  style="border-width:2px"> 
    <div class="panel-heading panel-black-heading">
      <h3 class="panel-title">DBMS</h3>
    </div>
    <div class="panel-body">
      <div class="media"> <a class="pull-left" href="#"> <img class="media-object img-circle" src="img/dbms.gif" style="width:80%" alt="Small Image"> </a> 
        <div class="media-body">
          <h4 class="media-heading">Description</h4>
          <p>This course aims to teach everyone the basics of programming computers using C language. We cover the basics of how one constructs a program from a series of simple instructions. The course has no pre-requisites and avoids all but the simplest mathematics.....</p>
        </div>
      </div>
      <a class="btn butn" href="dbms.php" style="float:right">READ MORE...</a>
    </div>
  </div>
</div>
</div>
</div>

<footer>
  <p style="color:#000" class="text-center">copyright &copy; 2016 e-institute &trade; </p>
</footer>

<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>
