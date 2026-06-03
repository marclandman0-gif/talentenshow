<?php 
include_once ('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Inloggen</h2>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Inloggen</h2>

        <form action="check.php" method="post">

            <div class="mb-3">
                <label class="form-label">Gebruikersnaam</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Wachtwoord</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

        </form>
    </div>
</div>

</body>
</html>
