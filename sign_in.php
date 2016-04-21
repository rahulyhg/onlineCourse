<?php
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse");

$signin_email=$signin_pwd='';
$check_user=$run_check='';

if(isset($_POST['login']))
{
	
	
	
		$signin_email=$_POST['signin_email'];
	
		$signin_pwd=md5($_POST['signin_pwd']);
		
		
	
	
	$check_user="select * from users where u_email='$signin_email' and u_pwd='$signin_pwd'";
	$run_check=mysqli_query($conn,$check_user);
	if(mysqli_num_rows($run_check)>0)
	{
		$_SESSION['email']=$signin_email;
		echo "<script>window.open('index.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Invalid credentials.')</script>";
	}
	
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign in</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1 class="text-center" style="font-size:60px;  font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">e-nstitute</h1>
<div class="container">
  <div class="panel"  style="margin:60px 250px 40px 250px; border:2px solid #000">
    <div class="panel-heading text-center"  style="font-size:36px">Log in</div>
    <div class="panel-body">
      <form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
          <label for="signin_email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10"> 
            <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
            <input type="email" class="form-control" required name="signin_email" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="signin_pwd" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" required name="signin_pwd" placeholder="Password">
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
        <button type="submit" style="margin-left:45%"  class="btn btn-primary" name="login">Sign in</button>
      </form>
      <p class="text-center">New user? Register <a href="register.php">here</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>