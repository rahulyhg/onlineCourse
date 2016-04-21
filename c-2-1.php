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
      <h1 class="text-center">C-Programming</h1><a class="btn" href="c-2-2.php" style="float:right">Next<span class="glyphicon glyphicon-chevron-right"></span></a> 
      <h2>case control : </h2>
      <p>Decisions Using switch : <br>The control statement that allows us to make a decision from the
number of choices is called a switch, or more correctly a switch-
case-default, since these three keywords go together to make up
the control statement. They most often appear as follows:</p>
<pre>switch ( integer expression )
{
    case constant 1 : 
    	do this ;
        break;
    case constant 2 :
    	do this ;
        break;
    case constant 3 :
    	do this ;
        break;
    default :
    	do this ;
        break;
}</pre>
<p>Tips and traps : </p>
<ul>
<li>You can in fact put the cases in any
order you please.</li>
<li>You are also allowed to use char values in case and switch.</li>
<li>Even if there are multiple statements to be executed in each
case there is no need to enclose them within a pair of braces
(unlike if, and else)</li>
<li>Every statement in a switch must belong to some case or the
other. If a statement doesn’t belong to any case the compiler
won’t report an error. However, the statement would never get
executed.</li>
<li>If we have no default case, then the program simply falls
through the entire switch and continues with the next
instruction (if any,) that follows the closing brace of switch.</li>
<li>Is switch a replacement for if? Yes and no. Yes, because it
offers a better way of writing programs as compared to if, and
no because in certain situations we are left with no choice but
to use if. The disadvantage of switch is that one cannot have a
case in a switch which looks like:
case i <= 20 :</li>
<li>The break statement when used in a switch takes the control
outside the switch. However, use of continue will not take
the control to the beginning of switch as one is likely to
believe.</li>
<li>In principle, a switch may occur within another, but in
practice it is rarely done. Such statements would be called
nested switch statements.</li>
</ul>