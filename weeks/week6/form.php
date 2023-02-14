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

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) {echo htmlspecialchars($_POST['last_name']);} ?>">

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) {echo htmlspecialchars($_POST['email']);} ?>">

            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') {echo 'checked="checked"';} ?>> Female </li>
                <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') {echo 'checked="checked"';} ?>> Male </li>
                <li><input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') {echo 'checked="checked"';} ?>> Other </li>
            </ul>

            <label>Phone Number</label>
            <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) {echo htmlspecialchars($_POST['phone']);} ?>">

            <label>Favorite Wines</label>
            <ul>
                <li><input type="checkbox" name="wines[]" value="cabernet" <?php if(isset($_POST['wines']) && in_array('cabernet', $wines)) ?>> Cabernet </li>
                <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) ?>> Merlot </li>
                <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) ?>> Syrah </li>
                <li><input type="checkbox" name="wines[]" value="red-blend" <?php if(isset($_POST['wines']) && in_array('red-blend', $wines)) ?>> Red Blend </li>
                <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) ?>> Malbec </li>
            </ul>

            <label>Regions</label>
            <select name="regions">
                <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) {echo 'selected="unselected"';}?>>Select One</option>
                <option value="northwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'northwest') {echo 'selected="selected"';}?>>Northwest</option>
                <option value="southwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'southwest') {echo 'selected="selected"';}?>>Southwest</option>
                <option value="midwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'midwest') {echo 'selected="selected"';}?>>Midwest</option>
                <option value="east-coast" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'east-coast') {echo 'selected="selected"';}?>>East Coast</option>
                <option value="northeast" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'northeast') {echo 'selected="selected"';}?>>Northeast</option>
            </select>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments']);} ?></textarea>

            <label>Privacy</label>
            <ul><li><input type="radio" name="privacy" value="privacy_yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'privacy_yes') {echo 'checked="checked"';} ?>> Agree to privacy agreement </li></ul>

            <input type="submit" value="Send it">

        </fieldset>
    </form>
</body>
</html>