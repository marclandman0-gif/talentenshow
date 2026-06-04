<?php
session_start();

if (isset($_SESSION['logged_in'])) {
    header("Location: overzichtaanmeldingen.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Talentenshow</title>

    <link rel="icon" type="image/x-icon" href="img/talentenshow logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Login</h2>

    <form action="check.php" method="post">

        <div class="mb-3">
            <label class="form-label">Gebruikersnaam</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Wachtwoord</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Login
        </button>

    </form>

</div>

</body>
</html>