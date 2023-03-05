<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE) {
    case 'index.php' : 
    $title = 'Home Page of our Website Project';
    $body = 'home';
    break;


    case 'about.php' : 
    $title = 'About Page of our Website Project';
    $body = 'about-inner';
    break;


    case 'daily.php' : 
    $title = 'Daily Page of our Website Project';
    $body = 'daily-inner';
    break;


    case 'sanrio.php' : 
    $title = 'Sanrio Database Page of our Website Project';
    $body = 'sanrio-inner';
    break;


    case 'sanrio-view.php' : 
    $title = 'Sanrio Database View Page of our Website Project';
    $body = 'sanrio-inner';
    break;


    case 'contact.php' : 
    $title = 'Contact Page of our Website Project';
    $body = 'contact-inner';
    break;


    case 'gallery.php' : 
    $title = 'Gallery Page of our Website Project';
    $body = 'gallery-inner';
    break;
}

// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'sanrio.php' => 'Database',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

?>


<!DOCTYPE html>
<html class="<?php 
if(THIS_PAGE !== 'daily.php') {
    echo 'none';
} else {
    echo $color;
}
?>" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title;?></title>
    <link href="css/homestyles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body;?>">


    <header>
        <div class="logo">


            <a href="index.php">
                <img id="logo" src="images/phplogo.png" alt="logo">
            </a>


            <!-- <nav>
                <ul>

                    <li>
                        <a href="">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Daily
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Project
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Contact
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Gallery
                        </a>
                    </li>

                </ul>
            </nav> -->


            <nav>
                <ul>
                    <?php
                    foreach($nav as $key => $value) {
                        if (THIS_PAGE == $key) {
                            echo '<li> <a style="color:red;" href="'.$key.'"> '.$value.' </a> </li>';
                        } else {
                            echo '<li> <a style="color:green;" href="'.$key.'"> '.$value.' </a> </li>';
                        }
                    }; // end foreach
                    ?>
                </ul>
            </nav>

        </div>
        <!-- end logo -->

    </header>