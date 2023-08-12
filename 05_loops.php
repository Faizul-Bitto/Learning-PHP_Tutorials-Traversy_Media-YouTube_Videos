<?php

//for loop syntax ->
/*for(initialize; condition; increment){

}*/

for ($x = 0; $x < 10; $x++) {
    echo "The number is :  {$x} " . "<br>";
};

echo "<br>";
echo "<br>";

/* while loop syntax ->
while(condition){
    code to be executed;
    $x = $x+1;
};
*/

$x = 1;

while ($x <= 15) {
    echo "The number is :  {$x} " . "<br>";
    $x = $x + 1;
};

echo "<br>";
echo "<br>";

$x = 1;
do {
    echo "The number is :  {$x} " . "<br>";
    $x = $x + 1;
} while ($x <= 6);

echo "<br>";
echo "<br>";


/* Now the problem of do while loop is - it will always do,
what is written in the do statement even it doesn't 
match with while condition. */

$x = 7; // It will print 7, even though it doesn't match with condition.
do {
    echo "The number is :  {$x} " . "<br>";
    $x = $x + 1;
} while ($x <= 6);

echo "<br>";
echo "<br>";


$posts = ['First Post', 'Second Post', 'Third Post', 'Fourth Post'];
echo count($posts);

echo "<br>";
echo "<br>";

// Foreach loop - specially for array :
// Basically like for loop for arrays with indexes.    
$posts = ['First Post', 'Second Post', 'Third Post', 'Fourth Post'];

foreach ($posts as $index => $post1) {
    echo $index + 1 . ' - ' . $post1 . "<br>";
}

echo "<br>";
echo "<br>";

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

foreach ($person as $key => $value) {
    echo $key . " - " . $value . "<br>";
};
