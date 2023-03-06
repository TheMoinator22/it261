<?php
include('./database/config.php');

// is out get set?
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:sanrio.php');
}


$sql = 'SELECT * FROM sanrio WHERE chara_id = '.$id.'';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $name = stripcslashes($row['name']);
        $birthdate = stripcslashes($row['birthdate']);
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
        <h1>This is the Sanrio View Page</h1>
        <h2>Introducing you to <?php echo $name ?>'s page</h2>
        <ul>
            <?php echo '
            <li><b>Name: </b>'.$name.'</li>
            <li><b>Birth Year: </b>'.$birthdate.'</li>
            <li>'.$details.'</li>
            ';?>
        </ul>
        <p><a href="sanrio.php">Return to the sanrio database page</a></p>
    </main>

    <aside>
        <h3>This is <?php echo $name;?>!</h3>

        <figure>
            <img src="./images/sanrio<?php echo $id?>.jpg" alt="<?php echo $name ?>">
            <figcaption>
                <?php echo '
                    <i>'.$name.'<i>
                ';?>
            </figcaption>
        </figure>

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