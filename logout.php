<?php
session_start();

// Set session variables
$_SESSION['user'] = "jaaph";
$_SESSION['logged_in'] = 1;

//destroy the session
$_session = array();
$session_destroy();