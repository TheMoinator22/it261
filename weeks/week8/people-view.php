<?php
// only using config file include

include('config.php');

// is out get set?
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

// we now select from table where people id = id
$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
        $feedback = '';
    } // end while

} else {
    $feedback = 'There is a problem...';
}// end rows > 0

include('./includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1>Welcome to Our People View Page!</h1>
        <h2>Introducing you to <?php echo $first_name ?>'s page</h2>
        <ul>
            <?php echo '
            <li><b>First Name: </b>'.$first_name.'</li>
            <li><b>Last Name: </b>'.$last_name.'</li>
            <li><b>Email: </b>'.$email.'</li>
            <li><b>Birth Year: </b>'.$birthdate.'</li>
            <li><b>Occupation: </b>'.$occupation.'</li>
            <li>'.$details.'</li>
            ';?>
        </ul>
        <p><a href="people.php">Return to the people page</a></p>
    </main>

    <aside>
        <h3>This is my aside</h3>

        <figure>
            <img src="images/<?php echo $id?>.jpg" alt="<?php echo $first_name ?>">
            <figcaption>
                <?php echo '
                    '.$first_name.' '.$last_name.', '.$occupation.'
                ';?>
            </figcaption>
        </figure>

        <p><i><?php echo $blurb ?></i></p>

    </aside>

    <?php
        // now we are going to release the server
        @mysqli_free_result($result);

        // now we are going to close the connection
        @mysqli_close($iConn);
    ?>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');