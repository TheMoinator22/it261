<?php
// our server.php file where our session will start
// pur sessions is a way to store information

session_start();
include('config.php');
// will eventually have header include here
// include(./includes/header.php);
// $errors = '';

// this page will commincate with the database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user using if isset reg_user
if (isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    if(empty($first_name)) {
        array_push($errors, "First Name is required");
    } // end first name

    if(empty($last_name)) {
        array_push($errors, "Last Name is required");
    } // end last name

    if(empty($email)) {
        array_push($errors, "Email is required");
    } // end email

    if(empty($username)) {
        array_push($errors, "Username is required");
    } // end username

    if(empty($password_1)) {
        array_push($errors, "Password is required");
    } // end password

    if(empty($password_2)) {
        array_push($errors, "Your retyped password is required");
    } // end password

    if($password_1 !== $password_2) {
        array_push($errors, "Passwords are not matching");
    } // end password match

    // we are checking username and password and selecting it from the table
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
    $rows = mysqli_fetch_assoc($result);

    if($rows) {

        // we cant have duplicate usernames or emails
        if($rows['username'] == $username) {
            array_push($errors, "Username already exists");
        } // end username == username

        if($rows['email'] == $email) {
            array_push($errors, "Email already taken");
        } // end email == email

    } // end if rows

    if(count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO users (username, first_name, last_name, email, password) VALUES ('$username', '$first_name', '$last_name', '$email', '$password')";
        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        // if we are successful, we will be directed to our login page
        header('Location:login.php');
    } // end count errors

} // end reg user