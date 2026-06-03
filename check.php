<?php
session_start();
include_once('db.php');

$conn = new mysqli("localhost", "root", "", "game");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM player WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $_SESSION['user'] = $username;

    header("Location: http://localhost/PHP/datagame/overzichtaanmelingen.php");
    exit;

} else {
    header("Location: http://localhost/PHP/datagame/login.php");
    exit;
}
