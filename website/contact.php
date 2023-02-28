<?php

$name = '';
$email = '';
$phone = '';
$plush = '';
$region = '';
$privacy = '';

$name_error = '';
$email_error = '';
$phone_error = '';
$plush_error = '';
$region_error = '';
$privacy_error = '';

ob_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['plush'])) {
        $plush_error = 'Please choose your favorite plushes';
    } else {
        $plush = $_POST['plush'];
    } // end empty

    if(empty($_POST['email'])) {
        $email_error = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    } // end empty

    if(empty($_POST['name'])) {
        $name_error = 'Please fill out your name';
    } else {
        $name = $_POST['name'];
    } // end empty

    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_error = 'Please fill out your phone number.';
    } elseif(array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_error = 'Invalid format!';
        } else{
            $phone = $_POST['phone'];
        } // end else
    } // end main if

    if(empty($_POST['privacy'])) {
        $privacy_error = 'Please agree to the privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    } // end empty

    if($_POST['region'] == NULL) {
        $region_error = 'Please select your region.';
    } else {
        $region = $_POST['region'];
    }// end empty


    // plush function
    function my_plush($plush) {
        $my_return = '';

        if(!empty($_POST['plush'])) {
            $my_return = implode(', ', $_POST['plush']);
        } else {
            $plush_error = 'please choose plushy types';
        } // end empty

        return $my_return;

    } // end function

    if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['plush'], $_POST['region'], $_POST['privacy'])) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email on '.date('m/d/y, h i A');
        $body = '
        Name: '.$name.' '.PHP_EOL.'
        Email: '.$email.'  '.PHP_EOL.'
        Phone number: '.$phone.'  '.PHP_EOL.'
        Region: '.$region.'  '.PHP_EOL.'
        Plushes: '.my_plush($plush).' '.PHP_EOL.'
        ';

        $headers = array(
            'from' => 'noreply@bluehost.com',
        );

        if(!empty($name && $email && $phone && $region && $plush) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        } // end empty

    } // end isset

} // end server request

include('./includes/header.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../weeks/week6/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Contact JHW </legend>

            <label>First and Last Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) {echo htmlspecialchars($_POST['name']);} ?>">
            <span class="error"><?php echo $name_error; ?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) {echo htmlspecialchars($_POST['email']);} ?>">
            <span class="error"><?php echo $email_error; ?></span>

            <label>Phone Number</label>
            <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) {echo htmlspecialchars($_POST['phone']);} ?>">
            <span class="error"><?php echo $phone_error; ?></span>

            <label>Favorite types of plushes</label>
            <ul>
                <li><input type="checkbox" name="plush[]" value="animal" <?php if(isset($_POST['plush']) && in_array('animal', $plush)) {echo 'checked="checked"';} ?>> Creatures (inludes extinct creatures and fantasy creatures) </li>
                <li><input type="checkbox" name="plush[]" value="object" <?php if(isset($_POST['plush']) && in_array('object', $plush)) {echo 'checked="checked"';} ?>> Inanimate Objects</li>
                <li><input type="checkbox" name="plush[]" value="merch" <?php if(isset($_POST['plush']) && in_array('merch', $plush)) {echo 'checked="checked"';} ?>> Merchandise of characters in games/movies/shows etc. </li>
                <li><input type="checkbox" name="plush[]" value="character" <?php if(isset($_POST['plush']) && in_array('character', $plush)) {echo 'checked="checked"';} ?>> Characters largely associated with plushes (ex. Hello Kitty, Pusheen etc.) </li>
                <li><input type="checkbox" name="plush[]" value="other" <?php if(isset($_POST['plush']) && in_array('other', $plush)) {echo 'checked="checked"';} ?>> Other </li>
            </ul>
            <span class="error"><?php echo $plush_error; ?></span>

            <label>Where is the U.S do you live?</label>
            <select name="region">
                <option value="" NULL <?php if(isset($_POST['region']) && $_POST['region'] == NULL) {echo 'selected="unselected"';}?>>Select One</option>
                <option value="northwest" <?php if(isset($_POST['region']) && $_POST['region'] == 'northwest') {echo 'selected="selected"';}?>>Northwest</option>
                <option value="southwest" <?php if(isset($_POST['region']) && $_POST['region'] == 'southwest') {echo 'selected="selected"';}?>>Southwest</option>
                <option value="midwest" <?php if(isset($_POST['region']) && $_POST['region'] == 'midwest') {echo 'selected="selected"';}?>>Midwest</option>
                <option value="east_coast" <?php if(isset($_POST['region']) && $_POST['region'] == 'east_coast') {echo 'selected="selected"';}?>>East Coast</option>
                <option value="northeast" <?php if(isset($_POST['region']) && $_POST['region'] == 'northeast') {echo 'selected="selected"';}?>>Northeast</option>
            </select>
            <span class="error"><?php echo $region_error; ?></span>

            <label>Privacy</label>
            <ul><li><input type="radio" name="privacy" value="privacy_yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'privacy_yes') {echo 'checked="checked"';} ?>> Agree to privacy policy </li></ul>
            <span class="error"><?php echo $privacy_error; ?></span>

            <input type="submit" value="Send">

            <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'" value="Reset">

        </fieldset>
    </form>
</body>
</html>

<?php
include('./includes/footer.php');
?>