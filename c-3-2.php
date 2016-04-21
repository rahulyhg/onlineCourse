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
      <h1 class="text-center">C-Programming</h1><a class="btn" href="c-3-3.php" style="float:right">Next<span class="glyphicon glyphicon-chevron-right"></span></a> 
      <h2>Strings: </h2>
      <p>Strings are actually one-dimensional array of characters terminated by
a null character '\0'. Thus a null-terminated string contains the characters that
comprise the string followed by a null.</p>
<ul><li>The following declaration and initialization create a string consisting of the word
"Hello". To hold the null character at the end of the array, the size of the
character array containing the string is one more than the number of characters
in the word "Hello."<br><pre>char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};</pre><p>It can be written as :<pre>char greeting[] = "Hello";</pre></p></li></ul> 
<img class="img-responsive" src="img/C-9.PNG">