<?php
// our server.php file where our session will start
// pur sessions is a way to store information

session_start();
include('config.php');
// will eventually have header include here
// include(./includes/header.php);

// this page will commincate with the database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user using if isset reg_user
if (isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $user_name = mysqli_real_escape_string($iConn, $_POST['user_name']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    if(empty($first_name)) {
        array_push($errors, 'First Name is required');
    } // end first name

    if(empty($last_name)) {
        array_push($errors, 'Last Name is required');
    } // end last name

    if(empty($email)) {
        array_push($errors, 'Email is required');
    } // end email

    if(empty($user_name)) {
        array_push($errors, 'Username is required');
    } // end username

    if(empty($password_1)) {
        array_push($errors, 'Password is required');
    } // end password

    if(empty($password_2)) {
        array_push($errors, 'Your retyped password is required');
    } // end password

    if($password_1 !== $password_2) {
        array_push($errors, 'Passwords are not matching');
    } // end password match

} // end reg user