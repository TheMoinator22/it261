<html>
<head>
    <title>My Adder Assignment</title>
    <link href="../weeks/week4/css/styles.css" type="text/css" rel="stylesheet">
    <!-- might be wrong form of ./ ../ -->
</head>
<body>
    <h1>Adder.php</h1>
    <form action="" method="post">
        <fieldset>
            <label>Enter the first number:</label>
            <input type="number" name="num1">

            <label>Enter the second number:</label>
            <input type="number" name="num2">

            <input type="submit" value="Add Em!!">
        <fieldset>
    </form>


    <?php //adder-wrong.php
        if (isset($_POST['num1'], $_POST['num2'])) { // added num2

            if(empty($_POST['num1'] && $_POST['num2'])) {
                echo '<p class="error">Please fill out both fields</p>';
            } else {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $myTotal = $num1 + $num2;
                echo '<h2>You added '. $num1 .' and '.$num2.'</h2>'; // fixed quotes and added </h2>
                echo ' <p> and the answer is <br>
                <a style="color:red;"> '.$myTotal .'! </a></p>'; //quotes, </p> place, added a
                echo'<p><a href="">Reset page</a></p>'; // i did smth here, forget what lol
            } // end empty

        } // end isset
    ?> 

</body>
</html>