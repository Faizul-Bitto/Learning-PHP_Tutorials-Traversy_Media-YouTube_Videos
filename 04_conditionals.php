<?php

$age = 15;

if ($age >= 18) {
    echo 'You are old enough to vote.';
} else {
    echo 'You are not old enough to vote.';
};
echo "<br>";


$time = date("H");

if ($time < 12) {
    echo 'Good Morning.';
} elseif ($time < 17) {
    echo 'Good Afternoon.';
} else {
    echo 'Good Evening.';
};
echo "<br>";

$posts = ['First Post'];
if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No Posts';
}
echo "<br>";

$posts = [];
if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No Posts';
}
echo "<br>";

//It also can be written like this :
echo !empty($posts) ? $posts[0] : 'No posts';
echo "<br>";
//Can be also declared in variables : 
$if_else = !empty($posts) ? $posts[0] : 'No posts';
echo $if_else;
echo "<br>";
$if_else = !empty($posts) ? $posts[0] : NULL;
echo $if_else;


//switch-case:
$fav_color = 'Yellow';

switch ($fav_color) {
    case 'Red':
        echo 'Your favorite color is Yellow.';
        break;
    case 'Blue':
        echo 'Your favorite color is Blue.';
        break;
    case 'Yellow':
        echo 'Your favorite color is Yellow.';
        break;
    default:
        echo 'Your favorite color is not Yellow, Red or Blue.';
};
echo "<br>";



$fav_color = 'Grey';

switch ($fav_color) {
    case 'Red':
        echo 'Your favorite color is Yellow.';
        break;
    case 'Blue':
        echo 'Your favorite color is Blue.';
        break;
    case 'Yellow':
        echo 'Your favorite color is Yellow.';
        break;
    default:
        echo 'Your favorite color is not Yellow, Red or Blue.';
};
