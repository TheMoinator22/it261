<?php

function sayHello() {
    echo 'Hello PHP FUNCTION!';
}
sayHello();


echo '<h2> Arithmetic Problems - cube </h2>';
function cube($num) {
    $cubing = $num * $num * $num;
    echo $cubing;
}
cube(5);


echo '<h2> Area - width * height </h2>';
function area($w, $h) {
    $get_area = $w * $h;
    return $get_area;
}
$get_area = area(5, 12);
echo $get_area;


echo '<h2> Celcius Converter </h2>';
function celcius_converter($cel) {
    $fahr = ($cel * 9/5) + 32;
    echo $fahr;
}
celcius_converter(100);


echo '<h2> How do we deal with arrays? We are going to be using indexed arrays.</h2>';
function area_volume($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}
$my_array = area_volume(10, 5, 20);
echo '<b>This is my area:</b> '.$my_array[0].' <br>';
echo '<b>This is my volume:</b> '.$my_array[1].' <br>';


echo '<h2>Now we will use the list function</h2>';
function area_volume2($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}
list($area, $volume) = area_volume2(5, 10, 30);
echo '<b>This is my area:</b> '.$area.' <br>';
echo '<b>This is my volume:</b> '.$volume.' <br>';


echo '<h2>Our Navigation created with a function</h2>';
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
function make_links($nav) {
    $myreturn = '';
    foreach($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $myreturn.= '<li><a class="current" href="'.$key.'"> '.$value.' </a></li>';
        } else {
            $myreturn.= '<li><a href="'.$key.'"> '.$value.' </a></li>';
        }// end thispage

    } // end foreach
    return $myreturn;

} // end function
echo make_links($nav);


echo '<h2>The implode function</h2>';
$cars = array('toyota', 'ford', 'suburu', 'audi', 'bmw', 'mercedes', 'lexus');
$my_cars = implode(', ', $cars);
echo $my_cars;


echo '<h2>The logic behind the wines on our form</h2>
    <p>If post wines is not empty, take post wines and implode it, and create a new variable called my_wines</p>';