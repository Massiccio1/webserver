<?php
// Define the dictionary of site names and URLs
$sites = [
    'portainer' => 'http://localhost:8001',
    'redis' => 'http://localhost:8011',
    'phpmyadmin' => 'http://localhost:8012',
    'qbitorrent' => 'http://localhost:8021'
    // 'Facebook' => 'https://www.facebook.com',
    // 'Twitter' => 'https://www.twitter.com',
    // 'GitHub' => 'https://www.github.com',
    // 'Stack Overflow' => 'https://stackoverflow.com'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect List</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Loop through the dictionary and create rows for each website
                foreach ($sites as $siteName => $siteLink) {
                    echo "<tr>
                            <td>$siteName</td>
                            <td><button onclick='window.open(\"$siteLink\", \"_blank\")'>Visit $siteName</button></td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
