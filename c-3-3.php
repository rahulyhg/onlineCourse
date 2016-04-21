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
      <h2>Structures and unions : </h2>
      <p>Arrays allow to define type of variables that can hold several data items of the
same kind. Similarly, structure is another user-defined data type available in C
that allows to combine data items of different kinds.</p>
<h3>Defining a structure : </h3>
<p>To define a structure, you must use the struct statement. The struct statement
defines a new data type, with more than one member. The format of the struct
statement is as follows:</p>
<pre>struct [structure tag]
{
member definition;
member definition;
...
member definition;
} [one or more structure variables];</pre>

<h3>Accessing structure members :</h3>
<p>To access any member of a structure, we use the member access operator
(.). The member access operator is coded as a period between the structure
variable name and the structure member that we wish to access. You would
use the keyword struct to define variables of structure type.</p>
<h3>Bit fields : </h3><p>Bit Fields allow the packing of data in a structure. This is especially useful when
memory or data storage is at a premium. Typical examples include:</p>
<ul><li>Packing several objects into a machine word, e.g. 1 bit flags can be
compacted.</li><li>Reading external file formats -- non-standard file formats could be read
in, e.g., 9-bit integers.</li></ul>

<h2>Unions :</h2>
<p>A union is a special data type available in C that allows to store different data
types in the same memory location. You can define a union with many
members, but only one member can contain a value at any given time. Unions
provide an efficient way of using the same memory location for multiple
purpose.</p>
<h3>Defining a union : </h3>
<p>To define a union, you must use the union statement in the same way as you
did while defining a structure. The union statement defines a new data type with
more than one member for your program. The format of the union statement is
as follows:</p>
<pre>union [union tag]
{
member definition;
member definition;
...
member definition;
} [one or more union variables];</pre>