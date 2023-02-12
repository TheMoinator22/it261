<?php
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
        $color = 'plum';
        break;

    case 'Saturday' :
        $plush = '<h2> Saturday is Roomies Party LTD Shark day! </h2>';
        $pic = 'roomies-shark.jpg';
        $alt = 'A plush shark with a party hat';
        $content = '<p>The <b>Roomies Party LTD shark</b> is one of a whole collection of animals wearing party hats. The shark is a new hire at Roomies LTD and is attending a work party. I do not have enough money to buy them all :(</p>';
        $color = 'cornflowerblue';
        break;

    case 'Sunday' :
        $plush = '<h2> Sunday is Squishables Poodle Moth day! </h2>';
        $pic = 'squishable-poodle-moth.jpg';
        $alt = 'A Squishables poodle moth, which is mainly black and white';
        $content = '<p>The <b>Poodle Moth</b> by Squishables is one of their many moths they sell, and I need them all. (If anyone wants to get me the Love Bug moth for Valentines Day...) I need to have a friend who works there and will gift me dozens of squishables.</p>';
        $color = 'purple';
        break;

    case 'Monday' :
        $plush = '<h2> Monday is Boo Leopard Outfit day! </h2>';
        $pic = 'boo-dog-leopard.jpg';
        $alt = 'A golden colored dog named Boo wearing a leopard outfit';
        $content = '<p>The <b>Boo with a Leopard Outfit</b> is one of the many Boo dogs in the collection of The Worlds Cutest Dog Boo. Very soft, 10/10 no notes.</p>';
        $color = 'violet';
        break;

    case 'Tuesday' :
        $plush = '<h2> Tuesday is Mermaid Pusheen with Lights day! </h2>';
        $pic = 'pusheen-mermaid-lights.jpg';
        $alt = 'A Pusheen in a mermaid outfit, the tail is shiny';
        $content = '<p>The <b>Mermaid Pusheen</b> has a tail that lights up with small red lights when you pat the right place on Pusheen. The lights are meant to mimic the iridescence of the tail. I recently subscribed to the pusheen box service but cancelled after a few boxes as I didn\'t get much joy from them besides the vinyl figure and the small plush I sometimes got. People are also always welcome to buy me pusheens.</p>';
        $color = 'seagreen';
        break;

    case 'Wednesday' :
        $plush = '<h2> Wednesday is Hello Kitty 2023 Lunar New Year day! </h2>';
        $pic = 'hello-kitty-2023-lunar-new-year.jpg';
        $alt = 'Hello Kitty in a rabbit outfit themed to Lunar New Year';
        $content = '<p>This is the most recent addition to my plush collection (as of writing this) and it\'s really soft. The ears are stuffed and the envelope it\'s holding can open. This was totally an impulse but (as are most of my plushes) but I am super happy I was impulsive as they were limited edition.</p>';
        $color = 'pink';
        break;

    case 'Thursday' :
        $plush = '<h2> Thursday is Pacific White Sided Dolphin day! </h2>';
        $pic = 'vancouver-dolphin.jpg';
        $alt = 'A Pacific White Sided Dolphin plush';
        $content = '<p>I got this stuffed animal a long time ago as a gift from my uncle for I believe my 6th birthday. This is by far my most loved stuffed animal and I never sleep without it (unless in an enviroment like a camp).</p>';
        $color = 'lightblue';
        break;
}


include('./includes/header.php')
?>

<div id="wrapper">


    <div id="hero">
        <img src="images/phplogo.png" alt="logo acting as placeholder">
    </div>
    <!-- end hero -->


    <main>
        <h1>
            This is our Switch daily assignment.
        </h1>

        <h2>
            This one is for all the plush enthusiasts out there
        </h2>

        <p>
            All of the stuffed animals I will be showing you throughout the days are all plushes that I own, and these don't even scratch the surface of my collection. Have fun! (Stuffed animals are the same as plushes)
        </p>

        <?php
        echo $plush;
        echo $content;
        ?>

<h2>Here are more things for you to impulse buy!</h2>

<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>

    </main>


    <aside>
        <style>
            img {
                max-width: 100%;
            }
        </style>

        <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">       
    </aside>


</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');
?>