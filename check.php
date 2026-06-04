<?php
session_start();

$conn = new mysqli("localhost", "root", "", "talentenshow");

if ($conn->connect_error) {
    die("Database verbinding mislukt.");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM gebruikers
        WHERE gebruikersnaam='$username'
        AND wachtwoord='$password'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $_SESSION['user'] = $username;
    $_SESSION['logged_in'] = true;

    header("Location: overzichtaanmeldingen.php");
    exit();

} else {

    echo "
    <script>
        alert('Verkeerde gebruikersnaam of wachtwoord');
        window.location.href='login.php';
    </script>
    ";

}
?>