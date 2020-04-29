<?php
session_start();

session_destroy();

    if (isset($_SESSION['views'])) {
        if($_SESSION['views'] > 0) {
            echo "<p>The views are: <strong>{$_SESSION['views']}</strong></p>";
        }
    } else {
        echo "<p>The view session is destroyed</p>";
    }

    if (isset($_SESSION['browser'])) {
        if($_SESSION['browser'] = 5) {
            echo "<p>This is the browser version is: <strong>{$_SESSION['browser']}</strong></p>";
        }
    } else {
        echo "<p>The browser session is destroyed</p>";
    }

    if (isset($_SESSION['role'])) {
        if($_SESSION['role'] = 'admin') {
            echo "<p>The role of this user is: <strong>{$_SESSION['role']}</strong></p>";
        }
    } else {
        echo "<p>The role session is destroyed</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy All Sessions</title>

    <p><a href="create_session.php">Create Session</a></p>    
    <p><a href="read_session.php">Read Session</a></p>    
    <p><a href="destroy_session.php">Destroy all Session</a></p>   
</head>
<body>
    
</body>
</html>

