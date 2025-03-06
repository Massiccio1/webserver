
<?php
$directory = 'views/';

// Check if the directory exists
if (!is_dir($directory)) {
    die("The folder '$directory' does not exist.");
}

// Scan the directory and get all files
$files = array_diff(scandir($directory), array('..', '.'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Viewer</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

    <h2>Files inside "views/" folder</h2>

    <div class="container">
        <?php
        foreach ($files as $file) {
            // Only include actual files, skipping directories
            if (is_file($directory . $file)) {
                echo "<iframe src='$directory$file' title='$file' ></iframe>";
            }
        }
        ?>
    </div>

</body>
</html>
