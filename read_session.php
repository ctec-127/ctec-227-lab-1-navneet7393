<?php
    session_start();
    //Echo out the sessions:
    if (isset($_SESSION['views'])) {
        if($_SESSION['views'] > 0) {
            echo "<p>The views are: <strong>{$_SESSION['views']}</strong></p>";
        }
    } else {
        echo "The view is not working, Please click on create session";
    }

    if (isset($_SESSION['browser'])) {
        if($_SESSION['browser'] = 5) {
            echo "<p>This is the browser version is: <strong>{$_SESSION['browser']}</strong></p>";
        }
    } else {
        "The browsers version is not version 5";
    }

    if (isset($_SESSION['role'])) {
        if($_SESSION['role'] = 'admin') {
            echo "<p>The role of this user is: <strong>{$_SESSION['role']}</strong></p>";
        }
    } else {
        "The role of the browser is not admin";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Session</title>
</head>
<body>
    <p><a href="create_session.php">Create Session</a></p>    
    <p><a href="destroy_session.php">Destroy Session</a></p>    
    <p><a href="destroy_all_session.php">Destroy all Session</a></p>    
</body>
</html>


