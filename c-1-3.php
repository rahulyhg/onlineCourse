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
      <h1 class="text-center">C-Programming</h1><a class="btn" href="c-content.php" style="float:right">Next<span class="glyphicon glyphicon-chevron-right"></span></a> 
      <h2>LOop control : </h2>
      <ul><li>You may encounter situations when a block of code needs to be executed
several number of times. In general, statements are executed sequentially: The
first statement in a function is executed first, followed by the second, and so on.</li>
<li>Programming languages provide various control structures that allow for more
complicated execution paths.
A loop statement allows us to execute a statement or group of statements
multiple times. Given below is the general form of a loop statement in most of
the programming languages:</li>
<center><img src="img/C-5.PNG" class="img-responsive"></center>
<table class="table table-bordered">
<tr><th class="text-center">Loop type</th><th class="text-center">Description</th></tr>
<tr><td>while loop</td><td>Repeats a statement or group of statements while a
given condition is true. It tests the condition before
executing the loop body.</td></tr>
<tr><td>for loop</td><td>Executes a sequence of statements multiple times and
abbreviates the code that manages the loop variable.</td></tr>
<tr><td>do..while...</td><td>It is more like a while statement, except that it tests
the condition at the end of the loop body.</td></tr></table> 
</ul>

<h2>While loop</h2>
<h3>Syntax : </h3>
<pre>while(condition)
{
statement(s);
}</pre>

<h2>For loop</h2>
<h3>Syntax : </h3>
<pre>for ( init; condition; increment )
{
statement(s);
}</pre>

<h2>do..while</h2>
<h3>Syntax :</h3>
<pre>do
{
statement(s);
}while( condition );</pre>
<h2>Loop control structures : </h2>
<p>Loop control statements change execution from its normal sequence. When
execution leaves a scope, all automatic objects that were created in that scope
are destroyed.</p>

<table class="table table-bordered">
<tr><th class="text-center">Control statement</th><th class="text-center">Description</th></tr>
<tr><td>break</td><td>Terminates the loop or switch statement and
transfers execution to the statement immediately
following the loop or switch.</td></tr>
<tr><td>continue</td><td>Causes the loop to skip the remainder of its body and
immediately retest its condition prior to reiterating.</td></tr>
<tr><td>goto</td><td>Transfers control to the labeled statement.</td></tr></table>