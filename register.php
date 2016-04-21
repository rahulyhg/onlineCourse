<?php
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse") or die('failed'.mysql_error()); 

	if(isset($_POST['register']))
		{
			$u_name=$_POST['reg_name'];
			$u_email=$_POST['reg_email'];
			$u_roll=$_POST['reg_roll'];
			$u_password=md5($_POST['reg_pass']);
			$u_img=$_FILES['reg_img']['name'];
			$u_imgup=$_FILES['reg_img']['tmp_name'];
			$path="ups/$u_img";
			move_uploaded_file($u_imgup,$path);
			$check_user="select * from users where u_email='$u_email'";
			$run_check=mysqli_query($conn,$check_user);
			//echo mysqli_num_rows($run_check);
			if( mysqli_num_rows($run_check)>0){
				echo "<script>alert('User already exists')</script>";
				exit();
			}
		$insert_user="insert into users(u_name,u_id,u_email,u_pwd,u_img) values ('$u_name','$u_roll','$u_email','$u_password','$path')"; 
		$run_delete=mysqli_query($conn,$insert_user);
		$_SESSION['email']=$u_email;
		echo "<script>window.open('index.php','_self')</script>";
}


?>	
	

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">

</script>
<style type="text/css">
        .veryweak{
            color:#FF0000;
        }
        .weak{
            color:#FF9900;
        }
        .medium{
            color:#0066FF;
        }
        .strong{
            color:#00CC00;
        }
        .verystrong{
            color:#060;
        }
</style>
</head>

<body>
<div class="container">
<h1 class="text-center" style="font-size:60px;  font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">e-nstitute</h1>
  <div class="panel" style="margin:60px 250px 40px 250px; border:2px solid #000">
    <div class="panel-heading text-center" style="font-size:36px">Registration</div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div class="form-group required">
          <label for="reg-name" class="col-sm-2 control-label">Name &lowast;</label>
          <div class="col-sm-10"> 
            <!--span class="input-group-addon glyphicon glyphicon-user sr-only" style="float:left; "></span-->
            <input type="text" class="form-control" required name="reg_name" placeholder="Full name"></div> 
        </div>
        <div class="form-group required">
          <label for="reg-name" class="col-sm-2 control-label">Roll no: &lowast;</label>
          <div class="col-sm-10"> 
            <!--span class="input-group-addon glyphicon glyphicon-user sr-only" style="float:left; "></span-->
            <input type="text" class="form-control" required name="reg_roll" placeholder="Roll no." >
 		  </div>
        </div>
        <div class="form-group">
          <label for="reg-email" class="col-sm-2 control-label">Email *</label>
          <div class="col-sm-10"> 
            <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
            <input type="email" class="form-control" required name="reg_email" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="reg-pass" class="col-sm-2 control-label">Password *</label>
          <div class="col-sm-10"> 
            <input type="password" class="form-control" required name="reg_pass" id="password">
            <span id="pwdMeter" style="float:right" class="neutral"></span>
          </div>
        </div>
        <div class="form-group">
          <label for="reg-con-pass" class="col-sm-2 control-label">Confirm password *</label>
          <div class="col-sm-10"> 
            <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
            <input type="password" class="form-control" required name="reg_con_pass">
          </div>
        </div>
        <div class="form-group">
          <label for="reg-img" class="col-sm-2 control-label">Upload image *</label>
          <div class="col-sm-10"> 
            <!--span class="input-group-addon glyphicon glyphicon-user has-feedback" style="float:left; "></span-->
            <input type="file" class="navbar-form" required name="reg_img">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left:45%" name="register">Sign up</button>
      </form>
      <br>
      <p class="text-center">Aleady registered? Sign in <a href="sign_in.php">here</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
<script type="text/javascript" src="js/jquery.pwdMeter.js"></script>
</body>
</html>