<?php

function getRandomString($length = 10) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
function getRandomString2($length = 10) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $special = '!$&=^*_-';
    $allcharacters=$characters.$special.$special.$special;
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $allcharacters[rand(0, strlen($allcharacters) - 1)];
    }
    return $randomString;
}


// Function to execute a command and get the result
function executeCommand($command) {
    // Executing the command and returning the result
    return shell_exec($command);
}



?>