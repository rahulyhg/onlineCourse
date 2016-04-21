<?php
session_start();

$conn=mysqli_connect('localhost','root','','onlinecourse') or die('Failed');

if(isset($_POST['submit']))
{
	$answer1 = $_POST['question-1-answers'];

	$answer2 = $_POST['question-2-answers'];
	
	$answer3 = $_POST['question-3-answers'];
	
	$answer4 = $_POST['question-4-answers'];
	
	$answer5 = $_POST['question-5-answers'];
	
	$answer6 = $_POST['question-6-answers'];

	$answer7 = $_POST['question-7-answers'];
	
	$answer8 = $_POST['question-8-answers'];
	
	$answer9 = $_POST['question-9-answers'];
	
	$answer10 = $_POST['question-10-answers'];
	
	
	
	$totalCorrect = 0;
	
	if ($answer1 == "D") { $totalCorrect++; }
	
	if ($answer2 == "B") { $totalCorrect++; }
	
	if ($answer3 == "C") { $totalCorrect++; }
	
	if ($answer4 == "C") { $totalCorrect++; }
	
	if ($answer5 == "A") { $totalCorrect++; }
	
	if ($answer6 == "C") { $totalCorrect++; }
	
	if ($answer7 == "B") { $totalCorrect++; }
	
	if ($answer8 == "C") { $totalCorrect++; }
	
	if ($answer9 == "B") { $totalCorrect++; }
	
	if ($answer10 == "A") { $totalCorrect++; }
	
	/*if($totalCorrect>6)
	{
		echo "<script>alert('Passed : '.$totalCorrect.'/ 10')</script>";
	}*/
	
	echo "<script>alert($totalCorrect / 10)</script>";
	$email=$_SESSION['email'];
	$check_user= "select * from users WHERE u_email='$email'";	
	$run_check=mysqli_query($conn,$check_user);
	$row=mysqli_fetch_array($run_check);
	echo $row['c_marks'];
	$totalCorrect=$totalCorrect+$row['c_marks'];
	$sql = "UPDATE users SET c_marks='$totalCorrect',c_status=5 WHERE u_email='$email'";	
	mysqli_query($conn,$sql);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grand test</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1 class="text-center">Grand test</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"><ol>
  <li>
    <!--1--><h3>A C variable cannot start with</h3>
    <div>
      <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
      <label for="question-1-answers-A">A) An alphabet </label>
    </div>
    <div>
      <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
      <label for="question-1-answers-B">B) A number</label>
    </div>
    <div>
      <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
      <label for="question-1-answers-C">C) A special symbol other tha underscore</label>
    </div>
    <div>
      <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
      <label for="question-1-answers-D">D) Both (b) and (c)</label>
    </div>
  </li>
  
  
  <li>
    <!--2--><h3>What are the values of a and b?
    	<pre>main( )
{
    int a, b ;
    a = -3 - - 3 ;
    b = -3 - - ( - 3 ) ;
    printf ( "a = %d b = %d", a, b ) ;
}</pre></h3>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
      <label for="question-1-answers-A">A) 0,6 </label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
      <label for="question-1-answers-B">B) 0,-6</label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
      <label for="question-1-answers-C">C) 1,6</label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
      <label for="question-1-answers-D">D) 1,-6</label>
    </div>
  </li>
  
  
  
  <li>
    <!--3--><h3>What is the output of the program ?<pre>main( )
{
    int i ;
    for ( i = 1 ; i <= 5 ; printf ( "\n%d", i ) ) ;
    i++ ;
}</pre></h3>
    <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
      <label for="question-1-answers-A">A) Prints 1 once </label>
    </div>
    <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
      <label for="question-1-answers-B">B) Prints 1 infinite times</label>
    </div>
    <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
      <label for="question-1-answers-C">C) Prints 1 till Stack overflow</label>
    </div>
    <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
      <label for="question-1-answers-D">D) None of the above</label>
    </div>
  </li>
  
  
  
  <li>
    <h3>What is the output of the following program ?<pre>main( )
{
    int x = 65 ,y ;
    y = ( (x == 65) ? printf ( "\n x is equal to 65 " ) : printf ( "\n x is not equal to 65 " ) ) ;
    printf( "%d", y ) ;
}
</pre></h3>
    <div>
      <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
      <label for="question-1-answers-A">A) x is equal to 65 0 </label>
    </div>
    <div>
      <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
      <label for="question-1-answers-B">B) x is equal to 65 1</label>
    </div>
    <div>
      <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
      <label for="question-1-answers-C">C) x is equal to 65 19</label>
    </div>
    <div>
      <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
      <label for="question-1-answers-D">D) x is equal to 65 23</label>
    </div>
  </li>
  
  
  <li>
    <h3>In what sequence the initialization, testing and execution of
