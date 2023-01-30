<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE) {
    case 'index.php' : 
    $title = 'Home Page of our Website Project';
    $body = 'home';
    break;


    case 'about.php' : 
    $title = 'About Page of our Website Project';
    $body = 'about inner';
    break;


    case 'daily.php' : 
    $title = 'Daily Page of our Website Project';
    $body = 'daily inner';
    break;


    case 'project.php' : 
    $title = 'Project Page of our Website Project';
    $body = 'project inner';
    break;


    case 'contact.php' : 
    $title = 'Contact Page of our Website Project';
    $body = 'contact inner';
    break;


    case 'gallery.php' : 
    $title = 'Gallery Page of our Website Project';
    $body = 'gallery inner';
    break;
}

// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);


// start of switch HW3
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $plush = '<h2> Friday is BLÅHAJ day! </h2>';
        $pic = 'blahaj.jpg';
        $alt = 'BLÅHAJ, a stuffed animal of a shark';
        $content = '<p><b>BLÅHAJ</b> is a stuffed shark sold by ikea. It has cemented itself as an icon of the trans community over the years and how can you not love this shark??? This shark has spurred a very funny rant lately from a transhobe claiming that trans people ruined this shark for him. I also have several other plushes from Ikea, including a dinosaur.</p>';
        break;

    case 'Saturday' :
        $plush = '<h2> Saturday is Roomies Party LTD Shark day! </h2>';
        $pic = 'roomies-shark.jpg';
        $alt = 'A plush shark with a party hat';
        $content = '<p>The <b>Roomies Party LTD shark</b> is one of a whole collection of animals wearing party hats. The shark is a new hire at Roomies LTD and is attending a work party. I do not have enough money to buy them all :(</p>';
        break;

    case 'Sunday' :
        $plush = '<h2> Sunday is Squishables Poodle Moth day! </h2>';
        $pic = 'squishable-poodle-moth.jpg';
        $alt = 'A Squishables poodle moth, which is mainly black and white';
        $content = '<p>The <b>Poodle Moth</b> by Squishables is one of their many moths they sell, and I need them all. (If anyone wants to get me the Love Bug moth for Valentines Day...) I need to have a friend who works there and will gift me dozens of squishables.</p>';
        break;

    case 'Monday' :
        $plush = '<h2> Monday is Boo Leopard Outfit day! </h2>';
        $pic = 'boo-dog-leopard.jpg';
        $alt = 'A golden colored dog named Boo wearing a leopard outfit';
        $content = '<p>The <b>Boo with a Leopard Outfit</b> is one of the many Boo dogs in the collection of The Worlds Cutest Dog Boo. Very soft, 10/10 no notes.</p>';
        break;

    case 'Tuesday' :
        $plush = '<h2> Tuesday is Mermaid Pusheen with Lights day! </h2>';
        $pic = 'pusheen-mermaid-lights.jpg';
        $alt = 'A Pusheen in a mermaid outfit, the tail is shiny';
        $content = '<p>The <b>Mermaid Pusheen</b> has a tail that lights up with small red lights when you pat the right place on Pusheen. The lights are meant to mimic the iridescence of the tail. I recently subscribed to the pusheen box service but cancelled after a few boxes as I didn\'t get much joy from them besides the vinyl figure and the small plush I sometimes got. People are also always welcome to buy me pusheens.</p>';
        break;

    case 'Wednesday' :
        $plush = '<h2> Wednesday is Hello Kitty 2023 Lunar New Year day! </h2>';
        $pic = 'hello-kitty-2023-lunar-new-year.jpg';
        $alt = 'Hello Kitty in a rabbit outfit themed to Lunar New Year';
        $content = '<p>This is the most recent addition to my plush collection (as of writing this) and it\'s really soft. The ears are stuffed and the envelope it\'s holding can open. This was totally an impulse but (as are most of my plushes) but I am super happy I was impulsive as they were limited edition.</p>';
        break;

    case 'Thursday' :
        $plush = '<h2> Thursday is Pacific White Sided Dolphin day! </h2>';
        $pic = 'vancouver-dolphin.jpg';
        $alt = 'A Pacific White Sided Dolphin plush';
        $content = '<p>I got this stuffed animal a long time ago as a gift from my uncle for I believe my 6th birthday. This is by far my most loved stuffed animal and I never sleep without it (unless in an enviroment like a camp).</p>';
        break;
}
?>


<!DOCTYPE html>
<html lang="en">

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