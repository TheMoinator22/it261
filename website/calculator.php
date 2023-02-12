<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Mileage Calculator</title>
    <link href="css/calculatorstyles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) {echo htmlspecialchars($_POST['name']);} ?>">

            <label>Total miles driving?<label>
            <input type="number" name="total_miles" value="<?php if(isset($_POST['total_miles'])) {echo htmlspecialchars($_POST['total_miles']);} ?>">

            <label>How fast do you typically drive? (in miles per hour)</label>
            <input type="number" name="mph" value="<?php if(isset($_POST['mph'])) {echo htmlspecialchars($_POST['mph']);} ?>">
        
            <label>How many hours do you plan driving each day?</label>
            <input type="number" name="hours_daily" value="<?php if(isset($_POST['hours_daily'])) {echo htmlspecialchars($_POST['hours_daily']);} ?>">

            <label>Price of gas:</label>
            <ul>
                <li><input type="radio" name="gas_price" value="3.00" <?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 3.00) {echo 'checked="checked"';} ?>> $3.00 </li>
                <li><input type="radio" name="gas_price" value="3.50" <?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 3.50) {echo 'checked="checked"';} ?>> $3.50 </li>
                <li><input type="radio" name="gas_price" value="4.00" <?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 4.00) {echo 'checked="checked"';} ?>> $4.00 </li>
            </ul>

            <label>Fuel efficiency</label>
            <select name="mpg">
                <option value="" NULL <?php if(isset($_POST['mpg']) && $_POST['mpg'] == NULL) {echo 'selected="unselected"';}?>> Select One! </option>
                <option value="10" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == "10") {echo 'selected="selected"';}?>> Terrible - 10mpg </option>
                <option value="20" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == "20") {echo 'selected="selected"';}?>> Eh - 20mpg </option>
                <option value="30" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == "30") {echo 'selected="selected"';}?>> Good - 30mpg </option>
                <option value="40" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == "40") {echo 'selected="selected"';}?>> Excellent - 40mpg </option>
            </select>

            <input type="submit" value="Calculate">

            <p><a href="">Reset</a></p>

        </fieldset>
    </form>


    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(empty($_POST['name'])) {
                echo '<p class="error">Please fill out your name</p>';
            }

            if(empty($_POST['total_miles'])) {
                echo '<p class="error">Please fill out the total miles you will drive</p>';
            }

            if(empty($_POST['mph'])) {
                echo '<p class="error">Please fill out your driving speed</p>';
            }

            if(empty($_POST['hours_daily'])) {
                echo '<p class="error">Please fill out how many miles you will drive daily</p>';
            }

            if(empty($_POST['gas_price'])) {
                echo '<p class="error">Please select the price of gas</p>';
            }

            if($_POST['mpg'] == NULL) {
                echo '<p class="error">Please select your miles per gallon rate</p>';
            }


            if(isset($_POST['name'], $_POST['total_miles'], $_POST['mph'], $_POST['hours_daily'], $_POST['gas_price'], $_POST['mpg'])) {
                $name = $_POST['name'];
                $total_miles = floatval($_POST['total_miles']);
                $mph = floatval($_POST['mph']);
                $hours_daily = floatval($_POST['hours_daily']);
                $gas_price = floatval($_POST['gas_price']);
                $mpg = floatval($_POST['mpg']);
                if($mph == 0) {
                    $mph = 1;
                }
                $hours_driving = $total_miles / $mph;

                if($hours_daily == 0) {
                    $hours_daily = 1;
                }
                $days_driving = $hours_driving / $hours_daily;

                if($mpg == 0) {
                    $mpg = 1;
                }
                $fuel_amount = $total_miles / $mpg;
                
                $gas_cost = $fuel_amount * $gas_price;

                if(!empty($name && $total_miles && $mph && $hours_daily && $gas_price && $mpg)) {
                    echo '<div class="box">
                        <p> Hello '.$name.'. You will be on the road for a total of <b>'.number_format($hours_driving, 2).' hours</b>
                        over the course of <b>'.number_format($days_driving, 2).' days</b>.
                        This trip will take <b>'.number_format($fuel_amount, 2).' gallons</b> of gas, costing you <b>$'.number_format($gas_cost,2).' dollars.</b></p>
                    <div>';
                } // end !isset

            } // end isset

        } // end server
    ?>
    
</body>
</html>