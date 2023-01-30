<?php
// what is isset() function- asking if smth has been set

// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else {
// echo 'Variable has not been set';
// }
// echo '<br>';


// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!';
// }


if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}


switch($today) {
    case 'Friday' :
        $coffee = '<h2> Friday is our Pumpkin Latte day! </h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p>The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003.</p>';
        break;

    case 'Saturday' :
        $coffee = '<h2> Saturday is our Green Tea Latte day! </h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea Latte';
        $content = '<p>A <b>green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
        break;

    case 'Sunday' :
        $coffee = '<h2> Sunday is our Regular Joe day! </h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Coffee';
        $content = '<p>Most folks can tell if they\'ll be late to work by the length of the line at Dunkin\' Donuts. That\'s why <b>coffee regular</b> is such a comforting phrase. For anyone who\'s lived here more than a week, coffee regular means coffee with cream and sugar. It doesn\'t save you much time. It isn\'t jargon for something super complicated for the coffee purveyor.</p>';
        break;

    case 'Monday' :
        $coffee = '<h2> Monday is our Latte day! </h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = '<p><b>Caffè latte</b>, often shortened to just latte in English, is a coffee beverage of Italian origin made with espresso and steamed milk. </p>';
        break;

    case 'Tuesday' :
        $coffee = '<h2> Tuesday is our Americano day! </h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<p><b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.</p>';
        break;

    case 'Wednesday' :
        $coffee = '<h2> Wednesday is our Cappuccino day! </h2>';
        $pic = 'cap.jpg';
        $alt = 'cappuccino';
        $content = '<p>A <b>cappuccino</b> is an espresso-based coffee drink that originated in Italy and is traditionally prepared with steamed milk foam.</p>';
        break;

    case 'Thursday' :
        $coffee = '<h2> Thursday is our Frappuccino day! </h2>';
        $pic = 'frap.jpg';
        $alt = 'frappuccino';
        $content = '<p><b>Frappuccino</b> is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.</p>';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercize</title>
    <style>
        * {
            padding : 0;
            margin : 0;
            box-sizing : border-box;
        }
        #wrapper {
            width : 940px;
            margin : 20px auto;
        }

        h1, h2, img {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id="wrapper">

        <h1> My Wonderful Switch Classwork Exercize (not the daily homework)</h1>

        <?php 
        echo $coffee;
        ?>

        <img src="../../website/images/<?php echo $pic;?>" alt="<?php echo $alt;?>">

        <?php
        echo $content;
        ?>

        <h2>Check out our Daily Specials!</h2>

        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>

    </div> <!-- end wrapper  -->
</body>
</html>