body is done in a do-while loop</h3>
    <div>
      <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
      <label for="question-1-answers-A">A) Initialization, execution of body, testing </label>
    </div>
    <div>
      <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
      <label for="question-1-answers-B">B) Execution of body, initialization, testing</label>
    </div>
    <div>
      <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
      <label for="question-1-answers-C">C) Initialization, testing, execution of body</label>
    </div>
    <div>
      <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
      <label for="question-1-answers-D">D) None of the above</label>
    </div>
  </li>
  
  
  
  <li>
    <h3>Which of the following is not an infinite loop?</h3>
    <div>
      <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
      <label for="question-1-answers-A">A)</label> <pre>int i = 1 ;
while ( 1 )
{
	i++ ;
}</pre>
    </div>
    <div>
      <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
      <label for="question-1-answers-B">B)</label> <pre>for ( ; ; ) ;</pre>
    </div>
    <div>
      <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
      <label for="question-1-answers-C">C)</label> <pre>int True = 0, false ;
while ( True )
{
	False = 1 ;
}</pre>
    </div>
    <div>
      <input type="radio" name="question-16answers" id="question-6-answers-D" value="D" />
      <label for="question-1-answers-D">D)</label> <pre>int y, x = 0 ;
do
{
	y = x ;
} while ( x == 0 ) ;</pre>
    </div>
  </li>
  
  
  
  <li>
    <h3>What is the output of the following program ?<pre>main( )
{
    int i = 1, j = 1 ;
    for ( ; ; )
    {
    if ( i > 5 )
    break ;
    else
    j += i ;
    printf ( "%d ", j ) ;
    i += j ;
}
}</pre></h3>
    <div>
      <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
      <label for="question-1-answers-A">A) 1 5 </label>
    </div>
    <div>
      <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
      <label for="question-1-answers-B">B) 2 5</label>
    </div>
    <div>
      <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
      <label for="question-1-answers-C">C) 3 5</label>
    </div>
    <div>
      <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
      <label for="question-1-answers-D">D) None of the above</label>
    </div>
  </li>
  
  
  
  <li>
    <h3>A character variable can at a time store</h3>
    <div>
      <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
      <label for="question-1-answers-A">A) 1 character </label>
    </div>
    <div>
      <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
      <label for="question-1-answers-B">B) 2 characters</label>
    </div>
    <div>
      <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
      <label for="question-1-answers-C">C) 8 characters</label>
    </div>
    <div>
      <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
      <label for="question-1-answers-D">D) 256 characters</label>
    </div>
  </li>
  
  
  
  <li>
    <h3>What is the output of the following code ?<pre>main( )
{
    int x = 10, y = 20 ;
    x == 20 && y != 10 ? printf( "True" ) : printf( "False" ) ;
}</pre></h3>
    <div>
      <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
      <label for="question-1-answers-A">A) True </label>
    </div>
    <div>
      <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
      <label for="question-1-answers-B">B) False</label>
    </div>
    <div>
      <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
      <label for="question-1-answers-C">C) Compiler error</label>
    </div>
    <div>
      <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
      <label for="question-1-answers-D">D) None of the above</label>
    </div>
  </li>
  
  
  <li>
    <h3>What is the output of hte following program ?
    <pre>main( )
{
    int i = 2, j = 3, k, l ;
    float a, b ;
    k = i / j * j ;
    l = j / i * i ;
    a = i / j * j ;
    b = j / i * i ;
    printf( "%d %d %f %f", k, l, a, b ) ;
}</pre></h3>
    <div>
      <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
      <label for="question-1-answers-A">A) 0,2,0.000000,2.000000 </label>
    </div>
    <div>
      <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
      <label for="question-1-answers-B">B) 0,2,0,2</label>
    </div>
    <div>
      <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
      <label for="question-1-answers-C">C) 2,3,2.000000,3.000000</label>
    </div>
    <div>
      <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
      <label for="question-1-answers-D">D) None of the above</label>
    </div>
  </li>
</ol>
<center><input class="btn butn-orange" type="submit" value="Submit Quiz" name="submit"/></center>
</form>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>
