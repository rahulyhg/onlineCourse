<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Template</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
li {
	font-size: 16px
}
</style>
    </head>

    <body>
<div class="container">
      <h1 class="text-center">C-Programming</h1><a class="btn" href="c-1-3.php" style="float:right">Next<span class="glyphicon glyphicon-chevron-right"></span></a> 
      <h2>Decision control : </h2>
      <ul>
      <li>C has three major decision making instructions—the if
statement, the if-else statement, and the switch statement. A
fourth, somewhat less important structure is the one that uses
conditional operators.</li>
<li>C uses the keyword if to implement the
decision control instruction. The general form of if statement looks
like this:<br><br>
<pre>if ( this condition is true )
execute this statement ;</pre><br>If the condition,
whatever it is, is true, then the statement is executed. If the
condition is not true then the statement is not executed; instead the
program skips past it.<br><br></li>
<li style="list-style:none"><pre>/* Demonstration of if statement */
main( )
{
int num ;
printf ( "Enter a number less than 10 " ) ;
scanf ( "%d", &num ) ;
if ( num <= 10 )
printf ( "What an obedient servant you are !" ) ;
}</pre></li></ul>
<br><h3 class="text-center">Flowchart for the above program :<br><br> </h3>
<center><img class="img-responsive" src="img/C-3.PNG"></center>
<pre>//Demonstration of if-else
if(this condition is true)
	do this;
else
	do this;</pre>
    <p>Points worth noticing : </p>
    <ul>
    <li>The group of statements after the if upto and not including the
else is called an ‘if block’. Similarly, the statements after the
else form the ‘else block’.</li>
    <li>Notice that the else is written exactly below the if. The
statements in the if block and those in the else block have
been indented to the right.</li>
    <li>Had there been only one statement to be executed in the if
block and only one statement in the else block we could have
dropped the pair of braces.</li>
    <li>As with the if statement, the default scope of else is also the
statement immediately after the else. To override this default
scope a pair of braces as shown in the above example must be
used.</li>
<h3>Nested if-elses : </h3>
<pre>if ( condition )
{
    if ( condition )
        do this ;
    else
    {
        do this ;
        and this ;
    }
}
else
	do this ;</pre>
    
   <h3>switch Statement : </h3>
<ul><li>A switch statement allows a variable to be tested for equality against a list of
values. Each value is called a case, and the variable being switched on is
checked for each switch case.</li>
<li><b>Syntax : </b></li>
The syntax for a switch statement in C programming language is as follows:
<pre>switch(expression){
	case constant-expression :
		statement(s);
		break; /* optional */
	case constant-expression :
		statement(s);
		break; /* optional */
	/* you can have any number of case statements */
	default : /* Optional */
	statement(s);
}
</pre>
<h4>The following rules apply to a switch statement:</h4>
<ul><li>The expression used in a switch statement must have an integral or
enumerated type, or be of a class type in which the class has a single
conversion function to an integral or enumerated type.</li>
<li>You can have any number of case statements within a switch. Each case is
followed by the value to be compared to and a colon.</li>
<li>he constant-expression for a case must be the same data type as the
variable in the switch, and it must be a constant or a literal.</li>
<li>When the variable being switched on is equal to a case, the statements
following that case will execute until a break statement is reached.</li>
<li>When a break statement is reached, the switch terminates, and the flow
of control jumps to the next line following the switch statement.</li>
<li>Not every case needs to contain a break. If no break appears, the flow of
control will fall through to subsequent cases until a break is reached.</li>
<li> switch statement can have an optional default case, which must
appear at the end of the switch. The default case can be used for
performing a task when none of the cases is true. No break is needed in
the default case.</li></p>
    </ul>
<center><img src="img/C-4.PNG" class="img-responsive"></center>
    </div>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/effects.js"></script>
</body>
</html>