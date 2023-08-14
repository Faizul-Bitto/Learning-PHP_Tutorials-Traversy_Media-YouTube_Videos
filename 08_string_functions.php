<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello world';

// Get the length of a string
echo strlen($string);
//   strlen(variable_name);  -> Syntax
echo "<br>";







// Find the position of the first occurrence of a substring in a string
//Basically will show the index
// Here are two o's in this string. But it only will show,
// The first o's index position. That's why first occurrence.
echo strpos($string, 'o');
//   strpos(variable_name, 'the value');  -> Syntax
echo "<br>";

// Find the position of the last occurrence of a substring in a string
//Basically will show the index
// Here are two o's in this string. But it only will show,
// The last o's index position. That's why last occurrence.
echo strrpos($string, 'o');
//   strrpos(variable_name, 'the value');  -> Syntax
echo "<br>";







// Reverse a string
echo strrev($string);
//   strrev(variable_name);  -> Syntax
echo "<br>";







// Convert all characters to lowercase
echo strtolower($string);
//   strtolower(variable_name);  -> Syntax
echo "<br>";

// Convert all characters to uppercase
echo strtoupper($string);
//   strtoupper(variable_name);  -> Syntax
echo "<br>";






// Uppercase the first character of each word
// Will make the first characters in uppercase form.
echo ucwords($string);
//   ucwords(variable_name);  -> Syntax
echo "<br>";






// String replace
//Basically replace a value with another
echo str_replace('world', 'Everyone', $string);
//   str_replace('value which will be replaced'. 'value which will take that position', variable_name);  -> Syntax
echo "<br>";







// Return portion of a string specified by the offset and length
// We can set from -> one index to another index.
// Like below - 0, 5 -> It will print index 0 to 4 
// Basically ->    (  , another index - 1) -> will be printed
echo substr($string, 0, 5);
//   substr(variable_name, one_index, another_index)  -> Syntax
echo "<br>";






//It will also do the same thing. 
//But it will print the rest from the given index.
//Basically it will print from index 6 to rest.
echo substr($string, 5);
//   substr(variable_name, index)  -> Syntax
echo "<br>";







// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}
echo "<br>";

// Ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}
// Here:
// str_starts_with(variable_name, 'value')  -> Syntax
// str_ends_with(variable_name, 'value')    -> Syntax
// Both do the same thing, they are used for checking.
// They seek for match.
// One checks for start value, another checks for end value.
echo "<br>";





// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);
echo "<br>";





// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');
//      %s - string data - the more %s in the syntax the more parameters. Here 2.
echo "<br>";
printf('1 + 1 = %f', 1 + 1); // float