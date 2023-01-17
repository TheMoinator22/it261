<?php


$name = "J";
$name .= "HW"; // add space before if want space between 2 things
echo $name;
echo "<br>";


$color = 'red';
echo $color;
echo "<br>";
echo 'J\'s favorite color is not '.$color.''; // backslash so test doesnt end with ' before s
echo "<br>";


$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo "<br>";
$x = 20;
$x += 5;
echo $x;
echo "<br>";
$x = 100;
$x *= 10;
echo $x;
echo "<br>";


echo '<h3> Our product, quantity, and tax exercise </h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo "<br>";
echo '<h3> We would like our amount to reflect 2 decimal places -- we are thinking about floats and a new function - number_format() </h3>';


$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
$total_friendly = number_format($total, 2);
echo 'We have a total of <b>$'.$total_friendly.'</b> dollars';
echo "<br>";
echo 'We have a total of <b>$'.number_format($total, 2).'</b> dollars';


echo '<h3> Our second preset function is our date function </h3>';
echo date('Y'); // year
echo "<br>";
echo date('l'); // day
// echo date('F'); // month
// echo date('h:i:s'); // hours:minutes:seconds
echo "<br>";
echo date("l jS \of F Y h:i:s A"); // Prints the day, date, month, year, time, AM or PM
echo "<br>";
echo date("l jS \of F Y h:i A");
echo "<br>";
date_default_timezone_set('America/Los_Angeles');
echo date("l jS \of F Y h:i A");
echo "<br>";


echo '<h3> Time for an array </h3>';
echo '<h4> Below is an indexed array </h4>';
// can we echo an array? no
$fruit[] = 'bananas'; // 0
$fruit[] = 'cherries'; // 1
$fruit[] = 'melon'; // 2
$fruit[] = 'kiwi'; // 3
$fruit[] = 'oranges'; // 4
$fruit[] = 'apples'; // 5
echo $fruit[2]; //displays melon bc numbers in php start with 0
// can not echo all at same time
echo $fruit;
echo "<br>";
$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);
$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
];
print_r($fruit);
echo "<br>";
var_dump($fruit);


echo '<h4> Now we have an associative array </h4>';
$nav = array(
    'index.php' => 'Home', // index is the key and home is the value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';