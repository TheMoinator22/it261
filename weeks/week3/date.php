<?php

echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i A');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date('l, F j, Y h:i A');
echo '<br>';


$name = 'JHW';
$our_time = 9;
//date('H:i A'); // big H is 24 hour clock
echo $our_time;
echo '<br>';


// time <= 11 - its morning
// time <= 17 - its afternoon
// an else statement that means its evening
if ($our_time <= 11) {
    echo '<h2 style="color:yellow;"> Good Morning '.$name.'!</h2>
    <img class="right" src="../../website/images/sun.jpg" alt="Sun" />
    <p> It\'s time to get up! Doesn\'t the sun look beautiful today!</p>
    ';
} elseif ($our_time <= 17) {
    echo '<h2 style="color:green;"> Good Afternoon '.$name.'!</h2>';
} else {
    echo '<h2 style="color:blue;"> Good Evening '.$name.'!</h2>';
}