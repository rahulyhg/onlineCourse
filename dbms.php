<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Template</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top large" id="main-nav">
  <div class="container-fluid"  style=" background-color:#CCC;"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Brand</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php" id="link">Home</a></li>
        <li><a href="index.php#about us"  id="link">About us</a></li>
        <li><a class="active" id="link">Courses</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="link" data-toggle="modal" data-target="#register">Register</a></li>
        <li><a href="#" id="link" data-toggle="modal" data-target="#sign-in">Sign in</a></li>
      </ul>
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
	


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/effects.js"></script>

</body>
</html>