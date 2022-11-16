<?php
// Sessions are the way to store information (in variables) to be used across multiple pages. Sessions are stored on the server
session_start();


if(isset($_SESSION['username'])) {
    echo '<h1>Welcome' . $_SESSION['username'] .  '</h1>';
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/php-crash/13_sessions.php">Home</a>'; // link to home
}