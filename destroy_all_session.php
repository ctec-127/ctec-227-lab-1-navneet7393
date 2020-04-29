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