<?php

include 'utils/utils.php'
// Function to generate a random string

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Table</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <table>
        <tr>
            <th>Random Characters</th>
            <th>#</th>
        </tr>
        <?php
        $rndl = [5,12,20];
        for ($i = 0; $i <= 2; $i++) {
            $rnd = getRandomString($rndl[$i]);
            echo "<tr>
                    <td>" . $rnd . "</td>
                     <td> <button onclick=\"ctc($rnd)\">copy</button></td>
                  </tr>";
        }
        for ($i = 0; $i <= 2; $i++) {
            $rnd = getRandomString2($rndl[$i]);
            echo "<tr>
                    <td>" . $rnd . "</td>
                     <td> <button onclick=\"ctc($rnd)\">copy</button></td>
                  </tr>";
        }
        ?>
    </table>

</body>
</html>
