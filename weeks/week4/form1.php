<?php

if(isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo '<br>';
    echo $email;
} else {
    echo '
        <form action="" method="post">
            <label>NAME</label>
            <input type="text" name="name">

            <label>EMAIL</label>
            <input type="email" name="email">

            <input type="submit" value="Send it">
        </form>
    ';
}