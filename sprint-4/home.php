<?php

session_start();

if(isset($_SESSION['username'])) {
    echo 'welcome home';
    echo '<p>Logged in as</p>';
    echo '<p>' . $_SESSION['username'] . '</p>';
    echo '<p><a href="/?logout">Log Out</a></p>';
    die();
}
else {
    header('Location: index.php');
    die();
}