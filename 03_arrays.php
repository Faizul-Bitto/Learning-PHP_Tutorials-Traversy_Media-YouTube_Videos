<?php
$numbers = [1, 44, 25, 52];
$fruits = array('apple', 'orange');

var_dump($numbers);
echo "<br>";

print_r($numbers);
echo "<br>";

echo $fruits[0];
echo "<br>";
echo $fruits[1];
echo "<br>";

$colors = [
    1 => 'Red',
    5 => 'Yellow'

];

echo $colors[5];
echo "<br>";

$hexa = [
    'Red' => '#f00',
    'Blue' => '#0f0'
];

echo $hexa['Blue'];
echo "<br>";

//Associative array :
$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

echo $person['email'];
echo "<br>";
echo $person['last_name'];
echo "<br>";


// Multidimensional Associative array :
$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'Jenny',
        'last_name' => 'Jane',
        'email' => 'jennyjane@gmail.com'
    ]
];

//How to access Jenny's first_name?
//          1 index  then variable name
echo $people[1]['first_name'];
echo "<br>";
echo $people[0]['email'];
echo "<br>";

//like dictionary in python with datatype declaration:
var_dump(json_encode($people));
