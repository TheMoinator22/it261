<?php
// a wine list, would it not be an array (it is)


echo '<h2> This will be my wine list </h2>';
$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);
// since we cant echo an array, we use a for each loop

echo '<ul>';
foreach($wines as $key) {
    echo '<li>'.$key.'</li>';
}
echo '</ul>';


echo '<h2> Movies and Shows List which will have a key and a value </h2>';
$shows = [
    // 'Key' => 'Value',
    'Hulu' => 'Abott Elementary',
    'Netflix' => 'The Makanai',
    'Netflix' => 'Extracurricular',
    'Netflix' => 'Our Beloved Summer',
    'Canadian Netflix' => 'The Great Canadian Baking Show'
];

echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li><b> '.$key.'</b>; '.$value.' </li>';
}
echo '</ul>';


echo '<h2> Time for our navigation that will again have both a key and a value </h2>';
$nav = array(
    '../../index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li> <a href="'.$key.'"> '.$value.' </a> </li>';
}
echo '</ul>';