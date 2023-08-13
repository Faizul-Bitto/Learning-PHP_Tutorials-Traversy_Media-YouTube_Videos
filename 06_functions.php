<?php

$y = 12; //This cannot be used in a function. Its a global scope.
function register_user()
{
    //$x = 10;
    //echo $y; //It will throw an error.
    global $y; //Rather we can use this.
    echo "{$y} User registered.";
};

//echo $x; // $x is defined in the function 
//But echo $x is a global scope. So, it won't be executed. 
//Rather it will throw an error.
register_user();
echo "<br>";



function register_user2($email) //With parameters
{
    echo $email . ' registered.';
};

register_user2(12);
echo "<br>";
register_user2('Brad');
echo "<br>";



function sum($n1, $n2)
{
    return $n1 + $n2;
}

echo sum(5, 5);
echo "<br>";
$number = sum(10, 10);
echo $number;
echo "<br>";


function sum2($n1 = 5, $n2 = 10) //Setting parameters by-default.
{
    return $n1 + $n2;
}

echo sum2();
echo "<br>";
$number2 = sum2();
echo $number2;
echo "<br>";




//Anonymous Function -> Not a named function:
//Another method to set the variable first :

/*Variable_name(function_name) =   function  (parameters){

}*/
$subtract                      =   function ($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(20, 12);
echo "<br>";



//We can also write function in one line:
//$variable_name(function_name) = fn(parameters) => code to be executed;
$multiply                       = fn ($n1, $n2)  => $n1 * $n2;
// This is also called arrow function.
echo $multiply(10, 10);
