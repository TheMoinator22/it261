<?php


// my variables
// variable = container for data 
$name = "JHW"; // "JHW" is a string
$name = 'GW'; // last declared value for variable is displayed
echo $name;


echo '<br>';
echo "<br>"; // at moment, no diff between '' and ""


// underscores mean spaces
$body_temp = 98; // 98 is an integer, no quotes
$body_temp_new = 98.6; // 98.6 is afloat
echo $body_temp;
echo '<br>';
echo $body_temp_new;
echo '<br>';


echo "My name is $name!";
echo '<br>';
echo 'My name is $name!'; // now, having single quotes does not echo variable, instead echos "$name"
echo '<br>';
echo 'My name is '.$name.'!'; // have to put '. .' around variable for it to show


echo '<br>';
echo 'The normal body temperature for a human being is '.$body_temp_new.'';
echo '<br>';


$name = "PH";
echo $name; // gives most recent version of variable at time of echo
echo '<br>';


$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';
$z = $x * $y;
echo $z;
echo '<br>';
// echo $z = $y+2; // this is another valid format
$z = $x/$y; // spaces dont matter but with spaces looks better sometimes
echo $z;
echo '<br>';


$first_name = 'J';
$last_name = 'HW';
echo $first_name.' '.$last_name; // how to add strings, can add a space in quotes so strings have a space between them, can also do with ""
echo '<br>';
echo "My initials are $first_name $last_name"; // this format is also valid
echo '<br>';
echo 'My initials are $first_name $last_name';
echo '<br>';
echo 'My initials are '.$first_name.' '.$last_name.'';
echo '<br>';
// echo 'My initials are '.$first_name $last_name.''; this is invalid