<?php
$ruble_rate = 0.017;
$pound_rate = 1.15;
$canada_rate = 0.76;
$euro_rate = 1;
$yen_rate = 0.0074;

$ruble_amount = 10007;
$pound_amount = 500;
$canada_amount = 5000;
$euro_amount = 1291;
$yen_amount = 4030;

$ruble_converted = $ruble_rate * $ruble_amount;
$pound_converted = $pound_rate * $pound_amount;
$canada_converted = $canada_rate * $canada_amount;
$euro_converted = $euro_rate * $euro_amount;
$yen_converted = $yen_rate * $yen_amount;

$total = $ruble_converted + $pound_converted + $canada_converted + $euro_converted + $yen_converted;

?>
<!-- can write php above doctype but cant echo before doctype -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency Logic Exercise</title>

    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        #wrapper {
            width:400pt;
            margin:20pt auto;
        }

        table {
            border:1pt solid pink;
            border-collapse:collapse;
            width:400pt;
        }

        th, td {
            border:1pt solid pink;
            padding:5pt;
        }

        h1, h2, h3 {
            text-align:center;
        }
    </style>
</head>
<body>
    
        <div id="wrapper">
            <h1> After our world-wind travels, we have returned home with the following currencies</h1>
            <ul>
                <li>Rubles</li>
                <li>Pounds</li>
                <li>Canadian Dollars</li>
                <li>Euros</li>
                <li>Yen</li>
            </ul>

            <h2>Whatever shall we do?</h2>
            <table>
                <tr>
                    <th colspan="2">Currency</th>
                    <th>Dollars</th>
                </tr>
                <tr>
                    <th>Rubles</th>
                    <td><?php echo $ruble_amount; ?></td> <!-- semicolon not needed as last line before closing tag -->
                    <td>$<?php echo ''.number_format($ruble_converted, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Pounds</th>
                    <td><?php echo $pound_amount; ?></td>
                    <td>$<?php echo ''.number_format($pound_converted, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Canadian Dollars</th>
                    <td><?php echo $canada_amount; ?></td>
                    <td>$<?php echo ''.number_format($canada_converted, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Euros</th>
                    <td><?php echo $euro_amount; ?></td>
                    <td>$<?php echo ''.number_format($euro_converted, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Yen</th>
                    <td><?php echo $yen_amount; ?></td>
                    <td>$<?php echo ''.number_format($yen_converted, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Total</th>
                    <td>American Dollars</td>
                    <td>$<?php echo ''.number_format($total, 2).'' ?></td>
                    <!-- floor instead of number_format gives the number rounded down to nearest whole number -->
                    <!-- ciel does same but round up -->
                </tr>
            </table>

        </div>
        <!-- end wrapper -->
</body>
</html>