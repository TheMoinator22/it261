<?php
// $fahr = ($cel * 9/5) + 32;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        table {
            width: 500px;
            margin: 20px auto;
            border-collapse:collapse;
            border: 1px solid lightblue;
        }

        td, th {
            border: 1px solid lightblue;
            border-collapse:collapse;
            padding: 5px;
        }

        h1, h2 {
            text-align:center;
            margin: 10px 0;
            color: blue;
        }
    </style>
</head>
<body>
    <h1> My Celcius / Fahrenheit Table </h1>

    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>

        <?php 
            for($cel = 0; $cel <= 100; $cel += 5) {
                $fahr = ($cel * 9/5) + 32;
                echo '<tr>';
                echo '<td> '.$cel.' degrees </td>';
                echo '<td> '.$fahr.' degrees </td>';
                echo '</tr>';
            }
        ?>
    </table>

    <h2> My Extra Credit Celcius / Fahrenheit Table With No Decimals </h2>

    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>

        <?php 
            for($cel = 0; $cel <= 100; $cel += 2) {
                $fahr = ($cel * 9/5) + 32;
                echo '<tr>';
                echo '<td> '.$cel.' degrees </td>';
                echo '<td> '.number_format($fahr).' degrees </td>';
                echo '</tr>';
            }
        ?>
    </table>



    <h1> My Kilometer / Mile Table </h1>

    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>

        <?php 
            for($kilo = 0; $kilo <= 150; $kilo += 10) {
                $mile = $kilo /1.609;
                echo '<tr>';
                echo '<td> '.$kilo.' kilometers </td>';
                echo '<td> '.$mile.' miles </td>';
                echo '</tr>';
            }
        ?>
    </table>

    <h2> My Neater Kilometer / Mile Table </h2>

    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>

        <?php 
            for($kilo = 0; $kilo <= 150; $kilo += 10) {
                $mile = $kilo /1.609;
                echo '<tr>';
                echo '<td> '.$kilo.' kilometers </td>';
                echo '<td> '.number_format($mile, 2).' miles </td>';
                echo '</tr>';
            }
        ?>
    </table>

</body>
</html>