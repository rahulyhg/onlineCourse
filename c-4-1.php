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
      <h1 class="text-center">C-Programming</h1><a class="btn" href="c-4-2.php" style="float:right">Next<span class="glyphicon glyphicon-chevron-right"></span></a> 
      <h2>Files: </h2>
      <p>A file represents a sequence of bytes, regardless of it being a text file or a binary
file. C programming language provides access on high-level functions as well as
low-level (OS level) calls to handle file on your storage devices. This chapter will
take you through the important calls for file management.</p>
<h3>Opening files :</h3>
<p>You can use the fopen( ) function to create a new file or to open an existing file.
This call will initialize an object of the type FILE, which contains all the
information necessary to control the stream. The prototype of this function call is
as follows:</p>
<pre>FILE *fopen( const char * filename, const char * mode );</pre>
<img class="img-responsive" src="img/C-10.PNG">
<h3>Closing a file : </h3>
<p>To close a file, use the fclose( ) function. The prototype of this function is:</p>
<pre>int fclose( FILE *fp );</pre>
<h3>Writing a file : </h3>
<p>Following is the simplest function to write individual characters to a stream:
<pre>int fputc( int c, FILE *fp );</pre>
The function fputc() writes the character value of the argument c to the output
stream referenced by fp. It returns the written character written on success
otherwise EOF if there is an error. You can use the following functions to write a
null-terminated string to a stream:
<pre>int fputs( const char *s, FILE *fp );</pre>
The function fputs() writes the string s to the output stream referenced by fp. It
returns a non-negative value on success, otherwise EOF is returned in case of
any error. You can use int fprintf(FILE *fp,const char *format, ...) function
as well to write a string into a file.</p>
<h3>Reading a file :</h3> 
<p>Given below is the simplest function to read a single character from a file:
<pre>int fgetc( FILE * fp );</pre>
The fgetc() function reads a character from the input file referenced by fp. The
return value is the character read, or in case of any error, it returns EOF. The
following function allows to read a string from a stream:
<pre>char *fgets( char *buf, int n, FILE *fp );</pre>
The functions fgets() reads up to n - 1 characters from the input stream
referenced by fp. It copies the read string into the buffer buf, appending
a null character to terminate the string.</p>