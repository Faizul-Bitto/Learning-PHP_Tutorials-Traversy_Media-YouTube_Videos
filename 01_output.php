<?php
echo 'Hello123', 10, 11.5;
// Multiple values can be written
// String, int, float etc.

//We can also use print, but can only handle one value. 
//Not like echo.
print 1;

// But the problem is echo cannot directly print arrays.
// It throws error for array to string conversion
// But print_r() Function can handle this.
print_r([1, 2, 3]);

//var_dump() show value + datatype
var_dump("Hello1");

//var_export() prints the thing inside the parentheses.
// Prints all including the sign quote signs.
var_export("Hello123");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo 'Post One_1'; ?> </h1>
    <h1><?php echo 'Post One_2' // Works without semicolon also here.
        ?> </h1>
</body>

</html>