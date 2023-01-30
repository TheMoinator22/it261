<?php
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
if($today == 'Monday') {
    ?>
    <style>
        body {
            background: violet;
        }
    </style>
    <?php
} elseif($today == 'Tuesday') {
    ?>
    <style>
        body {
            background: seagreen;
        }
    </style>
    <?php
} elseif($today == 'Wednesday') {
    ?>
    <style>
        body {
            background: pink;
        }
    </style>
    <?php
} elseif($today == 'Thursday') {
    ?>
    <style>
        body {
            background: lightblue;
        }
    </style>
    <?php
} elseif($today == 'Friday') {
    ?>
    <style>
        body {
            background: plum;
        }
    </style>
    <?php
} elseif($today == 'Saturday') {
    ?>
    <style>
        body {
            background: cornflowerblue;
        }
    </style>
    <?php
} elseif($today == 'Sunday') {
    ?>
    <style>
        body {
            background: purple;
        }
    </style>
    <?php
}


include('./includes/footer.php');
?>