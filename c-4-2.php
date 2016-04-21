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
     <h2>C Preprocessing: </h2>
     <p>The C Preprocessor is not a part of the compiler, but is a separate step in the
compilation process. In simple terms, a C Preprocessor is just a text substitution
tool and it instructs the compiler to do required preprocessing before the actual
compilation. We'll refer to the C Preprocessor as CPP.<br><br>All preprocessor commands begin with a hash symbol (#). It must be the first
nonblank character, and for readability, a preprocessor directive should begin in
the first column. The following section lists down all the important preprocessor
directives:</p>
<img src="img/C-11.PNG" class="img-responsive">
<h3>Predefined MACROS : </h3>
<img class="img-responsive" src="img/C-12.PNG">

<h3>Preprocessor Operators : </h3>
The C preprocessor offers the following operators to help create macros:
<h4>The Macro Continuation (\) Operator</h4>
A macro is normally confined to a single line. The macro continuation operator
(\) is used to continue a macro that is too long for a single line. For example:
<pre>#define message_for(a, b) \
printf(#a " and " #b ": We love you!\n")</pre>
<h4>The Stringize (#) Operator</h4>
<p>The stringize or number-sign operator (#), when used within a macro definition,
converts a macro parameter into a string constant. This operator may be used
only in a macro having a specified argument or parameter list. For example:</p>
<pre>#include &lt;stdio.h&gt;
#define message_for(a, b) \
printf(#a " and " #b ": We love you!\n")
int main(void)
{
message_for(Carole, Debra);
return 0;
}</pre>
When the above code is compiled and executed, it produces the following result:
<pre>Carole and Debra: We love you!</pre>
<h4>The Token Pasting (##) Operator</h4>
The token-pasting operator (##) within a macro definition combines two
arguments. It permits two separate tokens in the macro definition to be joined
into a single token. For example:
<pre>#include &lt;stdio.h&gt;
C Programming
151
#define tokenpaster(n) printf ("token" #n " = %d", token##n)
int main(void)
{
int token34 = 40;
tokenpaster(34);
return 0;
}</pre>
When the above code is compiled and executed, it produces the following result:
<pre>token34 = 40</pre>
It happened so because this example results in the following actual output from
the preprocessor:
<pre>printf ("token34 = %d", token34);</pre>
This example shows the concatenation of token##n into token34 and here we
have used both stringize and token-pasting.