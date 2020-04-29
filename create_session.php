<?php
//starting session
    session_start();
//if it is set to view make the variable increment by 1 on every reload.
    if (isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views'] + 1;
    } else {
        $_SESSION['views'] = 0;
    //define 3 session variables and set the value to 0 
        $_SESSION['view'] = 0; //'views' variables set to the value of 0
        $_SESSION['browser'] = 5.0; // echo $_SERVER['HTTP_USER_AGENT']; to see the current browser version
        $_SESSION['role'] = 'admin';
    //check for browser
        // echo $_SERVER['HTTP_USER_AGENT'];
    }



    echo "<p> The number of views are: <strong>{$_SESSION['views']}</strong> </p>";
    echo "<p> The version of my Firefox browser is: <strong>{$_SESSION['browser']}</strong> </p>";
    echo "<p> The users login access is: <strong>{$_SESSION['role']}</strong> </p>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session</title>
</head>
<body><!-- Links to other pages read, destroy and destroy all session-->
    <p><a href="read_session.php">Read Session</a></p>    
    <p><a href="destroy_session.php">Destroy Session</a></p>    
    <p><a href="destroy_all_session.php">Destroy all Session</a></p>    
</body>
</html>

