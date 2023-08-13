<?php
$fruits = ['apple', 'orange'];

// Get length 
echo count($fruits);
echo "<br>";

var_dump(in_array('apple', $fruits));
echo "<br>";


//To insert new data in array:
//Method of below will take only one value.
$fruits[] = 'mango';
//To insert multiple, we will use this:
//array_push(variable_name, 'values to be inserted');
array_push($fruits, 'blueberry', 'strawberry');

//array_unshift(variable_name, 'value to be inserted');
array_unshift($fruits, 'grape', 'berry');
array_unshift($fruits, 'coconut');
//Will insert the values at first


print_r($fruits);
echo "<br>";

//To delete a value from array:
//array_pop(variable_name);
array_pop($fruits);
//Pop will delete the last value.
print_r($fruits);
echo "<br>";

//To delete from beginning:
array_shift($fruits);
print_r($fruits);
echo "<br>";

//To delete with index value:
unset($fruits[2]);
print_r($fruits);
echo "<br>";


// If we want to split an array in multiple chunks:
$array_chunks = array_chunk($fruits, 3);
print_r($array_chunks);
echo "<br>";
echo "<br>";

//If we want to merge arrays:
$arr1 = [1, 2, 3];
print_r($arr1);
echo "<br>";
echo "<br>";
$arr2 = [4, 5, 6];
print_r($arr2);
echo "<br>";
echo "<br>";

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
echo "<br>";
echo "<br>";

//Another method is:
$arr4 = [...$arr1, ...$arr2];
//array_name = [...array_name, ...array_name];
//Syntax
print_r($arr4);
echo "<br>";
echo "<br>";



//Array combining:
//Basically like associative arrays:
$a = [1, 2, 3];
$b = ['apple', 'orange', 'banana'];

$c = array_combine($a, $b);
print_r($c);
echo "<br>";
echo "<br>";

$a1 = ['green', 'orange', 'yellow'];
$b1 = ['apple', 'orange', 'banana'];

$c1 = array_combine($a1, $b1);
print_r($c1);
echo "<br>";
echo "<br>";

//If we want to get the array keys:
//Syntax:
//variable_name = array_keys(array_name)

$keys = array_keys($c1);
print_r($keys);
echo "<br>";
echo "<br>";
//Basically it will show the keys with indexes.


//array_flip() - function will flip the array.
//Which will make the keys -> values and values -> keys
$flipped1 = array_flip($a1);
print_r($flipped1);
echo "<br>";

$flipped2 = array_flip($b1);
print_r($flipped2);
echo "<br>";


$flipped3 = array_flip($c1);
print_r($flipped3);
echo "<br>";
echo "<br>";


//range(value, value)
//it basically taking below 0-9, numbers as string:
$numbers = range(1, 20);
print_r($numbers);
//As it works with arrays echo won't work. print_r() will be used.
echo "<br>";
echo "<br>";




//Array mapping:
/*Need a function called array_map()
Syntax:
variable_name = array_map(function($number)){
    return condition;
}, $variable_name); */
//                                $number is by-default set as parameter.

$newNumbers = array_map(function ($number) {
    return  "Number {$number}";
}, $numbers);
// $numbers - like argument which will be passed.
print_r($newNumbers);

echo "<br>";
echo "<br>";

//Another same method :
//Syntax:
/* variable_name = array_filter(variable_name, fn($number) => 
condition); */
$lessThan10 = array_filter($numbers, fn ($number) => $number <= 10);
//                         $numbers - like argument which will be passed.
print_r($lessThan10);
echo "<br>";
echo "<br>";



// Array Reduce
// "carry" holds the return value of the previous iteration, which is initially = 0 :
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum); // Will return the integer value.
echo "<br>";
echo $sum;
echo "<br>";
print_r($sum);
