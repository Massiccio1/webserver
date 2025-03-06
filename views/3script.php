<?php

include 'utils/utils.php';

// Define the dictionary of command names and shell scripts
$commands = [
    'List Files' => 'ls -l', // Example: Lists files in the current directory
    'Show Disk Usage' => 'df -h', // Example: Shows disk usage
    'Current Date and Time' => 'date', // Example: Prints the current date and time
    'Uptime' => 'uptime', // Example: Shows the system uptime
    'Current Logged Users' => 'who', // Example: Shows logged-in users
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Command</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the dictionary and create rows for each command
            foreach ($commands as $commandName => $command) {
                echo "<tr>
                        <td>$commandName</td>
                        <td>
                            <form method='post'>
                                <input type='hidden' name='command' value='$command'>
                                <button type='submit'>Execute</button>
                            </form>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // If a command is submitted via the form, execute it and display the result
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['command'])) {
        $commandToExecute = $_POST['command'];
        $output = executeCommand($commandToExecute);
        echo "<h3>Command Output:</h3>";
        echo "<pre>$output</pre>";
    }
    ?>

</body>
</html>
