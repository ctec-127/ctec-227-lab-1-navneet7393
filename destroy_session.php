<?php
session_start();

unset($_SESSION['role']);
unset($_SESSION['browser']);
unset($_SESSION['views']);


if (isset($_SESSION['role'])) {
    if($_SESSION['views'] > 0) {
        echo "<p>The views are: <strong>{$_SESSION['views']}</strong></p>";
    }
} else {
    echo "<p> The role has been unset </p>";
}

if (isset($_SESSION['browser'])) {
    if($_SESSION['browser'] = 5) {
        echo "<p>This is the browser version is: <strong>{$_SESSION['browser']}</strong></p>";
    }
} else {
    echo "<p>The browsers version is unset</p>";
}

if (isset($_SESSION['views'])) {
    if($_SESSION['views'] > 0) {
        echo "<p>The views are: <strong>{$_SESSION['views']}</strong></p>";
    }
} else {
    echo "The view is unset";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Session</title>
</head>
<body>
    <p><a href="create_session.php">Create Session</a></p>    
    <p><a href="read_session.php">Read Session</a></p>    
    <p><a href="destroy_all_session.php">Destroy all Session</a></p>    

</body>
</html>