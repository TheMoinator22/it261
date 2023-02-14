<?php

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$phone_error = '';
$gender_error = '';
$wines_error = '';
$regions_error = '';
$privacy_error = '';
$comments_error = '';

ob_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['wines'])) {
        $wines_error = 'What, no wines?';
    } else {
        $wines = $_POST['wines'];
    } // end empty

    if(empty($_POST['email'])) {
        $email_error = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    } // end empty

    if(empty($_POST['first_name'])) {
        $first_name_error = 'Please fill out your first name.';
    } else {
        $first_name = $_POST['first_name'];
    } // end empty

    if(empty($_POST['last_name'])) {
        $last_name_error = 'Please fill out your last name.';
    } else {
        $last_name = $_POST['last_name'];
    } // end empty

    if(empty($_POST['phone'])) {
        $phone_error = 'Please fill out your phone number.';
    } else {
        $phone = $_POST['phone'];
    } // end empty

    if(empty($_POST['gender'])) {
        $gender_error = 'Please choose your gender.';
    } else {
        $gender = $_POST['gender'];
    } // end empty

    if(empty($_POST['comments'])) {
        $comments_error = 'Please share your thoughts with us.';
    } else {
        $comments = $_POST['comments'];
    } // end empty

    if(empty($_POST['privacy'])) {
        $privacy_error = 'Please agree to the privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    } // end empty

    if($_POST['regions'] == NULL) {
        $regions_error = 'Please select your region.';
    } else {
        $regions = $_POST['regions'];
    }// end empty

    // wines function
    function my_wines($wines) {
        $my_return = '';

        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        } else {
            $wines_error = 'please choose wines';
        } // end empty

        return $my_return;

    } // end function

    if(isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['gender'], $_POST['wines'], $_POST['regions'], $_POST['comments'], $_POST['privacy'])) {
        $to = 'themoinator22@gmail.com';
        $subject = 'Test email on ' .date('m/d/y, h i A');
        $body = '
        First name: '.$first_name.' '.PHP_EOL.'
        Last name: '.$last_name.'  '.PHP_EOL.'
        Email: '.$email.'  '.PHP_EOL.'
        Phone number: '.$phone.'  '.PHP_EOL.'
        Gender: '.$gender.'  '.PHP_EOL.'
        Region: '.$regions.'  '.PHP_EOL.'
        Wines: '.my_wines($wines).'  '.PHP_EOL.'
        Comments: '.$comments.'  '.PHP_EOL.'
        ';

        if(!empty($first_name && $last_name && $email && $phone && $gender && $regions && $wines && $comments)) {
            mail($to, $subject, $body);
            header('Location:thx.php');
        } // end empty

    } // end isset

} // end server request

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 in Week 6</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend> Contact JHW </legend>

            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) {echo htmlspecialchars($_POST['first_name']);} ?>">
            <span class="error"><?php echo $first_name_error; ?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) {echo htmlspecialchars($_POST['last_name']);} ?>">
            <span class="error"><?php echo $last_name_error; ?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) {echo htmlspecialchars($_POST['email']);} ?>">
            <span class="error"><?php echo $email_error; ?></span>

            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') {echo 'checked="checked"';} ?>> Female </li>
                <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') {echo 'checked="checked"';} ?>> Male </li>
                <li><input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') {echo 'checked="checked"';} ?>> Other </li>
            </ul>
            <span class="error"><?php echo $gender_error; ?></span>

            <label>Phone Number</label>
            <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) {echo htmlspecialchars($_POST['phone']);} ?>">
            <span class="error"><?php echo $phone_error; ?></span>

            <label>Favorite Wines</label>
            <ul>
                <li><input type="checkbox" name="wines[]" value="cabernet" <?php if(isset($_POST['wines']) && in_array('cabernet', $wines)) {echo 'checked="checked"';} ?>> Cabernet </li>
                <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) {echo 'checked="checked"';} ?>> Merlot </li>
                <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) {echo 'checked="checked"';} ?>> Syrah </li>
                <li><input type="checkbox" name="wines[]" value="red-blend" <?php if(isset($_POST['wines']) && in_array('red-blend', $wines)) {echo 'checked="checked"';} ?>> Red Blend </li>
                <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) {echo 'checked="checked"';} ?>> Malbec </li>
            </ul>
            <span class="error"><?php echo $wines_error; ?></span>

            <label>Regions</label>
            <select name="regions">
                <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) {echo 'selected="unselected"';}?>>Select One</option>
                <option value="northwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'northwest') {echo 'selected="selected"';}?>>Northwest</option>
                <option value="southwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'southwest') {echo 'selected="selected"';}?>>Southwest</option>
                <option value="midwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'midwest') {echo 'selected="selected"';}?>>Midwest</option>
                <option value="east-coast" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'east-coast') {echo 'selected="selected"';}?>>East Coast</option>
                <option value="northeast" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'northeast') {echo 'selected="selected"';}?>>Northeast</option>
            </select>
            <span class="error"><?php echo $regions_error; ?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments']);} ?></textarea>
            <span class="error"><?php echo $comments_error; ?></span>

            <label>Privacy</label>
            <ul><li><input type="radio" name="privacy" value="privacy_yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'privacy_yes') {echo 'checked="checked"';} ?>> Agree to privacy policy </li></ul>
            <span class="error"><?php echo $privacy_error; ?></span>

            <input type="submit" value="Send it">

            <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'" value="Reset">

        </fieldset>
    </form>
</body>
</html>