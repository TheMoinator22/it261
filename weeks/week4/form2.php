<?php

if(isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['comments'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    if(empty($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['comments'])) {
        echo 'Please fill out all the required fields';
    } else {
        echo $first_name;
        echo '<br>';
        echo $last_name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
        echo '<br>';
    } // end empty
} else {
    echo '
        <form action="" method="post">
            <label>First Name</label>
            <input type="text" name="first_name">

            <label>Last Name</label>
            <input type="text" name="last_name">

            <label>Email</label>
            <input type="email" name="email">

            <label>Comments</label>
            <textarea name="comments"> </textarea>

            <input type="submit" value"Send it!">
        </form>

        <p><a href="">RESET</a></p>
    ';
} // end isset