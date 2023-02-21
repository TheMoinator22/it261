<?php

// our str_replace and substr functions
// substr(string, start, length)

$statement = 'Currently, I\'m not reading any books';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 10); // 10th spot is a space, so it grabs I instead

echo '<h2> Now I wanna echo just "I\'m not reading" </h2>';
echo '<br>';
echo substr($statement, 11, 15); // length count starts at 1, not 0

echo '<h2> Now, what if we want to display any? </h2>';
echo substr($statement, -9, 3);
echo '<br>';
echo substr($statement, -5);

echo '<h2> Now for the str_replace function </h2>';
$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book the Looming Tower!';
echo $statement2;
echo '<br>';
echo str_replace('the', 'The', $statement2);