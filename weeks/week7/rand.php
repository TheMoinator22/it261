<?php

// we are going to play with dice
$dice = rand(1, 6);
echo '<p> '.$dice.' </p>';

// 2 dice/ die
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
echo '<p> '.$dice1.' and '.$dice2.' </p>';

echo '<h2> Let\'s add some if else statements </h2>';
// if we throw double 6, we win big
// if we throw a diff double, we still win
// no double, no win
$dice1a = rand(1, 6);
$dice2a = rand(1, 6);
if($dice1a == 6 && $dice2a == 6) {
    echo '<b>Dice 1:</b> '.$dice1a.', <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>You won big!</h2>';
} elseif($dice1a != 6 && $dice2a != 6 && $dice1a == $dice2a) {
    echo '<b>Dice 1:</b> '.$dice1a.', <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>You won small!</h2>';
} else {
    echo '<b>Dice 1:</b> '.$dice1a.', <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2> Sorry, you did not win anything. </h2>';
}

echo '<h2> We are going to display some images using the random function </h2>';
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';
$i = rand(0, 4);
$selected_photo = ''.$photos[$i].'.jpg ';
echo '<img src="images/'.$selected_photo.'" alt="'.$photos[$i].'" >';

echo '<h2> Let\'s create a function </h2>';
function random_images($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $selected_photo = ''.$photos[$i].'.jpg ';
    $my_return = '<img src="images/'.$selected_photo.'" alt="'.$photos[$i].'" >';
    return $my_return;
}
echo random_images($photos);