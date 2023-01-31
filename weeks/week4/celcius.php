<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Celcius Form Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <label>Enter your Celcius value</label>
            <input type="number" name="cel">

            <input type="submit" value="Convert It!">
        </fieldset>
        <p><a href="">Reset</a></p>
    </form>


    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(isset($_POST['cel'])) {
                $cel = $_POST['cel'];
                // using a new function to make sure cel is an integer, intval()
                $cel_int = intval($cel);
                $fahr = ($cel_int * 9/5) + 32;

                if($cel == NULL) {
                    echo '<p class="error">Please fill out the Celcius value!</p>';
                } elseif($fahr <= 32) {
                    echo '<p>'.$cel_int.' degrees Celcius equals '.$fahr.' degrees Fahrenheit<br>
                    and it is pretty cold out there!</p>';
                } elseif($fahr <= 45) {
                    echo '<p>'.$cel_int.' degrees Celcius equals '.$fahr.' degrees Fahrenheit<br>
                    and it is getting slightly warmer!</p>';
                } elseif($fahr <= 60) {
                    echo '<p>'.$cel_int.' degrees Celcius equals '.$fahr.' degrees Fahrenheit<br>
                    and it is warm-ish!</p>';
                } elseif($fahr <= 90) {
                    echo '<p>'.$cel_int.' degrees Celcius equals '.$fahr.' degrees Fahrenheit<br>
                    and we may be going to the beach!</p>';
                } else {
                    echo '<p>'.$cel_int.' degrees Celcius equals '.$fahr.' degrees Fahrenheit<br>
                    and we are at the beach!</p>';
                }// end null

            } // end isset

        } // end post
    ?>
    
</body>
</html>