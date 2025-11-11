// php(hypertext preprocessor) is server side scripting language and it is  used for server side development and returns html documents to the client browser.
// it run on server side not on browser.
// its just like node js but for php we need a server like xampp or wapp to run the code.
// Html codes run on browser side .(Through live server) but php code needs xampp to run on server side .
<!-- PHP needs XAMPP or Apache to run.
Node.js is its own server — it runs directly with node file.js. -->
//Note: PHP statements end with a semicolon (;).



<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php 
echo "Hello world!" ; // echo is used to print .
?>

</body>
</html>

// Decelaration of variables in php.
<!-- In PHP, a variable starts with the $ sign, followed by the name of the variable: -->


$x = 5;
$y = 4;
echo $x + $y;
To get the data type of a variable, use the var_dump() function.

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

//
PHP has three different variable scopes:

local => the variable declare inside a function scope has local scope .
global => the variable declare outside a function scope has global scope  .
static => the varibale declares inside a function with static keyword retains its value to the next function call .
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
To do this, use the static keyword when you first declare the variable:

 <!--FUNCTION IN PHP  -->

 function print(){
    $x = 5 ;
    echo $x ;
    echo "<br>" ;
    echo "function called"
 }

 print() ;

function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");



//String in php
//1. to find the length => strlen()

$str = "hello" ;
echo "the legth is :" ,strlen($str)

//2. to count word 
str_word_count()

//3. to search word in string 
strpos()

//4. strtoupper() to convert string into uppercase .
//5. strtolower()

// to get part of string ie substring
substr(variable , index of start slice , position upto slice)