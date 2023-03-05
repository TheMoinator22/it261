<?php
include('./includes/header.php');
include('./database/config.php');
// body and html already open
?>

<div id="wrapper">
    <main>
        <h1>Here are some of the most popular Sanrio characters!</h1>

        <?php
            $sql = 'SELECT * FROM sanrio';
            // database connection
            $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
            $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

            if(mysqli_num_rows($result) > 0) {
                // read rows with a while loop

                while($row = mysqli_fetch_assoc($result)) {

                    echo '
                        <h2>Information about '.$row['name'].' </h2>
                        <ul>
                            <li><b>Name:</b> '.$row['first_name'].' </li>
                            <li><b>Birth Year:</b> '.$row['birthdate'].' </li>
                        </ul>
                        <p>For more information about '.$row['name'].', click <a href="sanrio-view.php?id='.$row['sanrio_id'].' ">here</a></p>
                    ';

                } // end while

            } else { 
                echo 'Nobody is Home!';
            } // end if rows > 0

            // now we are going to release the server
            @mysqli_free_result($result);

            // now we are going to close the connection
            @mysqli_close($iConn);

        ?>

    </main>
</div>
<!-- end wrapper -->

<?php
include('./include/footer.php');