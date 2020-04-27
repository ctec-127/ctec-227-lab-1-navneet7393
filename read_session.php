<?php
    session_start();
    //Echo out the sessions:
    echo "<p> The number of views are: <strong>{$_SESSION['view']}</strong> </p>";
    echo "<p> The version of my Firefox browser is: <strong>{$_SESSION['browser']}</strong> </p>";
    echo "<p> The users login access is: <strong>{$_SESSION['role']}</strong> </p>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Session</title>
</head>
<body>
    <p><a href="read_session.php">Read Session</a></p>    
    <p><a href="destroy_session.php">Destroy Session</a></p>    
    <p><a href="destroy_all_session.php">Destroy all Session</a></p>    
</body>
</html>
