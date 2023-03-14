<?php
session_start();
include('config.php');

// did the user log in correctly
if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
} // end !isset

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php');

// is our session success set?
if(isset($_SESSION['success'])) :?>

    <div class="success">
        <h3>
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']); 
            ?>
        </h3>
    </div>
    <!-- end success -->

<?php endif;


// is session username set?
if(isset($_SESSION['username'])) :?>

    <div class="welcome-logout">
        <h3>Welcome, <?php $_SESSION['username'] ?></h3>
        <p><a href="index.php?logout='1'">Logout</a></p>
    </div>
    <!-- end logout -->

<?php endif; ?>


<div id="wrapper">
    <h1>Welcome to our home page!</h1>
</div>
<!-- end wrapper -->


<?php
include('./includes/footer.php');