<?php 
session_start();
$conn=mysqli_connect("localhost","root","","onlinecourse");


$email=$_SESSION['email'];
$name=$roll='';

$check_user="select * from users where u_email='$email'";
$run_check=mysqli_query($conn,$check_user);
$row=mysqli_num_rows($run_check);
//$name=$row['u_name'];
//echo mysqli_num_rows($run_check);
if(mysqli_num_rows($run_check)>0){
	while($row=mysqli_fetch_array($run_check))
	{
		$name=$row['u_name'];
		$roll=$row['u_id'];
		$roll=strtoupper($roll);	
	}
	
	}
?>



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

<div class="container" id="frame" style="border:2px #000000 double; margin-top:50px; width:60%">
	
    
	<h1 class="text-center text-uppercase" style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:#F00; ">
   Certificate of Excellence</h1>
   
   <div class="panel-body" style="font-size:20px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">This is to certify that <?php echo '<b>'.$name.'</b>';?> bearing Roll No: <?php echo '<b>'.$roll.'</b>';?> has successfully completed the course of <b>C-Introduction</b> with A grade.We,hereby declare that,this certificate can be shown as a proof of expertise of his knowledge in this domain.<br><br>Note : This certificate is digitally signed and hence doesn't require a signature.
</div>

<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>