<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1> Our Arithmetic Form </h1>
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">

            <label>Phone Number</label>
            <input type="tel" name="phone">

            <label>How many Lattes do you want?</label>
            <input type="number" name="lattes">

            <label>How many Cappuccinos do you want?</label>
            <input type="number" name="capps">
            
            <label>How many Americanos do you want?</label>
            <input type="number" name="americanos">

            <label>Special requests?</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="Input Order">
        </fieldset>
    </form>

    <p><a href="">Reset Order</a></p>


    <?php
        date_default_timezone_set('America/Los_Angeles');
        $our_time = date('H:i');

        if(isset($_POST['name'], $_POST['phone'], $_POST['lattes'], $_POST['capps'], $_POST['americanos'], $_POST['comments'])) {

            if(empty($_POST['name'] && $_POST['phone'] && $_POST['lattes'] && $_POST['capps'] && $_POST['americanos'] && $_POST['comments'])) {
                echo '<p class="error">Please fill out the required fields</p>';
            } else {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $lattes = $_POST['lattes'];
                $capps = $_POST['capps'];
                $americanos = $_POST['americanos'];
                $comments = $_POST['comments'];
                $total = $lattes + $capps + $americanos;


                if($our_time<=11) {
                    $our_time = "Good Morning";
                } elseif($our_time<=17) {
                    $our_time = "Good Afternoon";
                } else {
                    $our_time = "Good Night";
                }


                echo '
                    <div class="box">
                        <h2>'.$our_time.', '.$name.'</h2>
                        <p> We have confirmed your order to this <b>number:</b> '.$phone.' and you have ordered the following:</p>

                        <ul>
                        <li>'.$lattes.' Lattes</li>
                        <li>'.$capps.' Cappuccinos</li>
                        <li>'.$americanos.' Americanos</li>
                        <li> Total amount is '.$total.' beverages</li>
                        </ul>

                        <p>This is your <b>special request:</b> '.$comments.'</p>
                        <p>Thank you for choosing our establishment!</p>
                    </div>
                ';

            } // end empty

        } // end isset
    ?>
    
</body>
</html>