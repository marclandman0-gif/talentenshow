<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/talentenshow logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Talentenshow Aanmelden</title>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/talentenshow logo.png" alt="Logo">
            Talentenshow
        </a>

        <!-- HAMBURGER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- LINKS -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="bestel.php">Tickets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="aanmelddeelnemers.php">Aanmelden</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>
        </div>

    </div>
</nav>


<!-- MAIN CONTENT -->
<main>
    <div class="container mt-5 mb-5">

        <h2 class="mb-4">Aanmelden voor de Talentenshow</h2>

        <form action="aanmeldverwerk.php" method="POST" class="row g-3">

            <!-- Voornaam -->
            <div class="col-md-4">
                <label class="form-label">Voornaam</label>
                <input type="text" name="voornaam" class="form-control" required>
            </div>

            <!-- Tussenvoegsel -->
            <div class="col-md-4">
                <label class="form-label">Tussenvoegsel (optioneel)</label>
                <input type="text" name="tussenvoegsel" class="form-control">
            </div>

            <!-- Achternaam -->
            <div class="col-md-4">
                <label class="form-label">Achternaam</label>
                <input type="text" name="achternaam" class="form-control" required>
            </div>

            <!-- Adres -->
            <div class="col-md-6">
                <label class="form-label">Adres</label>
                <input type="text" name="adres" class="form-control" required>
            </div>

            <!-- Postcode -->
            <div class="col-md-3">
                <label class="form-label">Postcode</label>
                <input type="text" name="postcode" class="form-control" required>
            </div>

            <!-- Woonplaats -->
            <div class="col-md-3">
                <label class="form-label">Woonplaats</label>
                <input type="text" name="woonplaats" class="form-control" required>
            </div>

            <!-- E-mail -->
            <div class="col-md-6">
                <label class="form-label">E‑mailadres</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Leeftijd -->
            <div class="col-md-3">
                <label class="form-label">Leeftijd</label>
                <input type="number" name="leeftijd" class="form-control" min="1" required>
            </div>

            <!-- Categorie -->
            <div class="col-md-6">
                <label class="form-label">Categorie</label>
                <select name="categorie" class="form-select" required>
                    <option value="">-- Kies een categorie --</option>
                    <option value="dans">Dans</option>
                    <option value="zang">Zang</option>
                    <option value="toneel">Toneel</option>
                    <option value="instrumentaal">Instrumentaal</option>
                    <option value="overig">Overig</option>
                </select>
            </div>

            <!-- Overig tekstvak -->
            <div class="col-md-6">
                <label class="form-label">Overig (optioneel)</label>
                <input type="text" name="overig_omschrijving" class="form-control"
                       placeholder="Beschrijf jouw act (alleen bij 'Overig')">
            </div>

            <!-- Verstuur knop -->
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary w-100">
                    Aanmelden
                </button>
            </div>

        </form>

    </div>
</main>


<!-- FOOTER -->
<footer></footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function toggleMenu() {
        const nav = document.getElementById("myTopnav");
        const menu = document.getElementById("menuItems");
        const hamburger = document.getElementById("hamburger");

        menu.classList.toggle("show");
        hamburger.classList.toggle("open");
    }
</script>

</body>
</html>