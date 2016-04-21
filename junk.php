$(document).ready(function() {
        $('#enroll').click(function(){
					<?php 
					if(isset($_SESSION['email']))
					{
						//mysqli_query($conn,'');
						//header('location:c-content.php');
						echo "<script>window.open('c-content.php','_self')</script>";
					}
					?>
			});
    });
	
	function check()
	{
			<?php 
					if(isset($_SESSION['email']))
					{
						//mysqli_query($conn,'');
						//header('location:c-content.php');
						echo "<script>window.open('c-content.php','_self')</script>";
					}
					else
					{
						//header('location:sign_in.php');
						echo "<script>window.open('sign_in.php','_self')</script>";
					}
				?>	
	}