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
    <div class="left">
        <?php
        $rndl = [5,12,20];
        for ($i = 0; $i <= 20; $i++) {
            $rnd = getRandomString2(12);
            echo $rnd . "<br>";
        }

        ?>
    </table>

</body>
</html>
