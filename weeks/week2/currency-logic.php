<?php
// 1 ruble = $0.017
// 1 pound sterling = $1.15
// 1 canadian dollar = $0.76
// 1 euro = $1
// 1 yen = $0.0074

// rubles = 10007 (amount) = $170.12
// pound = 500 = $575
// canada = 5000 = $3800
// euros = 1200 = $1200
// yen = 2000 = $14.8
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
                    <td>10007</td>
                    <td>$170.12</td>
                </tr>

                <tr>
                    <th>Pounds</th>
                    <td>500</td>
                    <td>$575</td>
                </tr>

                <tr>
                    <th>Canadian Dollars</th>
                    <td>5000</td>
                    <td>$3800</td>
                </tr>

                <tr>
                    <th>Euros</th>
                    <td>1200</td>
                    <td>$1200</td>
                </tr>

                <tr>
                    <th>Yen</th>
                    <td>2000</td>
                    <td>$14.80</td>
                </tr>
            </table>

        </div>
        <!-- end wrapper -->
</body>
</html>